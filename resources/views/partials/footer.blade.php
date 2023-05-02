<footer>
    <div class="footer-top">
        <div class="container">
            <ul class="row row-cols-5 align-items-center list-unstyled justify-content-between py-5 m-0">
            @foreach ($footerTop as $item)
                <li>
                    <img src="{{ Vite::asset($item['image']) }}" alt="{{ $item['image'] }}" class="shop">
                    <span> {{ $item['name'] }}</span>
                </li>
            @endforeach  
        </ul>
        </div>  
    </div>
    <div class="footer-mid">
        <div class="container-jumbo container overflow-hidden">
            <div class="container-info">
                <div>
                    <ul>
                        <li><h3>DC COMICS</h3></li>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movie</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    <ul>
                        <li><h3>SHOP</h3></li>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>DC</h3></li>
                        <li>Terms of Use</li>
                        <li>Privacy policy(New)</li>
                        <li>Ad Choices</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Show Help</li>
                        <li>Contac Us</li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h3>SITES</h3></li>
                        <li>DC</li>
                        <li>MAD Magazine</li>
                        <li>DC Kids</li>
                        <li>DC Universe</li>
                        <li>DC Power Visa</li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="{{ vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc-logo-big">
            </div>
        </div>
    </div>
    <div class="footer-bot d-flex align-items-center">
        <div class="container">
            <div class="row row-cols-2 justify-content-between align-items-center">
                <div>
                    <button>SIGN-UP NOW</button>
                </div>
                <div>
                    <ul class="d-flex list-unstyled justify-content-end align-items-center">
                        <li class="follow">FOLLOW US</li>
                        @foreach ($social as $item)
                            <li>
                                <img src="{{ vite::asset($item['image']) }}" alt="{{ $item['name'] }}">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>