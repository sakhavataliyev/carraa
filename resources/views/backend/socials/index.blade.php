@extends('backend.layouts.app')
@section('title', 'Socials')
@section('content')
   
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-8 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Social</h6>
                    <p class="text-sm mb-1">Index</p>
                </div>
                <div class="col-md-4 col-3 text-end">
                  <a href="{{ route('socials.edit', $social) }}">
                    <button type="button" class="btn btn-white btn-icon px-2 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                      </svg>
                      </button>
                    </a>
                </div>
                </div>
            </div>
            

            <div class="card-body">
               
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Facebook</label>
                              <span class="description form-control-show">{{ $social->facebook }}</span>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Twitter</label>
                              <span class="description form-control-show">{{ $social->twitter }} </span>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Instagram</label>
                              <span class="description form-control-show">{{ $social->instagram }}</span>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Tiktok</label>
                              <span class="description form-control-show">{{ $social->tiktok }} </span>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Github</label>
                              <span class="description form-control-show">{{ $social->github }}</span>
                            </div>
                          </div>
    
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Linkedin</label>
                              <span class="description form-control-show">{{ $social->linkedin }} </span>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Pinterest</label>
                              <span class="description form-control-show">{{ $social->pinterest }}</span>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Youtube</label>
                              <span class="description form-control-show">{{ $social->youtube }} </span>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Whatsapp</label>
                              <span class="description form-control-show">{{ $social->whatsapp }}</span>
                            </div>
                          </div>

                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Phone</label>
                              <span class="description form-control-show">{{ $social->phone }}</span>
                            </div>
                          </div>
        
                    </div>


                    <div class="row">  
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Email</label>
                              <span class="description form-control-show">{{ $social->email }} </span>
                            </div>
                          </div>

                        <div class="col-lg-6">
                          <div class="form-group-show">
                            <label class="form-control-label" for="input-username">Address</label>
                            <span class="description form-control-show">{{ $social->address }} </span>
                          </div>
                        </div>
                  </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Latitude</label>
                              <span class="description form-control-show">{{ $social->latitude }}</span>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group-show">
                              <label class="form-control-label" for="input-username">Longitude</label>
                              <span class="description form-control-show">{{ $social->longitude }} </span>
                            </div>
                          </div>
                    </div>
      


                </div>
            </div>
        </div>
    </div>
</div>


@endsection