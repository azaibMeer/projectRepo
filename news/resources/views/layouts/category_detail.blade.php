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
                             <div class="article-content">
                                  <h6>خبر رساں  : {{$web->author}}</h6>
                            <span>{{$web->created_at->format('M/d/Y')}}</span>
                             </div>
                            <div class="article-image">

                                <img src="{{url($web->image)}}" alt="image">
                            </div>
        
                            <div class="article-content">
                                
                                <p>{{ $web->content}}</p>
                                
                                
                            </div>
        
                            
        
                            
            
                            
                        </div>
                    </div>
                </div>
                @if($web->vedio != "")
                <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="section-title" style="margin-top: 10px;"> 
                       <h2>خبر کی ویڈیو</h2>
                    </div>
                    <div class="blog-details-desc">

                    <div style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                         <iframe width="100%" height="100%"
                                src="{{url('https://www.youtube.com/embed/'.$web->vedio)}}"
                                frameborder="0" allowfullscreen="" style="position:absolute; top:0; left: 0">
                        </iframe>
                    </div>
                    </div>
                </div>
                </div>
                @endif
            </div>
        </section>

        
        @endsection

