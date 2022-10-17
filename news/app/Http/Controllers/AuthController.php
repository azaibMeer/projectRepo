<?php

namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
    
use App\Models\User;
use Auth;
use Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.login");
    }
    

    public function login(Request $request)
    {
       /*dd($request);*/
       $errors = new MessageBag;
       $request->validate([

        'email' => 'required',
        'password' => 'required'

       ]);
       $cheack = $request->only('email','password');

       if(Auth::attempt($cheack)){

        $user = Auth::User();
        
        return view("dashboard.welcome");
        
        
       }
       else {
         
            $errors = new MessageBag(['password' => ['Email or Password is invalid.']]); 
            return redirect('/login')->withErrors($errors);
            }
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.user.add");
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
        'fname' => 'required',
        'email' => 'required',
        'password' => 'required',
        'address' => 'required',
        'phone' => 'required'
        

       ]);

        $user = new User();
        $user->name = $request->name;
        $user->father_name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->name;
        $user->phone = $request->phone;
        
        if($request->hasfile('image')){
            
            $file = $request->file('image');
            
            $fileArray = array('image'=>$file);
            $rules = array(
                'image' => 'required|image|dimensions:width=192,height=192|max:2000'
            );
            $validator = Validator::make($fileArray,$rules);
            if($validator->fails()){
                 return redirect('/user/create')->with('danger', 'Image Must Contain 192 px by 192 px & 2 Mb ... User Not Added Successfully');
            }else{
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = '/assets/img/user_images/'.$imageName;
            $file->move(public_path('/assets/img/user_images/'), $filename);
            $user->image = $filename;
            }
            
        }
        
        $user->save();
        return redirect('/user/create')->with('success', 'User Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['users'] = User::get();
        return view("dashboard.user.list",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['users'] = User::where('id',$id)->first();
        return view("dashboard.user.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
