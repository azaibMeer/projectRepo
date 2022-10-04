@extends('layouts.welcome') 
@section('content')


<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>رابطہ کریں </h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>رابطہ کریں </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="contact-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        

                        

                        <div class="contact-form">
                            <div class="title">
                                <h3>فارم کو پُر کریں </h3>
                                <p></p>
                            </div>

                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="نام">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="ای میل">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="فون نمبر">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" id="subject" required data-error="Please enter your subject" placeholder="مضمون">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="اپنا پیغام ٹائپ کریں"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme">
                                            <label class="form-check-label" for="checkme">
                                                خدمات کی شرائط اور رازداری کی پالیسی کو قبول کریں۔
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">پیغام بھیجیں</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <aside class="widget-area">
                            <section class="widget widget_stay_connected">
                                <h3 class="widget-title">جڑے رہیے</h3>
                                
                                <ul class="stay-connected-list">
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-facebook'></i>
                                            120,345 Fans
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="twitter">
                                            <i class='bx bxl-twitter'></i>
                                            25,321 Followers
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="linkedin">
                                            <i class='bx bxl-linkedin'></i>
                                            7,519 Connect
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="youtube">
                                            <i class='bx bxl-youtube'></i>
                                            101,545 Subscribers
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="instagram">
                                            <i class='bx bxl-instagram'></i>
                                            10,129 Followers
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="wifi">
                                            <i class='bx bx-wifi'></i>
                                            952 Subscribers
                                        </a>
                                    </li>
                                </ul>
                            </section>

                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        @endsection