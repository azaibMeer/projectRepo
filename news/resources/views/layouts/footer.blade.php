<section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <a href="#">
                                <img src="{{url('assets/img/logo/pak_awami.png')}}" alt="image">
                            </a>
                            <ul class="social">
                                @if($setting->facebook_link != "")
                                <li>
                                    <a href="{{url($setting->facebook_link)}}" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                @endif
                                @if($setting->instagram_link != "")
                                <li>
                                    <a href="{{url($setting->instagram_link)}}" class="twitter" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                @endif
                                @if($setting->twitter_link != "")
                                <li>
                                    <a href="{{url($setting->twitter_link)}}" class="linkedin" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                @endif
                                 @if($setting->youtube_link != "")
                                <li>
                                    <a href="{{url($setting->youtube_link)}}" class="linkedin" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                                 @endif
                                 

                            </ul>
                        </div>
                    </div>

                    

                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-widget">
                            <h2>کوئک لنکز</h2>

                            <ul class="useful-links-list">
                                 @foreach($categories as $category)
                                <li>
                                    <a href="{{url('category/'.$category->category_id)}}">{{ $category->name }}</a>
                                </li>
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                          <h2>تازہ ترین پوسٹ</h2>
                            @foreach($latest as $post)
                            <div class="post-content">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="post-image">
                                            <a href="#">
                                                <img src="{{$post->image}}" alt="image" height="80px" width="91px">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <h4>
                                            <a href="#">
                                        {{Str::limit($post->title, 50, ' ...')}}
                                            </a>
                                        </h4>
                                        <span>{{$post->created_at->format('m/d/y')}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h2>سبسکرائب کریں</h2>

                            <div class="widget-subscribe-content">
                                <p>پاک عوامی نیوز یوٹیوب چینل کو سبسکرائب کریں اور روزانہ کی بنیاد پر تازہ ترین خبریں دیکھیں شکریہ</p>

                                <form  method="post" action="{{url('/subscribe/store')}}">
                                     @csrf
                                    <input type="email"  placeholder="اپنا ای میل درج کریں۔"  name="email" required="" 
                                    id="subscribe_input">
                            <input type="submit" class="btn btn-warning btn-lg" value="سبسکرائب کریں" id="subscribe_btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        