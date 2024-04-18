@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="products">
        <div class="banner"></div>
        <div class="container">
            <div class="card">
                <div class="type">{{ $comic['type'] }}</div>
                <img src="{{ $comic['thumb'] }}" alt="comic_image">
                <div class="gallery">View Gallery</div>
            </div>
        </div>
    </section>
@endsection
