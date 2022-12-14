@extends('layouts.welcome') 
@section('content')
<style>
      .slider { width: 100%; height: 190px ! important;}
      .slider img { width: 100%; }
      .wrapper { width: 100%; margin: 0; }
      @media only screen and (min-width: 1024px) {
        .wrapper { margin: auto; }
      }
      .image {
          height:190px;
          width:1092px !important;
      }
    </style>
        

<section class="main-news-area">
  <div class="container">
    <div class="container-fluid" >
     
     
      <div class="wrapper">
      <div id="myslider" class="slider">

        @foreach($ads as $slider)
        <a href="{{$slider->link}}" target="_blank">
        <img src="{{$slider->image}}" class="image" / >
        </a>
        @endforeach
        
      </div>
    </div>
     <!--  <img src="/assets/img/main-news/ads.png"> -->
    
 
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-12">
          <div class="section-title">
            <h2>تازہ ترین</h2>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <a href="{{url('/detail/'.$web[0]->slug)}}">
                
                <img alt="breaking news" src="{{ $web[0]->image}}"  id="breaking_news">
              
              </a>
            </div>
            <div class="col-md-6">
              <h3>
                <a href="{{url('/detail/'.$web[0]->slug)}}"> 
                  {{Str::limit  ($web[0]->title, 120, ' ...')}}</a>
              </h3>
              <p>
                
                {!! Str::limit (strip_tags($web[0]->content),400, '...') !!}
              </p>
              
                <small class="text-muted">
                  {{ $web[0]->created_at->format('M/d/Y')}}
                </small>
           
            </div>
          </div>
         
        </div>
      </div>
     
      <div class="row" style="margin-top: 25px;">
       
       @for($i=1;$i<=4;$i++)

        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="{{url('/detail/'.$web[$i]->slug)}}">
                                        <img src="{{url($web[$i]->image)}}" alt="image" width="100%" height="135px;">
                                    </a>
                                </div>
                                
                              <div class="politics-news-content">
                                   
                                    <h3>
                                        <a href="{{url('/detail/'.$web[$i]->slug)}}">{{Str::limit($web[$i]->title, 80, ' ...')}}</a>
                                    </h3>
                                     <span>{{ $web[$i]->created_at->format('M/d/Y')}}</span>
                                </div>
                            </div>
                        </div>
       @endfor
        
      </div>
     
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>شہر</h2>
          </div>
          <div class="row">
            
            
            @foreach($cities as $city)

            @php
              $cityid = $city->id;


              $citynews  = App\Models\News::where('city_id',$cityid)
                            ->where('status','1')
                            ->orderBy('news_id','DESC')
                            ->take(4)
                            ->get();

              if(count($citynews) == 0)
                continue;

            @endphp
            <div class="col-md-4" style="margin-bottom: 10px;">
              <div class="card">
                <a href="{{url('/city/'.$city->slug)}}">
                <h5 class="card-header">{{$city->city_name}}</h5>
                </a>
                <div class="card-body">
                  <div class="col-lg-12">
                    
                    <a href="{{url('/detail/'.$citynews[0]->slug)}}">
                      <img class="card-img-top" src="{{$citynews[0]->image}}" height="177px">
                    </a>
                    <h5 class="card-text">
                      <a href="{{url('/detail/'.$citynews[0]->slug)}}">
                        {{Str::limit($citynews[0]->title, 50, ' ...')}}
                      </a>
                    </h5>

                    <aside class="widget-area">
                      <section class="widget widget_latest_news_thumb">
                        @for($i=1;  $i<=4; $i++)

                          @php
                            if(!isset($citynews[$i]))
                              continue;
                          @endphp
                        <article class="item">
                          <a href="{{url('/detail/'.$citynews[$i]->slug)}}" class="thumb">
                            <span  role="img">
                              <img  style="height: 100%" src="{{$citynews[$i]->image}}" >
                            </span>
                          </a>
                          <div class="info">
                            <h4 class="title usmall">
                            <a href="{{url('/detail/'.$citynews[$i]->slug)}}">
                        {{Str::limit($citynews[$i]->title, 70, ' ...')}}
                                
                              </a>
                            </h4>
                            
                          </div>
                        </article>
                        
                        @endfor
                      </section>
                    </aside>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="{{url('/city/'.$city->slug)}}" class="btn btn-primary">مزید دیکھے
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
       <div class="row" style="margin-top: 15px;">
        <div class="col-md-12">
          <div class="section-title">
            <h2> پروگرام </h2>
          </div>
          <div class="row">
            
            <div class="col-md-12">
             <div class="owl-carousel owl-theme">
            @foreach($programs as $program)
                <div class="item">
                    <a href="{{$program->slug}}">
                    <img src="{{$program->image}}">
                    </a>
                    </a>
                  </div>
              @endforeach
                 
              </div>

            </div>
          </div>

        </div>
      </div>
      
      
    </div>
  </div>

</section>

<script src="/assets/js/simpleslider.js"></script>
  <script>
    simpleslider.getSlider({
      container: document.getElementById('myslider'),
      
      prop: 'opacity',
      init: 0,
      show: 1,
      end: 0,
      unit: '',
      delay: 5,
      
    });
  </script>
@endsection


