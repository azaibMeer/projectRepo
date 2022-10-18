@extends('layouts.welcome') 
@section('content')


<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>خبر کی تفصیل</h2>
                    <ul>
                        <li><a href="{{url('/')}}">
                                        صفحہ اول</a></li>
                        <li>تفصیل</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="news-details-area ptb-50">

            <div class="container">

                                 <div class="col-lg-10 col-md-12">
                                      <h1>{{ $web->title}}</h1>
                                 </div>
                <div class="row">

                           
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-details-desc">
                             
                            <div class="article-image">

                                <img src="{{url($web->image)}}" alt="image">
                            </div>
        
                            <div class="article-content">
                                 <h6>خبر رساں  : {{$web->author}}</h6>
                                <span>{{$web->created_at->format('M/d/Y')}}</span>
                                <p>{{ $web->content}}</p>
                                
                                
                            </div>
        
                            
        
                            
            
                            
                        </div>
                    </div>
                </div>
                <div class="row">

                           
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-details-desc">
                             
                            <div class="article-image">

                                @if($web->vedio != "")
            <iframe  src="{{url($web->vedio)}}" allowfullscreen></iframe>
            @endif
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        @endsection

