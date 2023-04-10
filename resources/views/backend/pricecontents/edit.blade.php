@extends('backend.layouts.app')
@section('title', 'Price Content Edit')
@section('content')

@php
$priceplans = DB::table('price_plans')
        ->latest()
        ->get();
@endphp
    
<div class="container my-3 py-3">
    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                <div class="col-md-12 col-9">
                    <h6 class="mb-0 font-weight-semibold text-lg">Price Content</h6>
                    <p class="text-sm mb-1">Update</p>
                </div>
                </div>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('pricecontents.update', $pricecontent) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label" for="input-username">Content</label>
                              <input class="form-control{{($errors->first('content') ? " is-invalid" : "")}}"  type="text" name="content" 
                              value="{{ old('content', $pricecontent->content) }}" placeholder="Content" onfocus="focused(this)" onfocusout="defocused(this)" required>
                            </div>
                          </div>                          
                     </div>


                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Price Plan</label>
                         
                          <select class="js-selet-search itemName form-control" id="clientstatus" name="plan_id">
                            @foreach($priceplans as $key => $priceplan)
                            <option {{ (old('id', $pricecontent->plan_id) == $priceplan->id ? 'selected' : '') }} value="{{ $priceplan->id }}">{{ $priceplan->title }}</option>
                            @endforeach
                        </select>

                        </div>
                      </div>
                </div>

                <div class="row">
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Price (₼)</label>
                            <input class="form-control{{($errors->first('price') ? " is-invalid" : "")}}"  type="text" name="price" 
                            value="{{ old('price', $pricecontent->price) }}" placeholder="1" onfocus="focused(this)" onfocusout="defocused(this)" required>
                        </div>
                      </div> --}}
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label class="form-control-label" for="input-username">Sort number</label>
                          <input class="form-control{{($errors->first('sort_number') ? " is-invalid" : "")}}"  type="text" name="sort_number" 
                          value="{{ old('sort_number', $pricecontent->sort_number) }}" placeholder="1" onfocus="focused(this)" onfocusout="defocused(this)" required>
                      </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" {{ $pricecontent->status==1?'checked':'' }}>
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