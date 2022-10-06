@extends('layouts.welcome') 
@section('content')

<section class="main-news-area">
  <div class="container">
    <div class="container-fluid" >
      <div class="row">
    <div class="col-md-12" style="display: none">
      <img src="/assets/img/main-news/ads.png">
    </div>
  </div>
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-12">
          <div class="section-title">
            <h2>تازہ ترین</h2>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <a href="">
                <img alt="breaking news" src="{{ $web[0]->image}}" / id="breaking_news">
              </a>
            </div>
            <div class="col-md-6">
              <h3>
                <a href="">{{$web[0]->title}}</a>
              </h3>
              <p>{{ $web[0]->content}}</p>
              <a href="">
                <small class="text-muted">{{ $web[0]->created_at}}</small>
              </a>
            </div>
          </div>
         
        </div>
      </div>
     
      <div class="row" style="margin-top: 10px;">
       
       @for($i=1;$i<=4;$i++)

        <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{$web[$i]->image}}">
            </a>
            <div class="card-body">
              <p class="card-text">
                <a href="">{{Str::limit($web[$i]->title, 50, ' ...')}}</a>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="">
                  <small class="text-muted">ایک گھنٹہ قبل</small>
                </a>
              </div>
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
                            ->take(5)
                            ->get();

              if(count($citynews) == 0)
                continue;

            @endphp
            <div class="col-md-4" style="margin-bottom: 10px;">
              <div class="card">
                <h5 class="card-header">{{$city->city_name}}</h5>
                <div class="card-body">
                  <div class="col-lg-12">
                    
                    <a href="">
                      <img class="card-img-top" src="{{$citynews[0]->image}}">
                    </a>
                    <h6 class="card-text">
                      <a href="">
                        {{Str::limit($citynews[0]->title, 70, ' ...')}}
                      </a>
                    </h6>

                    <aside class="widget-area">
                      <section class="widget widget_latest_news_thumb">
                        @for($i=1;  $i<=4; $i++)

                          @php
                            if(!isset($citynews[$i]))
                              continue;
                          @endphp
                        <article class="item">
                          <a href="#" class="thumb">
                            <span  role="img">
                              <img  style="height: 100%" src="{{$citynews[$i]->image}}" >
                            </span>
                          </a>
                          <div class="info">
                            <h4 class="title usmall">
                              <a href="#">
                        {{Str::limit($citynews[$i]->title, 40, ' ...')}}
                                
                              </a>
                            </h4>
                            <span>ایک گھنٹہ قبل</span>
                          </div>
                        </article>
                        
                        @endfor
                      </section>
                    </aside>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-secondary">مزید دیکھے</button>

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
                <div class="item">
                    <a href="">
                    <img src="/assets/img/main-news/image_3.jpg">
                    </a>
                  </div>
                  <div class="item">
                    <a href="">
                    <img src="/assets/img/main-news/image_3.jpg">
                    </a>
                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>




</section>



@endsection