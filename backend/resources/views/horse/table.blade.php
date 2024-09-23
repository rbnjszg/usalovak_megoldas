@php
    /**
     * @var Illuminate\Support\Collection $horses
     */
@endphp

@extends('layouts.main')

@section('content')

<h1>Az USA államainak nemzeti lovai (Táblázat)</h1>

    <table class="table table-striped">
        <thead>
            <th>Állam</th>
            <th>Fajta</th>
            <th>Leírás</th>
            <th>Év</th>
        </thead>

        <tbody>
            <tr>
                @foreach ($horses as $horse)
                    <td>{{ $horse['allam'] }}</td>
                    <td>{{ $horse['fajta'] }}</td>
                    <td>{{ $horse['leiras'] }}</td>
                    <td>{{ $horse['ev'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
