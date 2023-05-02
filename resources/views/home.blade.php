@extends('layouts.app')

@section('page.title')
    DC Comics
@endsection

@section('main')

    <main>
        <div class="container">
            <div>
                <h3 class="current">CURRENT SERIES</h3>
            </div>
            <ul class="row row-cols-6 list-unstyled m-2 mb-5 pt-2">
                @foreach ($comics as $comic)
                    <li class="mb-4">
                        <img src={{$comic['thumb']}} alt={{ $comic['type']}} class="img-fluid">
                        <div class="fs-5 pt-2">{{ $comic['title'] }}</div>
                    </li>    
                @endforeach
            </ul>
        </div>
        <div class="more">
            <button class="more-load btn btn-primary" type="button">LOAD MORE</button>
        </div>
    </main>
    
@endsection