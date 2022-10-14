@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Add News</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('news/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>News</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('/news/list')}}" class="btn-secondary btn btn-lg category_add">
                    
                    News List
                    </a>
                </div>
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
          
            <div class="row">
                            <div class="col-lg-12">
                 @if(session()->has('success'))
                 <div class="alert alert-success">
                 {{ session()->get('success') }}
            </div>
                @elseif(session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
            @endif
            
        </div>

          <div class="col-lg-10">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Add News</h5>
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
                            <form method="post" action="{{url('/news/update/'.$news->news_id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>News Title</strong></label>

                                    <div class="col-lg-10"><input type="name" placeholder="Enter News Title" class="form-control" name="title" value="{{$news->title}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>News Description</strong></label>

                                    <div class="col-lg-10"><input type="name" placeholder="Enter News Description" class="form-control" name="content" value="{{$news->content}}"  required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Author Name</strong></label>

                                    <div class="col-lg-10"><input type="text" placeholder="Enter Author Name" class="form-control" name="author_name" value="{{$news->author}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"><strong>News Image</strong></label>

                                    <div class="col-lg-4">
                                         
                                    <input type="file"  class="form-control " name="image" value="{{ $news->image }}" required><span>File Must be 1920 px by 1000 px</span>
                                    @if ("{{ $news->image }}")
                        <img src="{{ $news->image }}" height="50px" width="80px;">
                            @else
                            <p>No image found</p>
                            @endif
                                    </div> 
                                      <label class="col-lg-2 col-form-label"><strong>Select City</strong></label>

                                    <div class="col-sm-4">
                               
                                        <select class="form-control m-b" name="city" >
                                        <option>Select City</option>
                                        
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}"
                                        {{ $city->id == $news->city_id ? 'selected' : '' }}>{{$city->city_name}}</option>
                                        @endforeach
                                        <option value="0">None</option>
                                    </select>
                                    </div> 
                                

                                </div>
                                 <div class="form-group row">
                               <label class="col-lg-2 col-form-label"><strong>Select Category</strong></label>

                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="category">
                                        <option>Select Category</option>
                                        

                                    @foreach($categories as $category)
                                        <option value="{{$category->category_id}} " {{$category->category_id ==$news->category_id ? 'selected' : ''  }} >{{$category->name}}</option>
                                        @endforeach
                                       
                                       <option value="0">None</option>
                                        
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Add News</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                @endsection