@extends('dashboard.welcome') 
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Categories</h2>
                    
                </div>
                

            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
            <div class="col-lg-12">
                 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
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
                    @foreach($categories as $category)
                    <tr class="gradeU">
                        <td>{{$category->category_id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            @if($category->status == "0")
                            <span class="label label-danger">Inactive</span>
                            @else
                            <span class="label label-primary">Active</span>
                            @endif

                        </td>
                        <td class="text-right">
                                <div class="btn-group">
                                    <a href="{{url('/categories/edit/'.$category->category_id)}}" class="btn-secondary btn btn-xs">
                                         <i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp
                                    <a href="{{url('/categories/delete/'.$category->category_id)}}" class="btn-danger btn btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                               
                                </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection