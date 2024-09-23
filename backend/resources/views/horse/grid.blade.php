@php
    /**
     * @var Illuminate\Support\Collection $horses
     */
@endphp

@extends('layouts.main')

@section('content')
    <h1>Az USA államainak nemzeti lovai (Grid)</h1>

    <div class="row">
        @foreach ($horses as $horse)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$horse["fajta"]}}</h5>
                        <p class="card-text">{{$horse["allam"]}} ({{$horse["ev"]}})</p>
                        <img src="{{asset("img/$horse[kep]")}}" class="img img-fluid">
                        <p class="card-text">{{$horse["leiras"]}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
