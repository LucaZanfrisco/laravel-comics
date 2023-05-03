@extends('layouts.app')

@section('main')
    <section id="comic">
        <div class="poster-section">
            <div class="container">
                <img src="{{ $comic_detail['thumb'] }}" alt="{{ $comic_detail['title'] }}" class="poster">
            </div>
        </div>
        <div class="info-section">
            <div class="container p-0">
                <div class="row row-cols-2 gs-0">
                    <div>
                        <h2>{{ $comic_detail['title'] }}</h2>
                        <div class="row price gx-0 my-3">
                            <div class="col-8 d-flex align-items-center justify-content-between available">
                                <div>{{ $comic_detail['price'] }}</div>
                                <div>AVAILABLE</div>
                            </div>
                            <div class="col-4 text-center">
                                Check Availability &triangledown;
                            </div>
                        </div>
                        <div>
                            <p class="fs-6">{{ $comic_detail['description'] }} </p>
                        </div>
                    </div>
                    <div class="adv">
                        <div>ADVERTISEMENT</div>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv" class="img-fluid">
                    </div>
                </div>
            </div>
            <div id="talent">
                <div class="container">
                    <div class="row row-cols-2">
                        <div>
                            <h3>Talent</h3>
                            <div class="row">
                                <div class="col-4">
                                    <div>Art by:</div>
                                </div>
                                <div class="col-8">
                                    @foreach ($comic_detail['artists'] as $item)
                                        <span> <a href="#">{{ $item }}, </a></span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div>Written by:</div>
                                </div>

                                <div class="col-8">
                                    @foreach ($comic_detail['writers'] as $item)
                                        <span><a href="#">{{ $item }}, </a></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3>Specs</h3>
                            <div class="row">
                                <div class="col-4">
                                    <div>Series:</div>
                                </div>
                                <div class="col-8">
                                    <div class="text-uppercase"><a href="#">{{ $comic_detail['series'] }}</a></div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-4">
                                    <div>U.S Price:</div>
                                </div>
                                <div class="col-8">
                                    <div>{{ $comic_detail['price'] }}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div>On Sale Date:</div>
                                </div>
                                <div class="col-8">
                                    <div>{{ $comic_detail['sale_date'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
