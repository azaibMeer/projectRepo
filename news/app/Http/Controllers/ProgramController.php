<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Auth;


class ProgramController extends Controller
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
        return view("dashboard.programs.add");
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
        'slug' => 'required',
        'vedio_id' => 'required',
        'image' => 'required',
        'status' => 'required'
         ]);

        
        $program = new Program();
        $program->name = $request->name;
        $program->slug = $request->slug;
        $program->status = $request->status;
        $program->vedio_id = $request->vedio_id;
        $program->description = $request->description;
        
        


        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $program->image = $filename;
            
            
        }
        
        $program->save();
        if(Auth::User()){
                return redirect('/program/list')->with('success', 'Program inserted Successfully');
         }
        else{
        
            return redirect("/login")->with('danger', 'please login first');
        
        }
        

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        
        $data['program'] = Program::orderBy('id','DESC')->get();
        if(Auth::User()){
         return view("dashboard.programs.list",$data);
    }
    else{
        return redirect("/login")->with('danger', 'please login first');
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data['program'] = Program::where('id',$id)->first();
        return view("dashboard.programs.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        
        $request->validate([

        'name' => 'required',
        'slug' => 'required',
        'vedio_id' => 'required',
        
        'status' => 'required'
         ]);

        
        $program = Program::find($id);
        $program->name = $request->name;
        $program->slug = $request->slug;
        $program->status = $request->status;
        $program->vedio_id = $request->vedio_id;
        $program->description = $request->description;
        
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/main-news/'.$imageName;
            $file->move(public_path('/assets/img/main-news/'), $filename);
            $program->image = $filename;
            
            
        }
        
        $program->update();
        if(Auth::User()){
                return redirect('/program/list')->with('success', 'Program updated Successfully');
         }
        else{
        
            return redirect("/login")->with('danger', 'please login first');
        
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect('/program/list')->with('danger', 'program delete Successfully');
    }
}
