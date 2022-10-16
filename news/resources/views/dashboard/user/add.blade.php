
@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Add User</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('user/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>User</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('/user/list')}}" class="btn-secondary btn btn-lg category_add">
                    
                    user List
                    </a>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                
                <div class="col-lg-7">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5> Add User</h5>
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
                            <form>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Name</label>

                                    <div class="col-lg-9"><input type="text" placeholder="Enter Name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Father Name</label>

                                    <div class="col-lg-9"><input type="text" placeholder="Enter Father Name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Email</label>

                                    <div class="col-lg-9"><input type="email" placeholder="Email" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Password</label>

                                    <div class="col-lg-9"><input type="password" placeholder="Password" class="form-control"></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">User Image</label>

                                    <div class="col-lg-9"><input type="file"  class="form-control " name="image" required><span>Image Must be 192 px by 192 px & 1 Mb </span>

                                    </div> 
                                  </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Address</label>

                                    <div class="col-lg-9"><textarea class="form-control" placeholder="Enter address" ></textarea>  
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-3 col-form-label">Phone</label>

                                    <div class="col-lg-9"><input type="number" class="form-control" name="phone" placeholder="eg. 0123 - 4567890" required>  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Add User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                @endsection