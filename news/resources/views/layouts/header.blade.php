 <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-header-social">
                            <li>
                                <a href="#" class="facebook" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="top-header-others">
                            <li>
                                <!-- <div class="languages-list">
                                    <select>
                                        <option value="1">English</option>
                                        <option value="2">العربيّة</option>
                                        <option value="3">Deutsch</option>
                                        <option value="3">Português</option>
                                        <option value="3">简体中文</option>
                                    </select>
                                </div> -->
                            </li>

                            <li>
                                <i class='bx bx-user'></i>
                                <a href="login.html">Login</a>
                            </li>
                        </ul>
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