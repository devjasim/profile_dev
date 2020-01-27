@extends('layouts.app', ['activePage' => 'blogs', 'titlePage' => __('Blog Edit')])

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
          <h4 class="card-title">blog Edit</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('blogs.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $blog->id }}" name="id">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Tag') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('tag') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" name="tag" id="input-tag" type="text" placeholder="{{ __('tag') }}" value="{{ $blog->tag }}" required="true" aria-required="true"/>
                        @if ($errors->has('tag'))
                            <span id="tag-error" class="error text-danger" for="input-tag">{{ $errors->first('tag') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __(' Title') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ $blog->title }}" required="true" aria-required="true"/>
                        @if ($errors->has('title'))
                            <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __(' Link') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" id="input-link" type="text" placeholder="{{ __('link') }}" value="{{ $blog->link }}" required="true" aria-required="true"/>
                        @if ($errors->has('link'))
                            <span id="link-error" class="error text-danger" for="input-link">{{ $errors->first('link') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __(' Image') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" placeholder="{{ __('image') }}" aria-required="true"/>
                        @if ($errors->has('image'))
                            <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                        @endif
                        </div>
                        <img src="{{ asset('assets/images/'.$blog->image) }}" height="80" width="100" alt="">
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
