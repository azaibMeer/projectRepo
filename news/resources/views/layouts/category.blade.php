
@extends('layouts.welcome') 
@section('content')
<section class="news-details-area ptb-50">

            <div class="container">

                                
                <div class="row">
                    <div class="politics-news">
                    <div class="section-title"> 
                        <h2>{{$category->name}}</h2> 
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
                                    <a href="{{url('/detail/'.$web[$i]->slug)}}">
                                        <img src="{{url($web[$i]->image)}}" alt="image" height="135px;" width="100%;">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                   
                                    <h3>
                                        <a href="{{url('/detail/'.$web[$i]->slug)}}"> {{Str::limit  ($web[$i]->title, 80, ' ...')}}</a>
                                    </h3>
                                     <span>{{$web[$i]->created_at->format('M/d/Y')}}</span>
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