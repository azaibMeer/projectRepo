<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\City;
use App\Models\Program;
use Illuminate\Http\Request;

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
        dd($request->all());
         $request->validate([

        'title' => 'required',
        'content' => 'required',
        /*'image' => 'dimensions:width=330,height=215'*/

        

       ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->status = "0";
        $cheackImg = $request->image;

        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = $file->GetClientOriginalName();
            $filename = 'assets/img/main-news/'.$imageName;
            $file->move('assets/img/main-news/', $filename);
            $news->image = $filename;
        }

        $news->save();
        return redirect('/news/create')->with('success', 'News inserted Successfully');


      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(web $web)
    {
        //
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
