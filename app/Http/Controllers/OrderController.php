<?php

namespace App\Http\Controllers;

use App\Entities\Order;
use App\Entities\Client;
use App\Entities\Product;
use App\Entities\Payment;
use Illuminate\Http\Request;
use League\Csv\Writer;
use Carbon\Carbon;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // A lista será ordenada pelas mais recentes primeiro par a facilitar a visualização em testes
        $orders = Order::with('products', 'payment', 'client')->orderBy('created_at', 'DESC')->get();
        return view('order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create', [
            'clients' => Client::all(),
            'products' => Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        // $order = Order::create($request->all());
        // Criar ordem com id do cliente
        $order = Order::create(['client_id' => $request->client_id]);
        // dd($order);
        $total = 0;
        if(isset($request->amount))
        {
            foreach($request->amount as $product_id => $n)
            {
                if($n > 0)
                {
                    for($i = 0; $i < $n; $i++)
                    {
                        $order->products()->attach($product_id);
                        $total += Product::find($product_id)->price;
                    }
                }
            } 
        } 
        $payment = Payment::create(['total_value' => $total, 'payment_type' => $request->payment_type]);
        $order->payment_id = $payment->id;
        $order->save();
        return redirect()->action('OrderController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = Order::where('id', $order->id)->with('client', 'products', 'payment')->get()->first();
        // dd($order);
        return view('order.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::findOrFail($order->id);
        $order->update($request->all());

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order = Order::findOrFail($order->id);
        $order->delete();

        return $order;
    }

    public function export()
    {
        $orders = Order::with('products', 'payment', 'client')->orderBy('created_at')->get();
        
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['Data Hora', 'Nome do cliente', 'Itens no pedido', 'Valor do pagamento', 'Detalhes do pagamento']);
        foreach($orders as $order)
        {
            $csv->insertOne([
                $order->created_at, 
                $order->client->name, 
                count($order->products), 
                isset($order->payment->total_value) 
                    ? $order->payment->total_value : '',
                isset($order->payment->payment_type) 
                ? $order->payment->payment_type : '',
            ]);
        }

        $csv->output('pedidos_'.Carbon::now().'.csv');
        
    }

}
