@extends('layouts.app')

@section('content')

<table class="table table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">{{ __('Item') }}</th>
            <th scope="col">{{ __('Ciudad') }}</th>
            <th scope="col">{{ __('Temperatura') }}</th>
        </tr>
    </thead>
    <tbody>
        @if($history->count())
            @foreach($history as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->ciudad }}</td>
                <td>{{ $item->temperatura}}</td>
            </tr>
            @endforeach
        @else
            <tr class="empty">
                <td colspan="100">{{ __('No se encontraron consultas') }}</td>
            </tr>
        @endif
    </tbody>
</table>

@endsection