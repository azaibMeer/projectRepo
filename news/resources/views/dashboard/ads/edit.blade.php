@extends('dashboard.welcome') 
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Edit Ads</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('ads/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Ads</strong>
                        </li>
                    </ol>
                    <a href="{{url('/ads/list')}}" class="btn-secondary btn btn-lg arrange_btn">
                    
                    Ads List
                    </a>
                </div>
                
                    
             
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
          
            <div class="row">

            
                <div class="col-lg-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Edit</h5>
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
                            <form method="post" action="{{url('/ads/update/'.$ad->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row"><label class="col-lg-4 col-form-label"><strong>Ad's Link</strong></label>

                                    <div class="col-lg-8"><input type="text" placeholder="Enter Link" class="form-control" name="link" value="{{$ad->link}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label"><strong>Upload Image</strong></label>
                                    <div class="col-lg-8"><div class="custom-file">
                                <input id="logo" type="file" class="custom-file-input" name="image" 
                                value="{{$ad->image}}" >
                                <label for="logo" class="custom-file-label">Choose file...</label>
                                @if($ad->image)
                                <img src="{{$ad->image}}" height="30px" width="100px">
                                @else
                                <p> image not found </p>
                                @endif
                                </div> 
                                </div>
                             </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Update </button>
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
        <script>
        $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
    </script>

                @endsection