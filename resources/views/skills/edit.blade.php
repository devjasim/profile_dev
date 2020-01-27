@extends('layouts.app', ['activePage' => 'skills', 'titlePage' => __('Skill')])

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
          <h4 class="card-title">Skill Edit</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <form action="{{ route('skills.update') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $skill->id }}" name="id">
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Skills Name') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('skill') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('skill') ? ' is-invalid' : '' }}" name="skill" id="input-skill" type="text" placeholder="{{ __('skill') }}" value="{{ $skill->skill }}" required="true" aria-required="true"/>
                        @if ($errors->has('skill'))
                            <span id="skill-error" class="error text-danger" for="input-skill">{{ $errors->first('skill') }}</span>
                        @endif
                        </div>
                    </div>

                    <label class="col-sm-2 col-form-label">{{ __('Skill Percantage') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('percantage') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('percantage') ? ' is-invalid' : '' }}" name="percantage" id="input-percantage" type="text" placeholder="{{ __('percantage') }}" value="{{ $skill->percantage }}" required="true" aria-required="true"/>
                        @if ($errors->has('percantage'))
                            <span id="percantage-error" class="error text-danger" for="input-percantage">{{ $errors->first('percantage') }}</span>
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
