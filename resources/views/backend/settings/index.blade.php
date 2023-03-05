@extends('backend.layouts.app')
@section('title', 'Settings')
@section('content')

{{-- @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>Success!</strong>   {{ session('success') }}</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text"><strong>{{ $error }}</strong> </span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endforeach
@endif --}}

    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-8 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Settings</h6>
                    <p class="text-sm mb-1">Index</p>
                </div>
                <div class="col-md-4 col-3 text-end">
                  <a href="{{ route('settings.edit', $setting) }}">
                    <button type="button" class="btn btn-white btn-icon px-2 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                      </svg>
                      </button>
                    </a>
{{-- 
                    <button type="button" class="btn btn-white btn-icon px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                    </svg>
                    </button> --}}
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group-show">
                          <label class="form-control-label" for="input-username">Logo</label>
                          <span class="description form-control-show">{{ $setting->logo }}</span>
                          <div class="p-4 bg-primary">
                            <img src="{{ asset($setting->logo) }}" alt="{{ $setting->logo }}" style="width:100px;height:100px;">
                            </div>
                        </div>
                      </div>
                
                      <div class="col-lg-6">
                        <div class="form-group-show">
                          <label class="form-control-label" for="input-username">Favicon</label>
                          <span class="description form-control-show">{{ $setting->favicon }}</span>
                          <div class="p-4 bg-secondary">
                            <img src="{{ asset($setting->favicon) }}" alt="{{ $setting->favicon }}" style="width:100px;height:100px;">
                            </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Title</label>
                              <span class="description form-control-show">{{ $setting->title }}</span>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Description</label>
                              <span class="description form-control-show">{{ $setting->description }} </span>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Keywords</label>
                              <span class="description form-control-show">{{ $setting->keywords }}</span>
                            </div>
                          </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Analytics</label>
                              <span class="description form-control-show">{{ $setting->analytics }}</span>
                            </div>
                          </div> 

                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Copyright</label>
                              <span class="description form-control-show">{{ $setting->copyright }}</span>
                            </div>
                          </div> 

                    </div>
        
                </div>
            {{-- <div class="card-body p-3">
               
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>
     
                      <div class="col-md-6">
                        <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>

                    </div>
        
                 <div class="row">
                      <div class="col-md-6">
                        <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>
     
                      <div class="col-md-6">
                        <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>
                      
                    </div>
       
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                        </div>
       
                        <div class="col-md-6">
                          <div class="form-group-show">
                            <label for="projectName" class="form-label">Project Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                        </div>
                        
                      </div>

            </div> --}}
            </div>
        </div>
    </div>
</div>


@endsection