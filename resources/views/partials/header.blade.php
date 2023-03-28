<header>
    <div class="blue-section">
        <div class="container d-flex justify-content-end align-items-center">
            <ul class="d-flex">
                <li class="px-2">DC POWER VISA</li>
                <li class="px-2">ADDITIONAL DC SITES</li>
            </ul>
        </div>
    </div>
    <div class="white-section">
        <div class="container py-4">
            <nav class="container d-flex justify-content-center align-items-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <ul class="container d-flex justify-content-center">
                    <li class="px-2">
                        <a href="{{ route('homepage') }}">HOME</a></li>
                    <li class="px-2">
                        <a href="{{ route('comics') }}">COMIC</a></li>
                    <li class="px-2">
                        <a href="{{ route('description') }}">DESCRIPTION</a></li>
                    <li class="px-2">TV</li>
                    <li class="px-2">COLLECTIBLES</li>
                    <LI class="px-2">VIDEOS</LI>
                    <li class="px-2">MOVIES</li>
                    <li class="px-2">TV</li>
                    <li class="px-2">COLLECTIBLES</li>
                    <LI class="px-2">VIDEOS</LI>
                    <LI class="px-2">FANS</LI>
                    <LI class="px-2">NEWS</LI>
                    <LI class="px-2">SHOP</LI>
                </ul>
                <div>
                    <input type="text" id="name" name="name" placeholder="Search">
                    <label for="name"></label>
                </div>
            </nav>
        </div>
    </div>
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
</header>