@extends('layouts.app', ['activePage' => 'testimonials', 'titlePage' => __('testimonial Edit')])

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
          <h4 class="card-title">testimonial Edit</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('testimonials.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $testimonial->id }}" name="id">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('name') }}" value="{{ $testimonial->name }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Designation') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" id="input-designation" type="text" placeholder="{{ __('designation') }}" value="{{ $testimonial->designation }}" required="true" aria-required="true"/>
                        @if ($errors->has('designation'))
                            <span id="designation-error" class="error text-danger" for="input-designation">{{ $errors->first('designation') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" id="input-desc" type="text" placeholder="{{ __('desc') }}" value="{{ $testimonial->desc }}" required="true" aria-required="true"/>
                        @if ($errors->has('desc'))
                            <span id="desc-error" class="error text-danger" for="input-desc">{{ $errors->first('desc') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" placeholder="{{ __('image') }}" aria-required="true"/>
                        @if ($errors->has('image'))
                            <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                        @endif
                        </div>
                        <img src="{{ asset('assets/images/'.$testimonial->image) }}" height="80" width="100" alt="">
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
