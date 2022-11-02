<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Auth;
class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.ads.add");
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
        $request->validate([

        'link' => 'required',
        'image' => 'required'
        
        

       ]);

        $ads = new Ads();
        $ads->link = $request->link;

        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $ads->image = $filename;


            
            
        }


        $ads->save();
        return redirect('/ads/list')->with('success', 'Ads inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $data['ads'] = Ads::get();
        return view("dashboard.ads.list",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $data['ad'] = Ads::where('id',$id)->first();
        return view("dashboard.ads.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());

         $request->validate([

        'link' => 'required',
        
         ]);

        $ads = Ads::find($id);
        $ads->link = $request->link;
          if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $ads->image = $filename;
            
            
        }

        $ads->update();
        if(Auth::User()){
        return redirect('/ads/list')->with('success', 'ad Updated Successfully');
        }else{
            return redirect("/login")->with('danger', 'please login first');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Ads::find($id);
        $ads->delete();
        return redirect('/ads/list')->with('danger', 'Ad delete Successfully');
    }
}
