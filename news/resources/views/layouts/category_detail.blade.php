@extends('layouts.welcome') 
@section('content')



        <section class="news-details-area ptb-50">

            <div class="container">
                <div class="section-title"> 
                      <h2>خبر کی تفصیل</h2>
                    </div>
                                 <div class="col-lg-12 col-md-12">
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

                                
                                 @if($web->vedio != "")
                <div class="row">

                <div class="col-lg-12 col-md-12">
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
                @else
                <img src="{{url($web->image)}}" alt="image">
                @endif
                            </div>
        
                            <div class="article-content">
                                
                                <p>{{ $web->content}}</p>
                                
                                
                            </div>
        
                         </div>
                    </div>
                </div>
               
            </div>
        </section>

        
        @endsection

