<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SantiGraviano\LaravelMercadoPago\MP;




class MercadoPagoController extends Controller
{

    protected $MP_ID;
    protected $MP_SECRET;
    protected $endpoint;

    public function __construct(){

        $this->middleware('auth');
        $this->CLIENT_ID  = config('app.MP')['MP_ID'];
        $this->CLIENT_SECRET = config('app.MP')['MP_SECRET'];
        $this->endpoint = url('some url');
    }

    public function getCreatePreference()
    {
        $preferenceData = [
            'items' => [
                [
                    'id' => 1,
                    'title' => 'Credito',
                    'quantity' => 1,
                    'currency_id' => 'MXN',
                    'unit_price' => 5
                ]
            ],
        ];

        $mp = new MP();
        $preference = $mp->create_preference($preferenceData);
  
        return dd($preference);

        // $preference_data = array (
        //     "items" => array (
        //         array (
        //             "title" => "Test2",
        //             "quantity" => 1,
        //             "currency_id" => "MXN",
        //             "unit_price" => 10.41
        //         )
        //     )
        // );

        // try {
        //     $preference = MP::create_preference($preference_data);
        //     return  dd($preference); 
        //     // redirect()->to($preference['response']['init_point']);
        // } catch (Exception $e){
        //     dd($e->getMessage());
        // }
    }

    public function getpay(){    
        return view('vistas.mercadoPago');
    }
}
