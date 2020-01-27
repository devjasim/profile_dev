@extends('layouts.app', ['activePage' => 'experiences', 'titlePage' => __('Experiences Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Experinece List
                <a href="{{ route('experiences.create') }}" class="btn btn-sm btn-danger float-right">Add New Experinece</a>
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
                        Experinece Title
                    </th>
                    <th>
                        Company
                    </th>
                    <th>
                        Start Date
                    </th>
                    <th>
                        End Date
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($experiences as $key => $experience)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                            {{ $experience->title }}
                        </td>
                        <td>
                            {{ $experience->company }}
                        </td>
                        <td>
                            {{ $experience->start_date }}
                        </td>
                        <td>
                            {{ $experience->end_date }}
                        </td>
                        <td>
                            {{ $experience->desc }}
                        </td>
                        <td>
                          <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('experiences.destroy', $experience->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                          <tr>
                              <td colspan="7" class="text-center">No Data Found</td>
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
