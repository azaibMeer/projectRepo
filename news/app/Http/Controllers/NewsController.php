<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\City;
use App\Models\Program;
use Illuminate\Http\Request;
use Validator;

use App\Http\Controllers\NewsController;




class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::where('status','1')->get();
        $data['web'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(5)->get();


        $data['cities'] = City::where('status','1')->get();
        $data['programs'] = Program::where('status','1')->get();
    

         return view('layouts.index',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cities'] = City::where('status','1')->get();
        $data['categories'] = Category::where('status','1')->get();
        return view("dashboard.news.add",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $request->validate([

        'title' => 'required',
        'content' => 'required',
         ]);
       
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->status = "0";
        
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=1920,height=1000'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/news/create')->with('danger', 'image Must Contain 1920 by 1000px ... News Not Added Successfully');
            }else{
            $imageName = $file->GetClientOriginalName();
            $filename = 'assets/img/main-news/'.$imageName;
            $file->move('assets/img/main-news/', $filename);
            $news->image = $filename;
            }
            
        }

        $news->save();
        return redirect('/news/list')->with('success', 'News inserted Successfully');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("dashboard.news.list");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(web $web)
    {
        //
    }
}
