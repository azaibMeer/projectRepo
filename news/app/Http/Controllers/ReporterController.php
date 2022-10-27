<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use App\Models\News;
use App\Models\City;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Verse;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\NewsController;
class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['cities'] = City::where('status','1')->get();

         return view("dashboard.reporter.add",$data);
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

        'name' => 'required',
        'father_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'reporter_type' => 'required',
        'phone' => 'required',
        'status' => 'required',
         ]);

        
        $reporter = new Reporter();
        $reporter->city_id = $request->city;
        $reporter->name = $request->name;
        $reporter->father_name = $request->father_name;
        $reporter->address = $request->address;
        $reporter->status = $request->status;
        $reporter->reporter_type = $request->reporter_type;
        $reporter->phone = $request->phone;
        
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=550,height=550'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/reporter/create')->with('danger', 'Image Must Contain 550 px by 550 px ... Reporter Not Added Successfully');
            }else{
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/reporter_img/'.$imageName;
            
            $file->move(public_path('/assets/img/reporter_img/'), $filename);
            $reporter->image = $filename;
            }
            
        }
      


        $reporter->save();
        return redirect('/reporter/list')->with('success', 'Reporter Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function show(Reporter $reporter)
    {
        //return "hel";
        //$data['reporter'] = Reporter::get();
         $data['reporter'] = Reporter::join('cities','cities.id','reporter.city_id')->select('cities.*','reporter.*')->get();
        return view("dashboard.reporter.list",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporter $reporter,$id)
    {   
        $data['cities'] = City::where('status','1')->get();
        $data['reporter'] = Reporter::where('reporter_id',$id)->first();
        return view("dashboard.reporter.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $reporter = Reporter::find($id);
        $request->validate([

        'name' => 'required',
        'father_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'reporter_type' => 'required',
        'phone' => 'required',
        'status' => 'required',
         ]);

        
        
        $reporter->city_id = $request->city;
        $reporter->name = $request->name;
        $reporter->father_name = $request->father_name;
        $reporter->address = $request->address;
        $reporter->status = $request->status;
        $reporter->reporter_type = $request->reporter_type;
        $reporter->phone = $request->phone;
        
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=550,height=550'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/reporter/create')->with('danger', 'Image Must Contain 550 px by 550 px ... Reporter Not Edit Successfully');
            }else{
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/reporter_img/'.$imageName;
            
            $file->move(public_path('/assets/img/reporter_img/'), $filename);
            $reporter->image = $filename;
            }
            
        }
      


        $reporter->save();
        return redirect('/reporter/list')->with('success', 'Reporter Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporter $reporter,$id)
    {
        $reporter = Reporter::find($id);
        $reporter->delete();
        return redirect('/reporter/list')->with('danger', 'Reporter Deleted Successfully');;
    }

     public function reporters($id)
    {   
        $data['setting'] = Setting::first();
        $data['verse'] = Verse::first();
        $data['categories'] = Category::where('status','1')->get();
        
        $data['reporters'] = Reporter::where('city_id',$id)
         ->where('status','1')->where('reporter_type', '1')->get();
        
        $data['buero'] = Reporter::where('city_id', $id)->
        where('reporter_type','0')
        ->orderBy('reporter_id','DESC')->first();

        $data['latest'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(3)->get();
            
        //dd($id,$data['reporters']);
        return view("layouts.reporter.detail",$data);
    }



}
