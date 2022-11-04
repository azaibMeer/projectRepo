<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\City;
use App\Models\Setting;
use App\Models\Program;
use App\Models\Verse;
use App\Models\Ads;
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

        $data['programs'] = Program::where('status','1')->
                    orderBy('id','DESC')->take(8)->get();

        $data['verse'] = Verse::where('status','1')->
                            orderBy('id','DESC')->first();

        $data['latest'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(3)->get();
        $data['ads'] = Ads::orderBy('id','DESC')->take(3)->get();
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
        'slug' => 'required',
        'city' => 'required',
        'image' => 'required',
        'category' => 'required',
        'status' => 'required'
         ]);

        
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->slug = $request->slug;
        
        $news->status = $request->status;
        $news->vedio = $request->vedio;
        
        $news->city_id = $request->city;
        $news->category_id = $request->category;


        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $news->image = $filename;
            
            
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
        $news->slug = $request->slug;
        $news->status = $request->status;
        $news->vedio = $request->vedio;
        
        $news->city_id = $request->city;
        $news->category_id = $request->category;

         if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $news->image = $filename;
            
            
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
