<?php

namespace App\Http\Controllers;


use App\Goods;
use Illuminate\Http\Request;


class OrdersController extends Controller
{
    //

    public function buyAction($id) {
        $product = Goods::find($id);

        if($product) {
            return view('order', ['goods_id' => $id]);
        }
    }
}
