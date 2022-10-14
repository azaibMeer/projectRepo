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
                            <h2>حالیہ پوسٹ</h2>

                            <div class="post-content">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4>
                                            <a href="#">مقبوضہ مغربی کنارے پر اسرائیلی فائرنگ سے 4 فلسطینی جاں بحق، 44 زخمی</a>
                                        </h4>
                                        <span>28 ستمبر 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="post-image">
                                            <a href="#">
                                                <img src="assets/img/recent-post/recent-post-2.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <h4>
                                            <a href="#">مقبوضہ مغربی کنارے پر اسرائیلی فائرنگ سے 4 فلسطینی جاں بحق، 44 زخمی</a>
                                        </h4>
                                        <span>28 ستمبر 2022</span>
                                    </div>
                                </div>
                            </div>

                            
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

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h2>سبسکرائب</h2>

                            <div class="widget-subscribe-content">
                                <p>جولائی دو ہزار دو میں لانچ ہونے کے بعد بی بی سی اردو ڈاٹ کام نے نیوز ویب سائٹوں میں اپنا ایک منفرد مقام بنا لیا ہے۔</p>

                                <form class="newsletter-form">
                                    <input type="email" class="input-newsletter" placeholder="اپنا ای میل درج کریں۔" name="EMAIL" required>
            
                                    <button type="submit">جمع کرائیں</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        