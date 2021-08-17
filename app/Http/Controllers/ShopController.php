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
        $search = $request->input('q');
        
        $query = Product::orderByDesc('id_product');

        if(!is_null($search)){
            $query = $query->where('name', 'regexp', $search);
        }

        if(!is_null($category)){
            $products = $query->where('category_id', '=', $category);
        }else{
            $categories = $catalog->categories->modelKeys();
            $query = $query->whereIn('category_id', $categories);
        }

        $products = $query->paginate(10);

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