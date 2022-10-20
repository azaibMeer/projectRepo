@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Edit Settings</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('setting/edit')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Setting</strong>
                        </li>
                    </ol>
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
                            <h5>Edit Setting</h5>
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
                            <form method="post" action="{{url('/setting/update')}}">
                                @csrf
                                <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Website Name</strong></label>

                                    <div class="col-lg-9"><input type="text" name="website_name" class="form-control" value="{{$setting->website_name}}" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Facebook Link</strong></label>

                                    <div class="col-lg-9"><input type="text" name="facebook_link" class="form-control"value="{{$setting->facebook_link}}">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Whatsapp Link</strong></label>

                                    <div class="col-lg-9"><input type="text" name="whatsapp_link" class="form-control"value="{{$setting->whatsapp_link}}">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Instagram Link</strong></label>

                                    <div class="col-lg-9"><input type="text" name="instagram_link" class="form-control"value="{{$setting->instagram_link}}">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Printest Link</strong></label>

                                    <div class="col-lg-9"><input type="text" name="printest_link" class="form-control"value="{{$setting->printest_link}}">
                                    </div>
                                </div>
                                 <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Twitter Link</strong></label>

                                    <div class="col-lg-9"><input type="text" name="twitter_link" class="form-control"value="{{$setting->twitter_link}}">
                                    </div>
                                </div>
                                    <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Address </strong></label>

                                    <div class="col-lg-9"><textarea name="address" class="form-control">{{$setting->address}}</textarea>
                                    </div>
                                </div>
                                  <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Phone</strong></label>

                                    <div class="col-lg-9"><input type="number" name="phone" class="form-control"
                                    	value="{{$setting->phone}}">
                                    </div>
                                </div>
                                  <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>mobile</strong></label>

                                    <div class="col-lg-9"><input type="number" name="mobile" class="form-control"
                                    	value="{{$setting->mobile}}">
                                    </div>
                                </div>
                                  <div class="form-group row"><label class="col-lg-3 col-form-label"><strong>Email</strong></label>

                                    <div class="col-lg-9"><input type="email" name="email" class="form-control" 
                                    	value="{{$setting->email}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Update Setting</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                @endsection