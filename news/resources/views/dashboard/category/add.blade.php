@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Add Categories</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('categories/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Category</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('/categories/list')}}" class="btn-secondary btn btn-lg category_add">
                    
                    Category List
                    </a>
                </div>
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
          
            <div class="row">

            
                <div class="col-lg-5">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Add Category</h5>
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
                            <form method="post" action="{{url('/categories/store')}}">
                                @csrf
                                <div class="form-group row"><label class="col-lg-4 col-form-label"><strong>Category Name</strong></label>

                                    <div class="col-lg-8"><input type="text" placeholder="Enter Category" class="form-control" name="category_name" required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-form-label"><strong>Category Publish</strong><br/></label>

                                    <div class="col-sm-8">
                                        
                                        
                                        <div class="i-checks"><label> <input type="radio" value="1" name="status" > <i></i> publish </label></div>
                                        <div class="i-checks"><label> <input type="radio"  value="0" name="status"> <i></i> Not Publish </label></div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Add Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                @endsection