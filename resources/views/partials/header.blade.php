<header>
    <div class="banner">
        <div class="container">
            <span>DC Power Visa</span>
            <span>Additional dc sites</span>
        </div>
    </div>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}">
            </div>
            <ul>
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                </li>
                <li><a href="#" class="{{ Route::currentRouteName() === 'product' ? 'active' : '' }}">Comics</a>
                </li>
                <li><a href="">Characters</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">Tv</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Collectibles</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Fans</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Shop</a></li>
            </ul>
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search">
            </div>
        </nav>
    </div>
</header>
