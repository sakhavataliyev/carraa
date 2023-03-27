@extends('backend.layouts.app')
@section('title', 'Settings Edit')
@section('content')


    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Settings</h6>
                    <p class="text-sm mb-1">Edit</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('settings.update', $setting->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Logo</label>
                          <div class="p-4 bg-secondary mb-3">
                            <img src="{{ $setting->logo ? asset($setting->logo) : asset('/storage/setting/no_image.jpg') }}" alt="{{ $setting->logo }}" style="width:100px;height:100px;">
                            </div>
                          <input type="file" name="logo" class="form-control{{($errors->first('logo') ? " is-invalid" : "")}}" id="brandimage1" 
                          aria-describedby="logo" placeholder="Update brand image" 
                              value="{{ $setting->logo }}">
                          </div>
                      </div>
                
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Favicon</label>
                          <div class="p-4 bg-secondary mb-3">
                            <img src="{{ $setting->favicon ? asset($setting->favicon) : asset('/storage/setting/no_image.jpg') }}" alt="{{ $setting->favicon }}" style="width:100px;height:100px;">
                            </div>
                          <input type="file" name="favicon" class="form-control{{($errors->first('favicon') ? " is-invalid" : "")}}" id="brandimage1" 
                          aria-describedby="logo" placeholder="Update brand image" 
                              value="{{ $setting->favicon }}">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Title</label>
                              <input class="form-control{{($errors->first('title') ? " is-invalid" : "")}}"  type="text" name="title" 
                              value="{{ old('title', $setting->title) }}" placeholder="Title" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Description</label>
                              <input class="form-control{{($errors->first('description') ? " is-invalid" : "")}}"  type="text" name="description" 
                              value="{{ old('description', $setting->description) }}" placeholder="Description" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Keywords</label>
                              <input class="form-control{{($errors->first('keywords') ? " is-invalid" : "")}}"  type="text" name="keywords" 
                              value="{{ old('keywords', $setting->keywords) }}" placeholder="Keywords" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Analytics</label>
                              <input class="form-control{{($errors->first('analytics') ? " is-invalid" : "")}}"  type="text" name="analytics" 
                              value="{{ old('analytics', $setting->analytics) }}" placeholder="Analytics" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div> 

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Copyright</label>
                              <input class="form-control{{($errors->first('copyright') ? " is-invalid" : "")}}"  type="text" name="copyright" 
                              value="{{ old('copyright', $setting->copyright) }}" placeholder="Copyright" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div> 
                      </div>
    
                      <div class="text-center mt-4">
                        <button class="btn btn-primary me-2" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                            Update
                        </button>
                    </div>

                </div>
            </form>

            </div>
        </div>
    </div>
</div>


@endsection