<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Visualizar información en paginas
       $data['catalogs'] = Catalog::paginate(10);
        //Acceder vista
        return view('fragments.catalog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fragments.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'image_path' => 'required|max:10000|mimes:jpeg,png,jpg',
        ]);

        if($validated)
        {
            $dataCatalog = request()->except('_token');
            if($request->hasFile('image_path')){
                $dataCatalog['image_path']=$request->file('image_path')->store('uploads', ['disk' => 'public']);
            }
            Catalog::insert($dataCatalog);
            
            return redirect('catalog/')->with('success', 'Se ha guardado el objeto.');
        }
        return redirect()->back()->withErrors($validated)->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Catalog $catalog)
    {
        //
        $data['catalogs']=Catalog::all();
        //Acceder vista
        return view('fragments.category.user_category', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit($id_catalog)
    {
        //
        $catalog=Catalog::findOrFail($id_catalog);

        return view('fragments.catalog.edit', compact('catalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_catalog)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'image_path' => 'required|max:10000|mimes:jpeg,png,jpg',
        ]);
        if($validated)
        {
            $dataCatalog = request()->except(['_token', '_method']); 

            if($request->hasFile('image_path')){
                $catalog=Catalog::findOrFail($id_catalog);
                Storage::delete( 'public/'.$catalog->image_path);
                $dataCatalog['image_path']=$request->file('image_path')->store('uploads', ['disk' => 'public']);
            }

            Catalog::where('id_catalog', '=', $id_catalog)->update($dataCatalog);
            

            $catalog=Catalog::findOrFail($id_catalog);

            return redirect('catalog/'.$catalog->id_catalog.'/edit')->with('success','El objeto fue editado correctamente.');
        }
        return redirect()->back()->withErrors($validated)->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_catalog)
    {
        //
        $catalog=Catalog::findOrFail($id_catalog);
        if(Storage::delete( 'public/'.$catalog->image_path)){
            Catalog::destroy($id_catalog);

        }
        
        return redirect('catalog/')->with('success', 'Se ha borrado el objeto');
    }
}
