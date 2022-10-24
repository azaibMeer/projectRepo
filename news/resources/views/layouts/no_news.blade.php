@extends('layouts.welcome') 
@section('content')
<section class="error-area ptb-50">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <img src="{{url('assets/img/error/404-error.png')}}" alt="error">
        
                            <h3>Error 404 : page not found</h3>
                            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
        
                            <a href="{{url('/')}}" class="default-btn">
                                Go to home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection