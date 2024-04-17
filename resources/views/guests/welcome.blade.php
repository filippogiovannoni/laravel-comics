@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
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
    <div class="feature">
        <div class="container">

            <ul>
                <li>
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}">
                    <span>Digital comics</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}">
                    <span>Dc merchandise</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}">
                    <span>Subscriptions</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}">
                    <span>Comic shop locator</span>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}">
                    <span>Dc power visa</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
