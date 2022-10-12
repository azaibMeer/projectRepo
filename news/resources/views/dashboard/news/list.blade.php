@extends('dashboard.welcome') 
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>News List</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('news/list')}}">List</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>News</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('/news/create')}}" class="btn-secondary btn btn-lg category_add">
                    
                    Add News
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
        
          </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Listing</h5>
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

                        <div class="table-responsive">
                    <table class="table  table-bordered table-hover dataTables-example" >
                    <thead >
                    <tr>
                        <th>category id </th>
                        <th>category name</th>
                        <th>category status</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr class="gradeU">
                        <td></td>
                        <td></td>
                        <td>
                           
                            <span class="label label-danger">Inactive</span>
                            
                            <span class="label label-primary">Active</span>
                            

                        </td>
                        <td class="text-right">
                                
                                    
                                    <a href="" class="btn-secondary btn btn-xs">
                                         <i class="fa fa-edit"></i>
                                         Edit
                                    </a>
                                    
                                    <a href="" class="btn-danger btn btn-xs">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </a> 
                               
                                
                        </td>
                    </tr>
                   
                    </tbody>
                    
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection