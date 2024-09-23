@php
    /**
     * @var Illuminate\Support\Collection $horses
     */
@endphp

@extends('layouts.main')

@section('content')
    <h1>Az USA államainak nemzeti lovai</h1>

    <ul>
        <li><a href="{{ route('horse.list') }}">Felsorolás</a></li>
        <li><a href="{{ route('horse.table') }}">Táblázat</a></li>
        <li><a href="{{ route('horse.grid') }}">Bootstrap GRID</a></li>
    </ul>
@endsection
