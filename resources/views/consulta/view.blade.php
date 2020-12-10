@extends('layouts.app')

@section('content')

<form id="form-page" method="POST" action="{{ route('consulta.save') }}">
    <div class="page-title">
        <h1>{{ __('Consultar Tiempo Climatico') }}</h1>
    </div>
    <div class="container page-form">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label for="ciudad">{{ __('Ciudad') }}</label>
                <select id="ciudad" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" readonly>
                    <option value="Bogota" disabled>{{ __('Seleccionar opción') }}</option>
                    <option value="Orlando">{{ __('Orlando') }}</option>
                    <option value="Miami">{{ __('Miami') }}</option>
                    <option value="New York">{{ __('New York') }}</option>
                </select>
                @error('ciudad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="buttons col-sm-6 form-group">
                <label for="#"></label>
                <button type="submit" id="save" name="action" value="save" class="btn btn-primary btn-sm">{{ __('Consultar') }}</button>
                @isset($weather)
                    <h3>{{ $weather->temp - 273.15  }} {{ __('°C') }}</h3>
                @endisset
            </div>
        </div>
    </div>
    @isset($map)
    {!! $map['html'] !!}
    @endisset
    @csrf
</form>
@endsection