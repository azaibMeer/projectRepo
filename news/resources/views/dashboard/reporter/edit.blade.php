@extends('dashboard.welcome') 
@section('content')
    
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    <h2>Edit Reporter</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('reporter/create')}}">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Reporter</strong>
                        </li>
                    </ol>
                   
                    <a href="{{url('/reporter/list')}}" class="btn-secondary btn btn-lg arrange_btn">
                    
                    Reporter List
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
                            <h5>Edit Reporter</h5>
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
                            <form method="post" action="{{url('/reporter/update/'.$reporter->reporter_id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Reporter Name</strong></label>

                                    <div class="col-lg-10"><input type="text" placeholder="Enter Reporter Name" class="form-control" name="name" value="{{$reporter->name}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Father Name</strong></label>

                                    <div class="col-lg-10"><input type="text" placeholder="Enter Father Name" class="form-control" name="father_name" value="{{$reporter->father_name}}" required> 
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label"><strong>Reporter Address</strong></label>

                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="address" placeholder="Enter Reporter Address" required>{{$reporter->address}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label"><strong>Reporter Image</strong></label>

                                <div class="col-lg-4"><div class="custom-file">
                                <input id="logo" type="file" class="custom-file-input" name="image">
                                <label for="logo" class="custom-file-label">Choose file...</label>
                                </div>
                                <br>
                                @if($reporter->image)
                                <img src="{{$reporter->image}}" height="50px" width="50px;">
                                @else
                                
                                <span><strong>no img found</strong></span>
                                @endif
                                    </div> 
                                      <label class="col-lg-2 col-form-label"><strong>Reporter City</strong></label>

                                    <div class="col-sm-4"><select class="form-control m-b" name="city">
                                    <option disabled="">Select City</option>
                                       @foreach($cities as $city)
                                       <option value="{{$city->id}}"
                                        {{ $city->id == $reporter->city_id ? 'selected' : '' }}>{{$city->city_name}}</option>
                                       @endforeach
                                     </select>
                                    </div> 
                                

                                </div>
                                <div class="form-group row">
                                    
                                      <label class="col-lg-2 col-form-label"><strong>Reporter Type</strong></label>

                                    <div class="col-sm-4"><select class="form-control m-b" name="reporter_type">
                                        <option disabled="">Select Reporter Type</option>
                                       <option 
                                        value="0"
                                        {{ $reporter->reporter_type == 0 ? 'selected' : '' }}>Buero</option>
                                       <option 
                                       value="1"
                                        {{ $reporter->reporter_type == 1 ? 'selected' : '' }}>Reporter</option>
                                       </select>
                                    </div> 
                                      <label class="col-lg-2 col-form-label"><strong>Phone Number</strong></label>

                                    <div class="col-sm-4"><input type="number" name="phone" class="form-control" maxlength="11" 
                                        value="{{$reporter->phone}}" required>
                                    </div>
                                

                                </div>
                                 
                                <div class="form-group row"><label class="col-sm-2 col-form-label"><strong>Publish Reporter</strong><br/></label>

                                    <div class="col-sm-10">
                                        
                                        
                                        <div class="i-checks"><label> <input type="radio" name="status" required
                                            value="1" {{$reporter->status == 1 ? 'checked':''}} 
                                          > <i></i> publish </label></div>
                                        <div class="i-checks"><label> <input type="radio" name="status" required  value="0" {{$reporter->status == 0 ? 'checked':''}}   > <i></i> Not Publish </label></div>
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-lg btn-success" type="submit">Edit Reporter</button>
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