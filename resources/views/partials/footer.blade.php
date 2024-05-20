<footer>
 <section id="footer_top">
 <div class="p-5">
        <div class="container">
            <ul class="d-flex justify-content-between align-items-center list-unstyled">
                @foreach($link_footer as $links)
                <li class="d-flex justify-content-around  align-items-center  ">
                    <img class="img-fluid " src="{{Vite::asset( $links['icon'] )}}" alt="Image" />
                    <a class="text-decoration-none text-uppercase text-white" href="/">{{$links['text']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
 </section>
</footer>
