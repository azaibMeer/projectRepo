<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Auth;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['setting'] = Setting::first();
       return view("dashboard.setting.edit",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $setting = Setting::first();
        $setting->website_name = $request->website_name;
        
        $setting->facebook_link = $request->facebook_link;
        $setting->whatsapp_link = $request->whatsapp_link;
        $setting->instagram_link = $request->instagram_link;
        $setting->printest_link = $request->printest_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->mobile = $request->mobile;
        $setting->email = $request->address;
        
        $setting->update();
        return redirect('/setting/edit')->with('success', ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
