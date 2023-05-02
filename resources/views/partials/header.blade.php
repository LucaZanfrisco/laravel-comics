<header> 
    
        <div>
            <div class="container header-up">
                <div>ADDITIONAL DC SITES &triangledown; </div>
                <div>DC POWER VISA </div>
            </div>
        </div>
        <nav>
            <div class="container d-flex align-items-center justify-content-between">
                <a href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo-dc" class="img-fluid"></a>
                <ul class="d-flex justify-content-between list-unstyled gap-4">
                    @foreach ($nav as $item)
                        <li><a href="/{{ $item }}">{{ $item }}</a></li>
                    @endforeach
                </ul>
                <div>
                    <input type="text" placeholder="Search" class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </nav>
    <div class="jumbotron">

    </div>

</header>