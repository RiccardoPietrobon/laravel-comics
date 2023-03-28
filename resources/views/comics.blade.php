@extends('layout.app')

@section('main_content')
<section class="list-comics">
    <div class="container">
        <h1>CURRENT SERIES</h1>
        <div class="row row-cols-5 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <img src="https://picsum.photos/300/500" alt="">
                        <a href="">{{strtoupper($comic['series'])}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
