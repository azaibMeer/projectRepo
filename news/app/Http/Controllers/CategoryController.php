<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['categories'] = Category::where('status','1')->get();
       $data['web'] = News::where('category_id',$id)->
                            orderBy('news_id','DESC')->take(6)->get();
        
        return view('layouts.category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::User()){
        return view("dashboard.category.add");
    }else{
        return redirect('/login');
    }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([

        'category_name' => 'required'

       ]);

        $categories = new Category();
        $categories->name = $request->category_name;
        $categories->status = "0";
        $categories->save();
        return redirect('/categories/list')->with('success', 'Category inserted Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data['categories'] = Category::get();
        return view("dashboard.category.list",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::where('category_id',$id)->first();
        return view("dashboard.category.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request);
        
        //$data['categories'] = Category::where('category_id',$id)->first();
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->update();
        return redirect('/categories/list')->with('success', 'Category Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories/list')->with('success', 'Category delete Successfully');
    }
}
