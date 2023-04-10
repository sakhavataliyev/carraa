@extends('backend.layouts.app')
@section('title', 'Process show')
@section('content')

<div class="container my-3 py-3">
    <div class="row">

      <div class="col-12 col-xl-12 mb-4">
        <div class="card border shadow-xs h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 col-9">
                {{-- <span class="p-1 bg-success rounded-circle ms-auto me-3">
                  <span class="visually-hidden">Online</span>
                </span> --}}
                <h6 class="mb-0 font-weight-semibold text-lg">
                  {{ $priceplan->title }}
                  @if ($priceplan->status === 1)
                  <span class="badge badge-sm border-success text-success bg-success">
                    <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                      <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Active
                  </span>
                  @else
                  <span class="badge badge-sm border-danger text-danger bg-danger">
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="me-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    DeActive
                  </span>
                  @endif
                </h6>
                <p class="text-sm mb-1">{{ $priceplan->title }}</p>
              </div>

              {{-- <div class=" col-md-4 col-3 text-end"> --}}
                {{-- <button type="button" class="btn btn-sm btn-white me-2">
                  View all
                </button> --}}
                {{-- <a href="{{ route('priceplans.create') }}">
                  <button type="button" class="btn btn-sm btn-dark btn-icon me-2">
                    <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                      </svg>
                    </span>
                     Add page
                  </button>
                </a>
              </div> --}}

              <div class="col-md-4 col-3 text-end">
                <a class="btn-inner--text text-white" href="{{ route('pricecontents.create') }}">
                  <button type="button" class="btn btn-sm btn-dark btn-icon align-items-center me-2">
                    {{-- <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                      </svg>
                    </span> --}}
                     Add Price Content
                  </button>
                </a>

                <a href="{{ route('priceplans.edit', $priceplan) }}">
                  <button type="button" class="btn btn-white btn-icon px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                    </svg>
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">



            {{-- <div class="card-body px-0 py-0"> --}}

              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Content</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Sort number</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Status</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
            
              @foreach ($pricecontent as $key=>$row)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">
                        {{ $row->content }} <br>
                      </h6>
                    </div>
                  </div>
                </td>




                
                <td class="align-middle text-center">
                    <span class="text-secondary text-sm font-weight-normal">{{ $row->sort_number }}</span>
                  </td>

                <td class="px-6 py-4">
                  <span class="badge badge-sm border {{ $row->status == 1 ? 'border-success text-success bg-success border-radius-lg' : 'border-secondary text-secondary bg-secondary border-radius-lg' }}  ">{{ $row->status == 1 ? 'Active' : 'Deakitv' }}</span>
                </td>

                  <td class="align-middle">
                    {{-- <a href="{{ route('pricecontents.show', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Show page">
                      <i class="fa-regular fa-eye  text-primary" style="font-size: 0.9rem !important;" ></i>
                    </a> --}}
                    <a href="{{ route('pricecontents.edit', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit page">
                      <i class="fa-regular fa-pen-to-square text-primary mx-4" style="font-size: 0.9rem !important;"></i>
                    </a>

                    <form method="POST" action="{{ route('pricecontents.destroy', $row->id) }}" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" onclick="return confirm('Are you sure?')" class="text-secondary font-weight-bold text-xs" style="all: unset;">
                        <i class="far fa-trash-alt" aria-hidden="true" style="font-size: 0.9rem !important;"></i>
                      </button>
                    </form>
                  </td>

              </tr>
              @endforeach

           


                  </tbody>
                </table>
              </div>



            <p class="text-sm mb-4">
              {{-- @foreach ($pricecontent as $key=>$row)
    
              @endforeach --}}
              {{-- {{ $priceplan->description }}  --}}
             
            </p>
          </div>
        </div>
      </div>
    
    </div>
</div>


@endsection