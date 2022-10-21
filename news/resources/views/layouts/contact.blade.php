@extends('layouts.welcome') 
@section('content')



        <section class="contact-area ptb-50">
            <div class="container">
                <div class="section-title"> 
                     <h2>رابطہ کریں</h2>
                    </div>
                <div class="row">
                                  @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
   @elseif(session()->has('danger'))
   <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
                    <div class="col-lg-12">
                        
                <div class="contact-form">

                            <div class="title">
                                <h3>فارم کو پُر کریں </h3>
                                <p></p>
                            </div>

                            <form  method="post" action="{{url('/contact/store')}}">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="نام">
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="ای میل">
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="فون نمبر">
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" id="subject" required data-error="Please enter your subject" placeholder="مضمون">
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="اپنا پیغام ٹائپ کریں"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" value="submit">
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @endsection