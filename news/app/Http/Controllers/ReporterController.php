<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use App\Models\City;
use Illuminate\Http\Request;

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
        
        
       


        /*if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=1920,height=1000'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/news/create')->with('danger', 'Image Must Contain 1920 px by 1000 px ... News Not Added Successfully');
            }else{
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $news->image = $filename;
            }
            
        }*/
      


        $reporter->save();
        return redirect('/reporter/create')->with('success', 'News inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function show(Reporter $reporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporter $reporter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporter $reporter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporter $reporter)
    {
        //
    }
}
