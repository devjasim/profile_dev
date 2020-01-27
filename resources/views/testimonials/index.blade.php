@extends('layouts.app', ['activePage' => 'testimonials', 'titlePage' => __('Testimonials Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Testimonial List
                <a href="{{ route('testimonials.create') }}" class="btn btn-sm btn-danger float-right">Add New testimonial</a>
            </h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                  <thead class=" text-primary">
                    <th>
                      SL
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Designation
                    </th>
                    <th>
                         Description
                    </th>
                    <th>
                         Image
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($testimonials as $key => $testimonial)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                             {{ $testimonial->name }}
                        </td>
                        <td>
                            {{ $testimonial->designation }}
                        </td>
                        <td>
                            {{ $testimonial->desc }}
                        </td>
                        <td>
                            <img src="{{ asset('assets/images/'.$testimonial->image) }}" alt="" height="70" width="100">
                        </td>
                        <td>
                          <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('testimonials.destroy', $testimonial->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                          <tr>
                              <td colspan="6" class="text-center">No Data Found</td>
                          </tr>
                      @endforelse
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
