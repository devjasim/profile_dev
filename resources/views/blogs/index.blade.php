@extends('layouts.app', ['activePage' => 'blogs', 'titlePage' => __('Blogs Index')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
               blog List
                <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-danger float-right">Add New blog</a>
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
                        Tag
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
                      @forelse ($blogs as $key => $blog)
                      <tr>
                        <td>
                          {{ $key+1 }}
                        </td>
                        <td>
                             {{ $blog->tag }}
                        </td>
                        <td>
                            {{ $blog->title }}
                        </td>
                        <td>
                            {{ $blog->link }}
                        </td>
                        <td>
                            <img src="{{ asset('assets/images/'.$blog->image) }}" alt="" height="70" width="100">
                        </td>
                        <td>
                          <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <a href="{{ route('blogs.destroy', $blog->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
