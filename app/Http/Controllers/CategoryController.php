<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Category::where('category_parent','0')->get();
        return view('pages.Category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.Category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category_code = $request->category_code;
        $categories->category_parent = $request->category_parent;
        $categories->category_title = $request->category_title;
        $categories->category_icon = $request->category_icon;
        
        if ($request->category_parent == 0) {
            $articleImage = time().'.'.request()->category_thumbnail->getClientOriginalExtension();
        request()->category_thumbnail->move(public_path('images/Category'), $articleImage);
            $categories->category_thumbnail = $articleImage;
            
        } else {
            $categories->category_thumbnail = 'null';
        }
        
        $categories->save();
        return redirect('/Category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
        $category = Category::all();
        return view('pages.Category.edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->category_code = $request->category_code;
        $categories->category_parent = $request->category_parent;
        $categories->category_title = $request->category_title;
        $categories->category_icon = $request->category_icon;
        if ($request->category_parent == 0) {
            $articleImage = time().'.'.request()->category_thumbnail->getClientOriginalExtension();
        request()->category_thumbnail->move(public_path('images/Category'), $articleImage);
            $categories->category_thumbnail = $articleImage;
            
        } else {
            $categories->category_thumbnail = 'null';
        }
        $categories->save();
        return redirect('/Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/Category');
    }
}
