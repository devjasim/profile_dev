@extends('layouts.app', ['activePage' => 'educations', 'titlePage' => __('Educations Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Education List
                <a href="{{ route('educations.create') }}" class="btn btn-sm btn-danger float-right">Add New Education</a>
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
                        Education Title
                    </th>
                    <th>
                        Institute
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
                      @forelse ($educations as $key => $education)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                            {{ $education->title }}
                        </td>
                        <td>
                            {{ $education->institute }}
                        </td>
                        <td>
                            {{ $education->start_date }}
                        </td>
                        <td>
                            {{ $education->end_date }}
                        </td>
                        <td>
                            {{ $education->desc }}
                        </td>
                        <td>
                          <a href="{{ route('educations.edit', $education->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('educations.destroy', $education->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
