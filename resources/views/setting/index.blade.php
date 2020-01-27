@extends('layouts.app', ['activePage' => 'site_setting', 'titlePage' => __('Site Setting')])

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
          <h4 class="card-title">Site Setting</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('site_setting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ $setting ? $setting->title : old('title') }}"/>
                        @if ($errors->has('title'))
                            <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Keyword') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('keyword') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('keyword') ? ' is-invalid' : '' }}" name="keyword" id="input-keyword" type="text" placeholder="{{ __('keyword') }}" value="{{ $setting ? $setting->keyword :old('keyword') }}"/>
                        @if ($errors->has('keyword'))
                            <span id="keyword-error" class="error text-danger" for="input-keyword">{{ $errors->first('keyword') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('description') }}"  value="{{ $setting ? $setting->description :old('description') }}"/>
                        @if ($errors->has('description'))
                            <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Subject') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" id="input-subject" type="text" placeholder="{{ __('subject') }}" value="{{ $setting ? $setting->subject :old('subject') }}"/>
                            @if ($errors->has('subject'))
                            <span id="subject-error" class="error text-danger" for="input-subject">{{ $errors->first('subject') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Favicon') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('favicon') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('favicon') ? ' is-invalid' : '' }}" name="favicon" id="input-favicon" type="file" placeholder="{{ __('favicon') }}" value="{{ old('favicon') }}" />
                        @if ($errors->has('favicon'))
                            <span id="favicon-error" class="error text-danger" for="input-favicon">{{ $errors->first('favicon') }}</span>
                        @endif
                        </div>
                        <img src="assets/images/{{ $setting ? $setting->favicon : '' }}" height="64" width="64" alt="">
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Copyright') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('copyright') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('copyright') ? ' is-invalid' : '' }}" name="copyright" id="input-copyright" type="text" placeholder="{{ __('copyright') }}" value="{{ $setting ? $setting->copyright :old('copyright') }}"/>
                        @if ($errors->has('copyright'))
                            <span id="copyright-error" class="error text-danger" for="input-copyright">{{ $errors->first('copyright') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Author') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('author') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" id="input-author" type="text" placeholder="{{ __('author') }}" value="{{ $setting ? $setting->author : old('author') }}"/>
                        @if ($errors->has('author'))
                            <span id="author-error" class="error text-danger" for="input-author">{{ $errors->first('author') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Owner') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('owner') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('owner') ? ' is-invalid' : '' }}" name="owner" id="input-owner" type="text" placeholder="{{ __('owner') }}" " value="{{ $setting ? $setting->owner : old('owner')}}"/>
                            @if ($errors->has('owner'))
                            <span id="owner-error" class="error text-danger" for="input-owner">{{ $errors->first('owner') }}</span>
                            @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Reply To') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('reply_to') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('reply_to') ? ' is-invalid' : '' }}" name="reply_to" id="input-reply_to" type="text" placeholder="{{ __('reply_to') }}" value="{{ $setting ? $setting->reply_to : old('reply_to') }}"/>
                        @if ($errors->has('reply_to'))
                            <span id="reply_to-error" class="error text-danger" for="input-reply_to">{{ $errors->first('reply_to') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('URL') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" id="input-url" type="text" placeholder="{{ __('url') }}" value="{{ $setting ? $setting->url : old('url') }}"/>
                        @if ($errors->has('url'))
                            <span id="url-error" class="error text-danger" for="input-url">{{ $errors->first('url') }}</span>
                        @endif
                        </div>
                        <input type="submit" class="btn btn-primary mt-3">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
