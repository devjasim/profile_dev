@extends('layouts.app', ['activePage' => 'portfolios', 'titlePage' => __('portfolios Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               portfolio List
                <a href="{{ route('portfolios.create') }}" class="btn btn-sm btn-danger float-right">Add New portfolio</a>
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
                        Category
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                         Link
                    </th>
                    <th>
                         Image
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                      @forelse ($portfolios as $key => $portfolio)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                             {{ $portfolio->category }}
                        </td>
                        <td>
                            {{ $portfolio->title }}
                        </td>
                        <td>
                            {{ $portfolio->link }}
                        </td>
                        <td>
                            <img src="{{ asset('assets/images/'.$portfolio->image) }}" alt="" height="70" width="100">
                        </td>
                        <td>
                          <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('portfolios.destroy', $portfolio->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
