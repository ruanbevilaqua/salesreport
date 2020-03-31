<?php

namespace App\Http\Controllers;

use App\Entities\Client;
use Illuminate\Http\Request;
use League\Csv\Writer;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', ['clients' => $clients]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client;
        
        $fields = $client->getFillable();
        
        return view('client.create', ['fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());

        return redirect()->action('ClientController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($client)
    {
        return redirect()->action('ClientController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entities\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client = Client::findOrFail($client->id);
        $client->update($request->all());

        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client = Client::findOrFail($client->id);
        $client->delete();

        return $client;
    }

    public function export()
    {
        $clients = Client::all();
        
        $csv = Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['Nome do cliente', 'Endereço', 'Telefone', 'Email', 'Data do cadastro']);
        foreach($clients as $client)
        {
            $csv->insertOne([
                $client->name, 
                $client->address, 
                $client->phone,
                $client->email,
                $client->created_at,
            ]);
        }

        $csv->output('clientes_'.Carbon::now().'.csv');
        
    }
}
