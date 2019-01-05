@extends('layouts.site-template')

@section('body-content')
    <section id="home" class="divider parallax fullscreen" data-parallax-ratio="0.1" data-bg-img="{{asset('site/images/bg9.jpg')}}">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container pt-150 pb-150">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('extra_scripts')
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="site/js/custom.js"></script>
<script>
    $(".ser_inner-2").owlCarousel({
        margin:30,
        "items": 3,
        "nav":false,
        "navigationText": [""],
        "itemsDesktop": [1199, 2],
        "itemsDesktopSmall": [980, 2],
        "itemsTablet": [768, 2],
        "itemsMobile": [479, 1],
        "pagination": true,
        "autoHeight": false,
        "autoplay": false,
        "autoplayTimeout":3000,
        "loop":true,
        "dots": false,

        "responsive":{
            "0":{
                "items":1
            },
            "480":{
                "items":2
            },
            "768":{
                "items":2
            },
            "1200":{
                "items":3
            }
        },

    });
</script>
@endsection

