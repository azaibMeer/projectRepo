@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit Category</h2>
                    
                </div>
                
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
          
            <div class="row">

            
                <div class="col-lg-5">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Edit Category</h5>
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
                            <form method="post" action="{{url('/categories/update/'.$categories->category_id)}}">
                                @csrf
                                <div class="form-group row"><label class="col-lg-4 col-form-label"><strong>Category Name</strong></label>
                                	
                                    <div class="col-lg-8"><input type="name" placeholder="Enter Category" class="form-control" name="category_name" 
                                    value="{{ $categories->name}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-4 col-form-label"><strong> Slug</strong></label>

                                    <div class="col-lg-8"><input type="text" placeholder="Enter slug" class="form-control" name="slug" value="{{ $categories->slug}}" required> 
                                    </div>
                                </div>
                                
                                 <div class="form-group row"><label class="col-sm-4 col-form-label"><strong>Category Publish</strong><br/></label>

                                    <div class="col-sm-8">
                                        
                                        
                                        <div class="i-checks"><label> <input type="radio" value="1" required name="status" {{$categories->status == 1 ? 'checked':''}}> <i></i> publish </label></div>
                                        <div class="i-checks"><label> <input type="radio"  value="0" required name="status" {{$categories->status == 0 ? 'checked':''}}> <i></i> Not Publish </label></div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                @endsection