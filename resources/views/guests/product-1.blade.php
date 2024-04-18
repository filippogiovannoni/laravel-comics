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
            <div class="comic">
                <h3>{{ $comic['title'] }}</h3>
                <div class="availability">
                    <div class="price">
                        <span>U.S Price: {{ $comic['price'] }}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <span>Check availability</span>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>
    </section>
@endsection
