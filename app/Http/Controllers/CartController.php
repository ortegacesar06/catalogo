<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        Cart::add($product->id_product, $product->name, 1, $product->price)->associate('App\Models\Product');

        return redirect()->back();
    }

    public function remove($row)
    {
        Cart::remove($row);
        return redirect()->back();
    }

    public function updateCart(Request $request){
        $index = 0;
        foreach ($request->rows as $row) {
            Cart::update($row, $request->qty[$index]);
            $index += 1;
        }

        return redirect()->back();
    }
}