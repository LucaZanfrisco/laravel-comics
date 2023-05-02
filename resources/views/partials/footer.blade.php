<footer>
    <div class="footer-top">
        <div class="container">
            <ul class="row row-cols-5 align-items-center list-unstyled justify-content-between py-5">
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
        
    </div>
</footer>