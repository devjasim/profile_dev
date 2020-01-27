@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Service Edit')])

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
          <h4 class="card-title">Service Edit</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('services.update') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $service->id }}" name="id">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Services Name') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('icon') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('icon') ? ' is-invalid' : '' }}" name="icon" id="input-icon" type="text" placeholder="{{ __('icon') }}" value="{{ $service->icon }}" required="true" aria-required="true"/>
                        @if ($errors->has('icon'))
                            <span id="icon-error" class="error text-danger" for="input-icon">{{ $errors->first('icon') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Service Title') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ $service->title }}" required="true" aria-required="true"/>
                        @if ($errors->has('title'))
                            <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Service Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" id="input-desc" type="text" placeholder="{{ __('desc') }}" value="{{ $service->desc }}" required="true" aria-required="true"/>
                        @if ($errors->has('desc'))
                            <span id="desc-error" class="error text-danger" for="input-desc">{{ $errors->first('desc') }}</span>
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
