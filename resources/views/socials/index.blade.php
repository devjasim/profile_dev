@extends('layouts.app', ['activePage' => 'socials', 'titlePage' => __('Socials Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Social Profile List
                <a href="{{ route('socials.create') }}" class="btn btn-sm btn-danger float-right">Add New Social Profile</a>
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
                        Service Link
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($socials as $key => $service)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                            <i class="{{ $service->icon }} fa-2x"></i>
                        </td>
                        <td>
                            {{ $service->link }}
                        </td>
                        <td>
                          <a href="{{ route('socials.edit', $service->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('socials.destroy', $service->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
