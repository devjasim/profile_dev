@extends('layouts.app', ['activePage' => 'socials', 'titlePage' => __('Service Create')])

@push('css')
    <style>
        label{
            color: black;
        }
    </style>
@endpush

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Set Socials Profile</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('socials.store') }}" method="POST">
                @csrf
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Socials Icon Class') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('icon') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('icon') ? ' is-invalid' : '' }}" name="icon" id="input-icon" type="text" placeholder="{{ __('icon') }}" value="{{ old('icon') }}" required="true" aria-required="true"/>
                        @if ($errors->has('icon'))
                            <span id="icon-error" class="error text-danger" for="input-icon">{{ $errors->first('icon') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Link') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" id="input-link" type="text" placeholder="{{ __('link') }}" value="{{ old('link') }}" required="true" aria-required="true"/>
                        @if ($errors->has('link'))
                            <span id="link-error" class="error text-danger" for="input-link">{{ $errors->first('link') }}</span>
                        @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary mt-3 float-right">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
