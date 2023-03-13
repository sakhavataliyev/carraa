@extends('backend.layouts.app')
@section('title', 'Static Pages')
@section('content')
   
<div class="container my-3 py-3">

    

    <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Static pages</h6>
                  <p class="text-sm">Index</p>
                </div>
                <div class="ms-auto d-flex">
                  {{-- <button type="button" class="btn btn-sm btn-white me-2">
                    View all
                  </button> --}}
                  <a class="btn-inner--text text-white" href="{{ route('staticpages.create') }}">
                    <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                      <span class="btn-inner--icon">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                          <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                        </svg>
                      </span>
                       Add page
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">

              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Page name</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Slug</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Status</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Created</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
            
              @foreach ($staticpage as $key=>$row)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">

                          <h6 class="text-md text-dark font-weight-semibold mt-2 me-2">{{ $staticpage->firstItem() + $key }}</h6>
                    

                        {{-- <div class="d-flex align-items-center">
                          {{ $key +1 }}
                          <img src="../assets/img/team-3.jpg" class="avatar avatar-sm rounded-circle me-2" alt="user2">
                        </div> --}}
                        {{-- <div class="d-flex flex-column justify-content-center ms-1">
                          <h6 class="mb-0 text-sm font-weight-semibold">Alexa Liras</h6>
                          <p class="text-sm text-secondary mb-0">alexa@creative-tim.com</p>
                        </div> --}}
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">{{ $row->title }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm text-dark font-weight-semibold mb-0">/{{ $row->slug }}</p>
                      {{-- <p class="text-sm text-secondary mb-0">Developer</p> --}}
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      Offline
                    </td> --}}


                    <td class="px-6 py-4">
                      <span class="badge badge-sm border {{ $row->status == 1 ? 'border-success text-success bg-success border-radius-lg' : 'border-secondary text-secondary bg-secondary border-radius-lg' }}  ">{{ $row->status == 1 ? 'Active' : 'Deakitv' }}</span>
                  </td>


                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $row->created_at }}</span>
                    </td>

                    <td class="align-middle">
                      <a href="{{ route('staticpages.show', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Show page">
                        <i class="fa-regular fa-eye  text-primary" style="font-size: 0.9rem !important;" ></i>
                      </a>
                      <a href="{{ route('staticpages.edit', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit page">
                        <i class="fa-regular fa-pen-to-square text-primary mx-4" style="font-size: 0.9rem !important;"></i>
                      </a>

                      <form method="POST" action="{{ route('staticpages.destroy', $row->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-secondary font-weight-bold text-xs" style="all: unset;">
                          <i class="far fa-trash-alt" aria-hidden="true" style="font-size: 0.9rem !important;"></i>
                        </button>
                      </form>

                      {{-- <a href="{{ route('staticpages.delete', $row->id) }}" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit user">
                        <i class="fa-regular fa-eye  text-primary ms-2"></i>
                      </a> --}}



                    </td>

                  </tr>
              @endforeach

           


                  </tbody>
                </table>
              </div>
              <div class="border-top py-3 px-3 d-flex align-items-center">

      <!-- Card footer -->
      {{-- <div class="card-footer py-4"> --}}
        {{ $staticpage->links("pagination::bootstrap-4") }}
      {{-- </div> --}}

                {{-- <p class="font-weight-semibold mb-0 text-dark text-sm">Page 1 of 10</p> --}}
                {{-- <div class="ms-auto">
                  <button class="btn btn-sm btn-white mb-0">Previous</button>
                  <button class="btn btn-sm btn-white mb-0">Next</button>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      


</div>


@endsection