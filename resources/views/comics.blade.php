@extends('layout.app')

@section('paragrafo_name')
    COMICS
@endsection

@section('main_content')
<section class="list-comics">
    <div class="container py-3">
        <h1>CURRENT SERIES</h1>
        <div class="row row-cols-6 g-4 py-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img src="https://picsum.photos/300/300" alt="">
                        <a href="{{route('description', ['series' => $comic['series'] ])}}">
                            {{strtoupper($comic['series'])}}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-primary text-center">LOAD MORE</button>
    </div>
</section>
<section class="blue-nav">
    <nav class="container">
        <ul class="d-flex py-5 row row-cols-5">
            <li class="d-flex col align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span class="px-2">DIGITAL COMICS</span>
            </li>
            <li class="d-flex col align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span class="px-2">DIGITAL COMICS</span>
            </li>
            <li class="d-flex col align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span class="px-2">DIGITAL COMICS</span>
            </li>
            <li class="d-flex col align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span class="px-2">DIGITAL COMICS</span>
            </li>
            <li class="d-flex col align-items-center">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span class="px-2">DIGITAL COMICS</span>
            </li>

        </ul>
    </nav>
</section>
@endsection
