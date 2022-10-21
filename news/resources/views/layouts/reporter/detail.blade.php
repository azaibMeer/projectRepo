@extends('layouts.welcome') 
@section('content')
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
                                <span>Editor</span>
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