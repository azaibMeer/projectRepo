<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\City;
use App\Models\Setting;
use App\Models\Program;
use Illuminate\Http\Request;
use Validator;
use Auth;
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

        $data['setting'] = Setting::first();
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
        if(Auth::User()){
         return view("dashboard.news.add",$data);
    }
    else{
        return redirect("/login")->with('danger', 'please login first');
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
        //dd($request->all());
        /*$city = $request->get('city');
        dd($city);*/

         $request->validate([

        'title' => 'required',
        'content' => 'required',
        'author_name' => 'required',
        'city' => 'required',
        'category' => 'required',
        'status' => 'required',
         ]);

        
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author_name;
        $news->status = $request->status;
        
        $news->city_id = $request->city;
        $news->category_id = $request->category;


        if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=1920,height=1000'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/news/create')->with('danger', 'Image Must Contain 1920 px by 1000 px ... News Not Added Successfully');
            }else{
            $imageName = $file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move('/assets/img/main-news/', $filename);
            $news->image = $filename;
            }
            
        }

        $news->save();
        if(Auth::User()){
        return redirect('/news/list')->with('success', 'News inserted Successfully');
    }
    else{
        return redirect("/login")->with('danger', 'please login first');
        }
        

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $data['news'] = News::orderBy('news_id','DESC')->get();
        if(Auth::User()){
         return view("dashboard.news.list",$data);
    }
    else{
        return redirect("/login")->with('danger', 'please login first');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data['news'] = News::where('news_id',$id)->first();
        $data['cities'] = City::where('status','1')->get();
        $data['categories'] = Category::where('status','1')->get();

        if(Auth::User()){
        return view("dashboard.news.edit",$data);
    }
    else{
        return redirect("/login")->with('danger', 'please login first');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //dd($request->all());
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author_name;
        $news->status = $request->status;
        
        $news->city_id = $request->city;
        $news->category_id = $request->category;

         if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=1920,height=1000'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/news/create')->with('danger', 'Image Must Contain 1920 px by 1000 px ... News Not Added Successfully');
            }else{
            $imageName = $file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move('/assets/img/main-news/', $filename);
            $news->image = $filename;
            }
            
        }
        $news->update();
        if(Auth::User()){
        return redirect('/news/list')->with('success', 'News Updated Successfully');
        }else{
            return redirect("/login")->with('danger', 'please login first');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $news = News::find($id);
        $news->delete();
        return redirect('/news/list')->with('danger', 'news delete Successfully');
    }
}
