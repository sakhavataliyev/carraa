@extends('backend.layouts.app')
@section('title', 'Price Plan Edit')
@section('content')

    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Price Plan</h6>
                    <p class="text-sm mb-1">Update</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('priceplans.update', $priceplan) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Title</label>
                              <input class="form-control{{($errors->first('title') ? " is-invalid" : "")}}"  type="text" name="title" 
                              value="{{ old('title', $priceplan->title) }}" placeholder="Title" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>                          
                     </div>

        
                    <div class="row">

                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label>
                          <textarea class="form-control{{($errors->first('description') ? " is-invalid" : "")}}" name="description"  id="exampleFormControlTextarea1" rows="3">{{ old('description', $priceplan->description) }}</textarea>
                          {{-- <textarea id="editor" class="form-control{{($errors->first('body') ? " is-invalid" : "")}}" name="body" rows="6">{!! old('body', $priceplan->body) !!}</textarea> --}}
                        </div>
                      </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Price (₼)</label>
                            <input class="form-control{{($errors->first('price') ? " is-invalid" : "")}}"  type="text" name="price" 
                            value="{{ old('price', $priceplan->price) }}" placeholder="1" onfocus="focused(this)" onfocusout="defocused(this)" required>
                        </div>
                      </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label class="form-control-label" for="input-username">Sort number</label>
                          <input class="form-control{{($errors->first('sort_number') ? " is-invalid" : "")}}"  type="text" name="sort_number" 
                          value="{{ old('sort_number', $priceplan->sort_number) }}" placeholder="1" onfocus="focused(this)" onfocusout="defocused(this)" required>
                      </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" {{ $priceplan->status==1?'checked':'' }}>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked status</label>
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