<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
       $data['categories']=Category::all();
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
        return view('fragments.category.create');
    }

    /**
    
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
            $dataCategory = request()->except('_token');
            if($request->hasFile('image_path')){
                $dataCategory['image_path']=$request->file('image_path')->store('uploads', ['disk' => 'public']);
            }
            Category::insert($dataCategory);
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
        $data['categories']=Category::all();
        //Acceder vista
        return view('fragments.category.user_category', $data);
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

        return view('fragments.category.edit', compact('category'));
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
            'image_path' => 'required|max:10000|mimes:jpeg,png,jpg',
        ]);
        if($validated)
        {
            $dataCategory = request()->except(['_token', '_method']); 

            if($request->hasFile('image_path')){
                $category=Category::findOrFail($id_category);
                Storage::delete( 'public/'.$category->image_path);
                $dataCategory['image_path']=$request->file('image_path')->store('uploads', ['disk' => 'public']);
            }

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
        if(Storage::delete( 'public/'.$category->image_path)){
            Category::destroy($id_category);

        }
        
        return redirect('category/')->with('success', 'Se ha borrado el objeto');
    }
}
