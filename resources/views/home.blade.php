@extends('layouts.app')

@section('page.title')
    DC Comics
@endsection

@section('main')
    {{-- Main della pagina generale dei fumetti --}}
    <main>
        <section id="comic-main">
            <div class="container">
                <div>
                    <h3 class="current">CURRENT SERIES</h3>
                </div>
                <ul class="row row-cols-6 list-unstyled m-2 mb-5 pt-2">
                    {{-- Ciclo che mostra il poster e il titolo del fumetto --}}
                    @foreach ($comics as $comic)
                        <li class="mb-4">
                            <a href="{{ route('COMICS', ['index' => $loop->index]) }}">
                                <img src={{ $comic['thumb'] }} alt={{ $comic['type'] }} class="img-fluid">
                                <div class="fs-5 pt-2">{{ $comic['title'] }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- Bottone Carica altro (non funziona) --}}
            <div class="more">
                <button class="more-load btn btn-primary" type="button">LOAD MORE</button>
            </div>
        </section>
        {{-- sezione merch del main --}}
        <div class="main-bot">
            <div class="container">
                {{-- lista del merch --}}
                <ul class="row row-cols-5 align-items-center list-unstyled justify-content-between py-5 m-0">
                    {{-- ciclo che mostra la lista dei merch --}}
                    @foreach ($footerTop as $item)
                        <li>
                            <img src="{{ Vite::asset($item['image']) }}" alt="{{ $item['image'] }}" class="shop">
                            <span> {{ $item['name'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
