@extends('layouts.welcome') 
@section('content')
<section class="error-area ptb-50">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            
        
                            <h3>خبر موجود نہیں ہے</h3>
                            
                            <a href="{{url('/')}}" class="default-btn">
                            Go to home
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection