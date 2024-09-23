@php
    /**
     * @var Illuminate\Support\Collection $horses
     */
@endphp

@extends('layouts.main')

@section('content')
    <h1>Az USA államainak nemzeti lovai (Felsorolás)</h1>

    <ul id="horse">
        @foreach ($horses as $horse)
            <li>{{ $horse["fajta"] }} ({{$horse["allam"]}} - {{$horse["ev"]}})</li>
        @endforeach
    </ul>
@endsection
