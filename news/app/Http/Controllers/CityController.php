<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\News;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Verse;

use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
         
         $data['setting'] = Setting::first();
         
        $data['categories'] = Category::where('status','1')->get();

        $city = City::where("slug",$slug)->first();
        $data['cities'] = $city;
        $id = $city->id;
        
        $data['news'] = News::join('cities','cities.id','news.city_id')->select('cities.*','news.*')->where('news.city_id',$id)->orderBy('news_id','DESC')->first();
        //dd($data['news']);
         $data['web'] = News::where('city_id',$id)->where('status','1')
                            ->orderBy('news_id','DESC')
                            ->take(5)
                            ->get();
         $data['verse'] = Verse::where('status','1')->
                            orderBy('id','DESC')->first();
        $data['latest'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(3)->get();
         return view("layouts.cities",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::User()){
         return view("dashboard.cities.add");
    }
    else{
        return redirect("/login")->with('danger', 'plese login first');
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
        $request->validate([

        'city_name' => 'required',
        'slug' => 'required',
        'status' => 'required'

       ]);

        $city = new City();
        $city->city_name = $request->city_name;
        $city->slug = $request->slug;
        $city->status = $request->status;
        
        $city->save();
        return redirect('/cities/list')->with('success', 'City inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data['cities'] = City::orderBy('id','DESC')->get();
       if(Auth::User()){
         return view("dashboard.cities.list",$data);
    }
    else{
        return redirect("/login")->with('danger', 'plese login first');
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
        $data['cities'] = City::where('id',$id)->first();
        if(Auth::User()){
        return view("dashboard.cities.edit",$data);
    }else{
        return redirect("/login")->with('danger', 'plese login first');
    }
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
        $city = City::find($id);
        $city->city_name = $request->city_name;
        $city->slug = $request->slug;
        $city->status = $request->status;
        $city->update();
        return redirect('/cities/list')->with('success', 'city Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $city = City::find($id);
        $city->delete();
        return redirect('/cities/list')->with('danger', 'City delete Successfully');
    }
}
