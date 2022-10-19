@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Edit Verses</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('verses/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Verses</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('/verses/list')}}" class="btn-secondary btn btn-lg category_add">
                    
                    Verses List
                    </a>
                </div>
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
          
            <div class="row">

            
                <div class="col-lg-8">
                    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
   @elseif(session()->has('danger'))
   <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Edit Verse</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="{{url('/verses/update')}}">
                                @csrf
                                <div class="form-group row"><label class="col-lg-4 col-form-label"><strong>Verse Description</strong></label>

                                    <div class="col-lg-8"><textarea name="description" placeholder="Enter Verse" class="form-control">{{$verse->description}}</textarea> 
                                    </div>
                                </div>
                                  
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Update Verse</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                @endsection