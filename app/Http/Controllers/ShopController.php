<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::orderByDesc('id_catalog')->limit(4)->get();
        $new_products = Product::orderByDesc('id_product')->limit(6)->get();     
        
        return view('fragments.shop.index', [
            'catalogs' => $catalogs,
            'new_products' => $new_products,
        ]);
    }

    public function catalogue()
    {
        $catalogs = Catalog::orderByDesc('id_catalog')->get();

        return view('fragments.shop.catalogue', [
            'catalogs' => $catalogs,
        ]);
    }

    public function products(Request $request, $catalog)
    {
        $catalog = Catalog::find($catalog);
        $category = $request->input('category');
        
        if(!is_null($category)){
            $products = Product::where('category_id', '=', $category)->orderByDesc('id_product')->get();
        }else{
            $categories = $catalog->categories->modelKeys();

            $query = Product::orderByDesc('id_product');
            foreach ($categories as $item) {
                $query = $query->orWhere('category_id', $item);
            }

            $products = $query->get();
        }

        return view('fragments.shop.products', [
            'catalog' => $catalog,
            'products' => $products,
        ]);
    }

    public function single($id)
    {
        $product = Product::find($id);
        return view('fragments.shop.product', [
            'product' => $product,
        ]);
    }

    public function cart()
    {
        return view('fragments.shop.cart');
    }

    public function contact()
    {
        return view('fragments.shop.contact');
    }
}