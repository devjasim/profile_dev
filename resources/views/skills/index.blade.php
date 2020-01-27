@extends('layouts.app', ['activePage' => 'skills', 'titlePage' => __('Skills Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               Skill List
                <a href="{{ route('skills.create') }}" class="btn btn-sm btn-danger float-right">Add New Skill</a>
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
                      Skill Name
                    </th>
                    <th>
                      Skill Percantage
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($skills as $key => $skill)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                          {{ $skill->skill }}
                        </td>
                        <td>
                            {{ $skill->percantage }}
                        </td>
                        <td>
                          <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('skills.destroy', $skill->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
