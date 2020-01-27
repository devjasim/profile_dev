@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Services Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Service List
                <a href="{{ route('services.create') }}" class="btn btn-sm btn-danger float-right">Add New Service</a>
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
                        Service Icon
                    </th>
                    <th>
                        Service Title
                    </th>
                    <th>
                        Service Description
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($services as $key => $service)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                            <i class="{{ $service->icon }} fa-2x"></i>
                        </td>
                        <td>
                            {{ $service->title }}
                        </td>
                        <td>
                            {{ $service->desc }}
                        </td>
                        <td>
                          <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('services.destroy', $service->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                          <tr>
                              <td colspan="4" class="text-center">No Data Found</td>
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
