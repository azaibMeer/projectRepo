@extends('layouts.welcome') 
@section('content')
<section class="author-area">
   @if($buero)
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="author-image">
                            <img src="{{$buero->image}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="author-content">
                            <h3>{{$buero->name}}</h3>
                            <span>Buero</span>
                            <p>{{$buero->address}}</p>

                            <ul class="author-list">
                                <li>
                                    <a href="#"> <i class='bx bx-phone'></i>
                                        {{$buero->phone}}
                                    </a>
                                </li>

                                
                            </ul>

                            
                        </div>
                    </div>
                </div>
            </div>
            @else
                   <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="author-image">
                            <h1>سرکاری دفتر موجود نہیں ہے</h1>
                        </div>
                    </div>

                    
                </div>
            </div>   

            @endif
           
        </section>
<section class="team-area pt-50">
            <div class="container">
                
                <div class="row">
                    @if(count($reporters) > 0)
                    @foreach($reporters as $reportar)
                   <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{$reportar->image}}" alt="image">
                        </div>

                            <div class="content">
                                <h3>{{$reportar->name}}</h3>
                             
                                <span>Reporter</span>
                              
                            
                            
                            </div>
                        </div>
                    </div> 
                    @endforeach
                    @else
                    <h1>نمائندے  موجود نہیں ہے۔</h1>
                    @endif
            </div>
            </div>
        </section>
        @endsection