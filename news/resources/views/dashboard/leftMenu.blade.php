<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{Auth::User()->image}}" style="width:55px"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold" style="font-size: 20px;">{{Auth::User()->name}}</span>
                                
                            </a>
                            

                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</span></a>
                       
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">News</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/news/create')}}">Add</a></li>
                            <li><a href="{{url('/news/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/categories/create')}}">Add</a></li>
                            <li><a href="{{url('/categories/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Cities</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/cities/create')}}">Add</a></li>
                            <li><a href="{{url('/cities/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-quote-left"></i> <span class="nav-label">Verses</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            
                            <li><a href="{{url('/verses/edit')}}">update</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            
                            <li><a href="{{url('/setting/edit')}}">update</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-circle"></i> <span class="nav-label">Reporter</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/reporter/create')}}">Add</a></li>
                            <li><a href="{{url('/reporter/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">Contact Us</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            
                            <li><a href="{{url('/contact/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-ad"></i> <span class="nav-label">Ads</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            
                            <li><a href="{{url('/ads/create')}}">Add</a></li>
                            <li><a href="{{url('/ads/list')}}">List</a></li>
                            
                        </ul>
                    </li>
                  </ul>

            </div>
        </nav>