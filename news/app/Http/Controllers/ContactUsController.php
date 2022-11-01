<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Contact;
use App\Models\Verse;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;

class ContactUsController extends Controller
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
       $data['verse'] = Verse::where('status','1')->
                            orderBy('id','DESC')->first();
        $data['latest'] = News::where('status','1')->
                            orderBy('news_id','DESC')->take(3)->get();
       return view("layouts.contact",$data);
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
        //dd($request);
        $request->validate([

        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required'

       ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->description = $request->message;
        
        $contact->save();
        return redirect('user/contact')->with('success', 'ہم سے رابطہ کرنے کا شکریہ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $data['contact'] = Contact::get();
        return view("layouts.contact.list",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
