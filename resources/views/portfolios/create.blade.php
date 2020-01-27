@extends('layouts.app', ['activePage' => 'portfolios', 'titlePage' => __('Portfolio Create')])

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
          <h4 class="card-title">Set Portfolios</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Portfolios Category') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-category" type="text" placeholder="{{ __('category') }}" value="{{ old('category') }}" required="true" aria-required="true"/>
                        @if ($errors->has('category'))
                            <span id="category-error" class="error text-danger" for="input-category">{{ $errors->first('category') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Portfolio Title') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ old('title') }}" required="true" aria-required="true"/>
                        @if ($errors->has('title'))
                            <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Portfolio Link') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" id="input-link" type="text" placeholder="{{ __('link') }}" value="{{ old('link') }}" required="true" aria-required="true"/>
                        @if ($errors->has('link'))
                            <span id="link-error" class="error text-danger" for="input-link">{{ $errors->first('link') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Portfolio Image') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" placeholder="{{ __('image') }}" value="{{ old('image') }}" required="true" aria-required="true"/>
                        @if ($errors->has('image'))
                            <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
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
