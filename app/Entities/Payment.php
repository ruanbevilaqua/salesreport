<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    /* 
    O pagamento não será implementado aqui, então apenas imagine que ao final 
    da compra exista a integração com algum gateway de pagamento e através do 'id_at_gateway'
    nós possamos rastrear as informações referentes a um pagamento. 
    
    Como não é nosso objetivo implementar o pagamento aqui, então não haverá implementação de rotas
    para recebimento de notificações do gateway de pagamentos;
    */

    use SoftDeletes;

    protected $fillable = [
        'total_value', 
        'payment_type', 
        'id_at_gateway'
    ];
    
    public function order()
    {
        return $this->belongsTo('App\Entities\Order', 'id', 'payment_id');
    }

}
