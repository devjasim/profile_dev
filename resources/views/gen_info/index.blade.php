@extends('layouts.app', ['activePage' => 'gen_info', 'titlePage' => __('General Info')])

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
          <h4 class="card-title">General Info</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('gen_info.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ $geninfo ? $geninfo->name : old('name') }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Designation') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" id="input-designation" type="text" placeholder="{{ __('designation') }}" value="{{ $geninfo ? $geninfo->designation :old('designation') }}" required="true" aria-required="true"/>
                        @if ($errors->has('designation'))
                            <span id="designation-error" class="error text-danger" for="input-designation">{{ $errors->first('designation') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Short Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('short_desc') ? ' has-danger' : '' }}">
                        <textarea class="form-control{{ $errors->has('short_desc') ? ' is-invalid' : '' }}" name="short_desc" id="input-short_desc" type="text" placeholder="{{ __('short_desc') }}" required="true" aria-required="true" cols="30" rows="5">{{ $geninfo ? $geninfo->short_desc :old('short_desc') }}</textarea>
                        @if ($errors->has('short_desc'))
                            <span id="short_desc-error" class="error text-danger" for="input-short_desc">{{ $errors->first('short_desc') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                            <textarea class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" id="input-desc" type="text" placeholder="{{ __('desc') }}" required="true" aria-required="true" cols="30" rows="5">{{ $geninfo ? $geninfo->desc :old('desc') }}</textarea>
                            @if ($errors->has('desc'))
                            <span id="desc-error" class="error text-danger" for="input-desc">{{ $errors->first('desc') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Profile Image') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" placeholder="{{ __('image') }}" value="{{ old('image') }}" />
                        @if ($errors->has('image'))
                            <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                        @endif
                        </div>
                        <img src="assets/images/{{ $geninfo ? $geninfo->image : '' }}" height="100" width="100" alt="">
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Resume File') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('cv') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('cv') ? ' is-invalid' : '' }}" name="cv" id="input-cv" type="file" placeholder="{{ __('cv') }}" value="{{ old('cv') }}" aria-required="true"/>
                        @if ($errors->has('cv'))
                            <span id="cv-error" class="error text-danger" for="input-cv">{{ $errors->first('cv') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Location') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="input-location" type="text" placeholder="{{ __('location') }}" value="{{ $geninfo ? $geninfo->location :old('location') }}" required="true" aria-required="true"/>
                        @if ($errors->has('location'))
                            <span id="location-error" class="error text-danger" for="input-location">{{ $errors->first('location') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Birthday') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('birthday') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" id="input-birthday" type="date" placeholder="{{ __('birthday') }}" value="{{ $geninfo ? $geninfo->birthday : old('birthday') }}" required="true" aria-required="true"/>
                        @if ($errors->has('birthday'))
                            <span id="birthday-error" class="error text-danger" for="input-birthday">{{ $errors->first('birthday') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Skill Description') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('skill_desc') ? ' has-danger' : '' }}">
                        <textarea class="form-control{{ $errors->has('skill_desc') ? ' is-invalid' : '' }}" name="skill_desc" id="input-skill_desc" type="text" placeholder="{{ __('skill_desc') }}" " required="true" aria-required="true" rows="5">{{ $geninfo ? $geninfo->skill_desc : old('skill_desc')}}</textarea>
                            @if ($errors->has('skill_desc'))
                            <span id="skill_desc-error" class="error text-danger" for="input-skill_desc">{{ $errors->first('skill_desc') }}</span>
                            @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('phone') }}" value="{{ $geninfo ? $geninfo->phone : old('phone') }}" required="true" aria-required="true"/>
                        @if ($errors->has('phone'))
                            <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('email') }}" value="{{ $geninfo ? $geninfo->email : old('email') }}" required="true" aria-required="true"/>
                        @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
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
