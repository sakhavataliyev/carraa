@extends('backend.layouts.app')
@section('title', 'StaticPage Create')
@section('content')


    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Static Page</h6>
                    <p class="text-sm mb-1">Create</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('staticpages.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Title</label>
                              <input class="form-control{{($errors->first('title') ? " is-invalid" : "")}}"  type="text" name="title" 
                              value="{{ old('title') }}" placeholder="Title" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>                          
                     </div>

        
                    <div class="row">

                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Body</label>
                          <textarea class="form-control{{($errors->first('body') ? " is-invalid" : "")}}" name="body"  id="exampleFormControlTextarea1" rows="6">{{ old('body') }}</textarea>
                        </div>
                      </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
  
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" checked="on">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked status</label>
                      </div>


                    </div>

                    <div class="text-center mt-4">
                      <button class="btn btn-primary me-2" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                          Create
                      </button>
                  </div>

              </div> 
            </form>



            


            </div>
        </div>
    </div>
</div>


@endsection