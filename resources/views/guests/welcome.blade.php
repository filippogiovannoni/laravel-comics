@extends('layouts.app')

@section('content')
    <div class="jumbotron">
    </div>
    <div class="comics">
        <div class="container">
            <span>Current Series</span>
            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <span>{{ $comic['title'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="load">
            <a href="">Load More</a>
        </div>
    </div>
@endsection
