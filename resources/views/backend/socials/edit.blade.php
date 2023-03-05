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
                  {{-- <a href="{{ route('socials.edit', $social) }}">
                    <button type="button" class="btn btn-white btn-icon px-2 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                      </svg>
                      </button>
                    </a> --}}
                </div>
                </div>
            </div>
            

            <div class="card-body">
                <form method="POST" action="{{ route('socials.update', $social->id) }}">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Facebook</label>
                              {{-- <span class="description form-control-show">{{ $social->facebook }}</span> --}}

                              <input class="form-control{{($errors->first('facebook') ? " is-invalid" : "")}}"  type="text" name="facebook" 
                              value="{{ old('facebook', $social->facebook) }}" placeholder="Facebook" onfocus="focused(this)" onfocusout="defocused(this)">

                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Twitter</label>
                              {{-- <span class="description form-control-show">{{ $social->twitter }} </span> --}}
                              <input class="form-control{{($errors->first('twitter') ? " is-invalid" : "")}}"  type="text" name="twitter" 
                              value="{{ old('twitter', $social->twitter) }}" placeholder="twitter" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Instagram</label>
                              {{-- <span class="description form-control-show">{{ $social->instagram }}</span> --}}
                              <input class="form-control{{($errors->first('instagram') ? " is-invalid" : "")}}"  type="text" name="instagram" 
                              value="{{ old('instagram', $social->instagram) }}" placeholder="instagram" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Tiktok</label>
                              {{-- <span class="description form-control-show">{{ $social->tiktok }} </span> --}}
                              <input class="form-control{{($errors->first('tiktok') ? " is-invalid" : "")}}"  type="text" name="tiktok" 
                              value="{{ old('tiktok', $social->tiktok) }}" placeholder="tiktok" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Github</label>
                              {{-- <span class="description form-control-show">{{ $social->github }}</span> --}}
                              <input class="form-control{{($errors->first('github') ? " is-invalid" : "")}}"  type="text" name="github" 
                              value="{{ old('github', $social->github) }}" placeholder="github" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
    
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Linkedin</label>
                              {{-- <span class="description form-control-show">{{ $social->linkedin }} </span> --}}
                              <input class="form-control{{($errors->first('linkedin') ? " is-invalid" : "")}}"  type="text" name="linkedin" 
                              value="{{ old('linkedin', $social->linkedin) }}" placeholder="linkedin" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Pinterest</label>
                              {{-- <span class="description form-control-show">{{ $social->pinterest }}</span> --}}
                              <input class="form-control{{($errors->first('pinterest') ? " is-invalid" : "")}}"  type="text" name="pinterest" 
                              value="{{ old('pinterest', $social->pinterest) }}" placeholder="pinterest" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Youtube</label>
                              {{-- <span class="description form-control-show">{{ $social->youtube }} </span> --}}
                              <input class="form-control{{($errors->first('youtube') ? " is-invalid" : "")}}"  type="text" name="youtube" 
                              value="{{ old('youtube', $social->youtube) }}" placeholder="youtube" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Whatsapp</label>
                              {{-- <span class="description form-control-show">{{ $social->whatsapp }}</span> --}}
                              <input class="form-control{{($errors->first('whatsapp') ? " is-invalid" : "")}}"  type="text" name="whatsapp" 
                              value="{{ old('whatsapp', $social->whatsapp) }}" placeholder="whatsapp" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Phone</label>
                              {{-- <span class="description form-control-show">{{ $social->phone }}</span> --}}
                              <input class="form-control{{($errors->first('phone') ? " is-invalid" : "")}}"  type="text" name="phone" 
                              value="{{ old('phone', $social->phone) }}" placeholder="phone" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
                    </div>

                    <div class="row"> 
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Email</label>
                              {{-- <span class="description form-control-show">{{ $social->email }} </span> --}}
                              <input class="form-control{{($errors->first('email') ? " is-invalid" : "")}}"  type="email" name="email" 
                              value="{{ old('email', $social->email) }}" placeholder="Facebook" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Address</label>
                            {{-- <span class="description form-control-show">{{ $social->address }} </span> --}}
                            <input class="form-control{{($errors->first('address') ? " is-invalid" : "")}}"  type="text" name="address" 
                            value="{{ old('address', $social->address) }}" placeholder="address" onfocus="focused(this)" onfocusout="defocused(this)" >
                          </div>
                        </div>
                  </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Latitude</label>
                              {{-- <span class="description form-control-show">{{ $social->latitude }}</span> --}}
                              <input class="form-control{{($errors->first('latitude') ? " is-invalid" : "")}}"  type="text" name="latitude" 
                              value="{{ old('latitude', $social->latitude) }}" placeholder="latitude" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Longitude</label>
                              {{-- <span class="description form-control-show">{{ $social->longitude }} </span> --}}
                              <input class="form-control{{($errors->first('longitude') ? " is-invalid" : "")}}"  type="text" name="longitude" 
                              value="{{ old('longitude', $social->longitude) }}" placeholder="longitude" onfocus="focused(this)" onfocusout="defocused(this)" >
                            </div>
                          </div>
                    </div>

                <div class="text-center mt-4">
                    <button class="btn btn-primary me-2" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                        Update
                    </button>
                </div>

                </div>
            </div>


        </div>
    </form>


        {{-- </div> --}}
    </div>
</div>


@endsection