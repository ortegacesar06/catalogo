<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
       $data['categories'] = Category::paginate(10);
       
        //Acceder vista
        return view('fragments.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catalogs = Catalog::select(['id_catalog','name'])->get();
        return view('fragments.category.create', ['catalogs' => $catalogs]);
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
            'catalog_id' => 'required',
        ]);

        if($validated)
        {
            $dataCategory = request()->except('_token');
            
            Category::insert($dataCategory);
            //return response()->json($dataCategory);
            return redirect('category/')->with('success', 'Se ha guardado el objeto.');
        }
        return redirect()->back()->withErrors($validated)->withInput();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id_category)
    {
        //
        $category=Category::findOrFail($id_category);
        $catalogs = Catalog::select(['id_catalog','name'])->get();

        return view('fragments.category.edit', compact('category'), compact('catalogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_category)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'catalog_id' => 'required',
        ]);
        if($validated)
        {
            $dataCategory = request()->except(['_token', '_method']); 
            $category=Category::findOrFail($id_category);
                
            

            Category::where('id_category', '=', $id_category)->update($dataCategory);
            

            $category=Category::findOrFail($id_category);
            //return view('fragments.category.edit', compact('category'));
            return redirect('category/'.$category->id_category.'/edit')->with('success','El objeto fue editado correctamente.');
        }
        return redirect()->back()->withErrors($validated)->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_category)
    {
        //
        $category=Category::findOrFail($id_category);
        Category::destroy($id_category);
        return redirect('category/')->with('success', 'Se ha borrado el objeto');
    }
}
