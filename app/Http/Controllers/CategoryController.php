<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //File Upload
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backendtemplate/categoryimg'),$imageName);
        $myfile='backendtemplate/categoryimg/'.$imageName;

        $category = new Category();
        $category->name = $request->name;
        $category->photo = $myfile;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);  
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //if upload new image, delete old image
        $myfile=$request->old_photo;
        if($request->hasfile('photo'))
        {
            $imageName=time().'.'.$request->photo->extension();
            $name=$request->old_photo;

            if(file_exists(public_path($name))){
                unlink(public_path($name));
                $request->photo->move(public_path('backendtemplate/categoryimg'),$imageName);
                $myfile='backendtemplate/categoryimg/'.$imageName;
            }
        }
        //Update data
        $category = Category::find($id);
        $category->name = $request->name;
        $category->photo = $myfile;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
