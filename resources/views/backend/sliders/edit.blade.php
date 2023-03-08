@extends('backend.layouts.app')
@section('title', 'Slider Edit')
@section('content')


    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Slider</h6>
                    <p class="text-sm mb-1">Update</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('sliders.update', $slider) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Title</label>
                              <input class="form-control{{($errors->first('title') ? " is-invalid" : "")}}"  type="text" name="title" 
                              value="{{ old('title', $slider->title) }}" placeholder="Title" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>                          
                     </div>

                     <div class="row">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Image</label>
                          <div class="p-4 bg-primary mb-3">
                              <img src="{{ $slider->image ? asset($slider->image) : asset('/storage/setting/no_image.jpg') }}" alt="{{ $slider->title }}" style="width:100px;height:100px;">
                          </div>
                          <input type="file" name="image" class="form-control{{($errors->first('image') ? " is-invalid" : "")}}" id="image">
                        <input type="hidden" name="old_image" value="{{ $slider->image }}">   
                        </div>
                    </div>
        

                    <div class="row">
                      <div class="col-lg-12">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Sort number</label>
                            <input class="form-control{{($errors->first('sort_number') ? " is-invalid" : "")}}"  type="text" name="sort_number" 
                            value="{{ old('sort_number', $slider->sort_number) }}" placeholder="Sort number" onfocus="focused(this)" onfocusout="defocused(this)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g);" required>
                          </div>
                        </div>                          
                   </div>

                    {{-- <div class="row"> --}}
                      {{-- <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Body</label>
                          <textarea class="form-control{{($errors->first('body') ? " is-invalid" : "")}}" name="body"  id="exampleFormControlTextarea1" rows="3">{{ old('body', $slider->body) }}</textarea>
                          <textarea id="editor" class="form-control{{($errors->first('body') ? " is-invalid" : "")}}" name="body" rows="6">{!! old('body', $slider->body) !!}</textarea>
                        </div>
                      </div> --}}
                {{-- </div> --}}


                <div class="row">
                  <div class="col-lg-12">


                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" {{ $slider->status==1?'checked':'' }}>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked status</label>
                    </div>


                      {{-- <div class="form-group">
                        <label class="form-control-label" for="input-username">Status</label>
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" name="status" id="flexCheckDefault" {{ $slider->status==1?'checked':'' }} >
                        </div> 
                      </div> --}}
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