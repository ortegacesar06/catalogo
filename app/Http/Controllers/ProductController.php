<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }

        $data['products'] = Product::paginate(10);
        return view('fragments.product.listUser', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }

        $categories = Category::select(['id_category','name','catalog_id'])->get();
        return view('fragments.product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;

        $product->category_id = $request->category;
        
        $path = $request->file('image_path')->store('uploads',['disk'=>'public']);
        $product->image_path = $path;

        $product->save();

        return redirect('productos/crear')->with('success', 'El producto se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }

        $data['products']=Product::all();
        //Acceder vista
        return view('fragments.product.userView', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }
        
        $product=Product::where('id_product','=',$id_product)->firstOrFail();
        $categories = Category::select(['id_category','name','catalog_id'])->get();

        return view('fragments.product.editP', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'image_path' => 'required|max:10000|mimes:jpeg,png,jpg,webp',
            'category' => 'required',
        ]);

        if($validated)
        {
            $dataCategory = request()->except(['_token', '_method']); 
            $product= Product::findOrFail($id_product);

            if($request->hasFile('image_path')){
                Storage::delete( 'public/'.$product->image_path);
                $dataCategory['image_path']=$request->file('image_path')->store('uploads', ['disk' => 'public']);
            }

            $product->fill($dataCategory);
            $product->save();

            //Product::where('id_product', '=', $id_product)->update($dataCategory);            
            //return view('fragments.category.edit', compact('category'));

            return redirect()->back()->with('success','El objeto fue editado correctamente.');
        }
        return redirect()->back()->withErrors($validated)->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
        $product = Product::findOrFail($id_product);
        if(Storage::delete( 'public/'.$product->image_path)){
            if($product->delete()){
        
                return redirect('productos/listUser/')->with('success', 'Se ha borrado el objeto');

            }else{                
                return redirect('productos/listUser/')->with('error', 'No se ha borrado el objeto');
            }
        }else{
            return redirect('productos/listUser/')->with('error', 'Error al borrar la imagen del producto.');
        }        
    }
}
