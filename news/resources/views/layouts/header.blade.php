 <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <ul class="top-header-social">
                            @if($setting->facebook_link != "")
                            <li>

                                <a href="{{url($setting->facebook_link)}}" class="facebook" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            @endif
                            @if($setting->instagram_link != "")
                            <li>
                                <a href="{{url($setting->instagram_link)}}" class="pinterest" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            @endif
                            @if($setting->linkedin_link != "")
                            <li>
                                <a href="{{url($setting->linkedin_link)}}" class="pinterest" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            @endif
                             @if($setting->twitter_link != "")
                            <li>
                                <a href="{{url($setting->twitter_link)}}" class="twitter" target="_blank">
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
                             @if($setting->whatsapp_link != "")
                             <li>
                                <a href="{{url($setting->whatsapp_link)}}" class="linkedin" target="_blank">
                                    <i class='bx bxl-whatsapp'></i>
                                </a>
                            </li>
                            @endif
                            

                        </ul>
                       
                    </div>
                    <div class="col-lg-2">
                         <p style="color:white; float: center;margin-bottom: 6px
                         ;margin-right: 37%;">آج کی آيت مبارکہ</p> 

                    </div>
                    <div class="col-lg-8">

                        <marquee width="100%" direction="right" style="color:white;" >
           <strong> {{$verse->description}} <strong>
            </marquee>
                         
                    </div>
                </div>
            </div>
        </div> 
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                            <img src="{{url('assets/img/logo/pak_awami.png')}}" class="black-logo" alt="image">
                               
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ url('assets/img/logo/pak_awami.png') }}" class="black-logo" alt="image">
                            
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link active">
                                       صفحہ اول
                                    </a>
                                    
                                </li>
                                @foreach($categories as $category)
                                <li class="nav-item">
                                    <a href="{{url('category/'.$category->category_id)}}" class="nav-link active">
                                        {{ $category->name }}
                                    </a>
                                    
                                </li>
                        @endforeach
                                  <li class="nav-item">
                                    <a href="{{ url('/contact') }}" class="nav-link active">
                                        رابطہ کریں
                                    </a>
                                    
                                </li>
                            </ul>
                            
                            <!-- <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search for..">
                                        <button type="submit"><i class='bx bx-search'></i></button>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <!-- <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div> -->
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search for..">
                                        <button type="submit"><i class='bx bx-search'></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->