<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class CityController extends Controller
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
        return view("dashboard.cities.add");
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

        'city_name' => 'required'

       ]);

        $city = new City();
        $city->city_name = $request->city_name;
        $city->status = "0";
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
       $data['cities'] = City::get();
            return view("dashboard.cities.list",$data);
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
        return view("dashboard.cities.edit",$data);
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
