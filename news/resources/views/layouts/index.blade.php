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
                <a href="">{{$web[$i]->content}}</a>
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
            
            @for($i=5;$i<8;$i++)
            <div class="col-md-4" style="margin-bottom: 10px;">
              <div class="card">
                <h5 class="card-header">{{$web[$i]->city}}</h5>
                <div class="card-body">
                  <div class="col-lg-12">
                    <a href="">
                      <img class="card-img-top" src="{{$web[$i]->image}}">
                    </a>
                    <p class="card-text">
                      <a href="">{{Str::limit($web[$i]->content, 70, ' ...')}}</a>
                    </p>
                    <aside class="widget-area">
                      <section class="widget widget_latest_news_thumb">
                        <article class="item">
                          <a href="#" class="thumb">
                            <span  role="img">
                              <img  style="height: 100%" src="{{$web[$i]->image}}" >
                            </span>
                          </a>
                          <div class="info">
                            <h4 class="title usmall">
                              <a href="#"> {{Str::limit($web[$i]->title, 45, ' ...')}}</a>
                            </h4>
                            <span>ایک گھنٹہ قبل</span>
                          </div>
                        </article>
                        <article class="item">
                          <a href="#" class="thumb">
                            <span  role="img">
                               <img  style="height: 100%" src="{{$web[$i]->image}}" >
                            </span>
                          </a>
                          <div class="info">
                            <h4 class="title usmall">
                              <a href="#">{{Str::limit($web[$i]->title, 45, ' ...')}}</a>
                            </h4>
                            <span>ایک گھنٹہ قبل</span>
                          </div>
                        </article>
                        <article class="item">
                          <a href="#" class="thumb">
                            <span  role="img">
                               <img  style="height: 100%" src="{{$web[$i]->image}}" >
                            </span>
                          </a>
                          <div class="info">
                            <h4 class="title usmall">
                              <a href="#">{{Str::limit($web[$i]->title, 45, ' ...')}}</a>
                            </h4>
                            <span>ایک گھنٹہ قبل</span>
                          </div>
                        </article>
                      </section>
                    </aside>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-secondary">مزید دیکھے</button>

                </div>
              </div>
            </div>
            @endfor
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