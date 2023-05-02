<header> 
    
    <div class=>
        <div class="header-up">
            <div>DC POWER VISA </div>
            <div>ADDITIONAL DC SITES &triangledown; </div>
        </div>
        <nav class="d-flex justify-content-center align-items-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo-dc" class="img-fluid me-5">
            <ul class="d-flex justify-content-between list-unstyled gap-3">
                @foreach ($nav as $item)
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
            <div>
                <input type="text">
            </div>
        </nav>
    </div>
    <div class="jumbotron">

    </div>

</header>