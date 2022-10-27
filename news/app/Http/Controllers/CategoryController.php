<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Verse;
use App\Models\Setting;
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
        $data['category'] = Category::where("category_id",$id)->first();
        $data['setting'] = Setting::first();
        $data['categories'] = Category::where('status','1')->get();
       
       /*$data['news'] = News::join('categories','categories.category_id','news.category_id')->select('categories.*','news.*')->where('news.category_id',$id)->orderBy('news_id','DESC')->first();*/
       
       $data['web'] = News::where('news.category_id',$id)->
                            orderBy('news_id','DESC')->take(6)->get();
        $data['verse'] = Verse::where('status','1')->
                            orderBy('id','DESC')->first();
        $data['latest'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(3)->get();
        // dd($data);
        if(count($data['web']) > 0){

            return view('layouts.category',$data);
        
        }else{
            return view('layouts.no_news',$data);
        }
        

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
        return redirect('/login')->with('danger', 'plese login first');
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

        'category_name' => 'required',
        'status' => 'required'

       ]);

        $categories = new Category();
        $categories->name = $request->category_name;
        $categories->status = $request->status;
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
        if(Auth::User()){
            $data['categories'] = Category::orderBy('category_id','DESC')->get();
            return view("dashboard.category.list",$data);
        }else{
            return redirect('/login')->with('danger', 'plese login first');
        }
       
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
        if(Auth::User()){
        return view("dashboard.category.edit",$data);
    }else{
        return redirect('/login')->with('danger', 'plese login first');
    }
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
        //dd($request->all());
        
        //$data['categories'] = Category::where('category_id',$id)->first();
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->status = $request->status;
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
        return redirect('/categories/list')->with('danger', 'Category delete Successfully');
    }
}
