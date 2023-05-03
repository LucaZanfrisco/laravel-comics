<header> 
        <div>
            <div class="container header-up">
                <div>ADDITIONAL DC SITES &triangledown; </div>
                <div>DC POWER VISA </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <a href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo-dc" class="img-fluid pt-2 "></a>
                <ul class="d-flex justify-content-between list-unstyled gap-3">
                    {{-- ciclo che mostra la nav bar --}}
                    @foreach ($nav as $item)
                    <li class="{{ Str::startsWith( Route::currentRouteName() , $item) ? 'active' : ''}}"><a href="/{{ $item }}">{{ $item }}</a></li>
                        @if($loop->last)
                        <li class="{{ Str::startsWith( Route::currentRouteName() , $item) ? 'active' : ''}}"><a href="/{{ $item }}">{{ $item }}</a> &bigtriangledown; </li>
                        @endif
                    @endforeach
                </ul>
                {{-- sezione cerca --}}
                <div class="d-flex align-items-center">
                    <input type="text" placeholder="Search" class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </nav>
    <div class="jumbotron">

    </div>

</header>