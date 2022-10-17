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

                                <img src="{{ $web->image}}" alt="image">
                            </div>
        
                            <div class="article-content">
                                
                            <h6>خبر رساں  : {{$web->author}}</h6>
                            <span>{{ $web->created_at->format('M/d/Y')}}</span>
                            
                            <p>{{ $web->content}}</p>
                                
                                
                            </div>
        
                            
        
                            
            
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="politics-news">
                    <div class="section-title"> 
                        <h2>مزید خبریں :</h2> 
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="assets/img/politics-news/politics-news-7.jpg" alt="image">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                    <span>پاکستان </span>
                                    <h3>
                                        <a href="#">علیٰ اختیاراتی کمیٹی کے سربراہ وزیرداخلہ رانا ث نا اللہ ہوں گے،  تبدیلیاں کی گئی ہیں،گر </a>
                                    </h3>
                                    <p>28 ستمبر 2022</p>
                                </div>
                            </div>
                        </div><div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="assets/img/politics-news/politics-news-7.jpg" alt="image">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                    <span>انٹرنیشنل </span>
                                    <h3>
                                        <a href="#">سائفر کے اوپر تو ابھی میں نے کھیلا ہی نہیں ہے، یہ ایکسپوز کریں گے</a>
                                    </h3>
                                    <p>28 ستمبر 2022</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="assets/img/politics-news/politics-news-8.jpg" alt="image">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                    <span>لاہور </span>
                                    <h3>
                                        <a href="#">عمران خان کی حکومت نے اس ملک کا وہ برا حال کیا جو دشمن بھی نہیں کر سکتا: وفاقی وزیر</a>
                                    </h3>
                                    <p>28 ستمبر 2022</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-politics-news">
                                <div class="politics-news-image">
                                    <a href="#">
                                        <img src="assets/img/politics-news/politics-news-9.jpg" alt="image">
                                    </a>
                                </div>
                                
                                <div class="politics-news-content">
                                    <span>انگلش </span>
                                    <h3>
                                        <a href="#">انٹربینک میں ایک موقع پر ڈالر مزید 2 روپے 41 پیسے نیچے آکر 231 روپے 50 پیسے کا ہو گیا</a>
                                    </h3>
                                    <p>28 ستمبر 2022</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->
            </div>
        </section>
        @endsection