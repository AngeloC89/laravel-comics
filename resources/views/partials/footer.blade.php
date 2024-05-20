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
 <section id="footer_mid">
 <div>
        <div class="container d-flex ">
            <div id="list">
                <ul class="list-unstyled pe-3 ">
                    <li>
                        <h4 class="text-white"></h4>
                    </li>
                    <li></a></li>
                </ul>
            </div>
            <div id="dc-comics"></div>
        </div>
    </div>
 </section>
</footer>
