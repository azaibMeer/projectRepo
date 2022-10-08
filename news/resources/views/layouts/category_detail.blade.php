
@extends('layouts.welcome') 
@section('content')
<section class="news-details-area ptb-50">

            <div class="container">

                                
                <div class="row">
                    <div class="politics-news">
                    <div class="section-title"> 
                        <h2></h2> 
                    </div>

                    <div class="row">

                        @for($i = 0; $i <=5; $i++)

                         @php
                            if(!isset($web[$i]))
                              continue;
                          @endphp
                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="{{url($web[$i]->image)}}" alt="image">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                    <span>پاکستان </span>
                                    <h3>
                                        <a href="#">{{$web[$i]->title}}</a>
                                    </h3>
                                    <p>28 ستمبر 2022</p>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                </div>
               
            </div>
        </section>
                @endsection