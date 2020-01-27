@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Contact Message</h4>
              <p class="card-category">List of Contact information</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                </thead>
                <tbody>
                    @foreach ($contacts as $key=>$contact)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->subject }}</td>
                      <td>{{ $contact->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
