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

                    

                    <div class="col-lg-3 col-md-6">
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

                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h2>سبسکرائب</h2>

                            <div class="widget-subscribe-content">
                <form  method="post" action="{{url('/subscribe/store')}}">
                        @csrf
                                    <input type="email" class="form-control" placeholder="اپنا ای میل درج کریں۔" name="email" required>
                                        <br>
                                    <input type="submit" class="btn btn-primary" value="submit" style="margin-left: 70%;">


                                </form>
                            </div>
                        </div>
                    </div> -->
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
        