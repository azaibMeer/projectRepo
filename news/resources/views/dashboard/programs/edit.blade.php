@extends('dashboard.welcome') 
@section('content')

<link href="{{url('/assets/dashboard_assets/css/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>Edit Program</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('program/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Programs</strong>
                        </li>
                    </ol>
                   
                    <a href="{{url('/program/list')}}" class="btn-secondary btn btn-lg arrange_btn">
                    
                    Programs List
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
                            <h5>Edit Program</h5>
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
                            <form method="post" action="{{url('/program/update/'.$program->id)}}" 
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Program Name</strong></label>

                                    <div class="col-lg-4"><input type="text" placeholder="Enter News Title" class="form-control" name="name" value="{{$program->name}}" required> 
                                    </div>
                                    <label class="col-lg-1 col-form-label"><strong> Slug</strong></label>

                                    <div class="col-lg-5"><input type="text" placeholder="Enter program Slug" class="form-control" name="slug" value="{{$program->slug}}" required> 
                                    </div>
                                </div>
                                 <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Program Description</strong></label>

                                   
                                    <div class="col-lg-10">
                <div class="ibox ">
                    
                    <div class="ibox-content no-padding">

                        <textarea class="summernote" name="description"  >
                            {{$program->description}}
                        </textarea>

                    </div>
                </div>
            </div>

                                </div>
                                
                            
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"><strong>Program Image</strong></label>
                                    <div class="col-lg-4"><div class="custom-file">
                                <input id="logo" type="file" class="custom-file-input" name="image" >
                                <label for="logo" class="custom-file-label">Choose file...</label>
                                <span>Image size 240 by 360px</span>
                                </div> 
                                @if($program->image)
                                <img src="{{$program->image}}" height="50px" width="50px;">
                                @else
                                <span>no image found</span>
                                @endif
                                </div>

                                <label class="col-lg-2 col-form-label">
                                        <strong>Vedio Id</strong></label>

                                    <div class="col-sm-4">
                                        <input type="text" placeholder="Enter Vedio Id" class="form-control" 
                                        name="vedio_id" 
                                        value="{{$program->vedio_id}}" required> 
                                    </div>
                                </div>
                                
                                 
                                <div class="form-group row"><label class="col-sm-2 col-form-label"><strong>Program Publish</strong><br/></label>

                                    <!-- <div class="col-sm-10">
                                        
                                        
                                        <div class="i-checks"><label> <input type="radio" value="1" name="status" required> <i></i> publish </label></div>
                                        <div class="i-checks"><label> <input type="radio"  value="0" name="status" required> <i></i> Not Publish </label></div>
                                        
                                    </div> -->
                                    <div class="col-sm-10">
                                        
                                        
                                        <div class="i-checks"><label> <input type="radio" name="status" required
                                            value="1" 
                                            {{$program->status == 1 ? 'checked':''}} 
                                         > <i></i> publish </label></div>
                                        <div class="i-checks"><label> <input type="radio" name="status" required 
                                            value="0" 
                                            {{$program->status == 0 ? 'checked':''}} 
                                         > <i></i> Not Publish </label></div>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Add Program</button>
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        @endsection
        @section('scripts')
        <script src="{{url('/assets/dashboard_assets/js/plugins/summernote/summernote-bs4.js')}}"></script>
     <script>
        $(document).ready(function(){

            $('.summernote').summernote({
                height: 200
            });


       });
    </script>

    <script>
        $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
    }); 
    </script>
    @endsection

            