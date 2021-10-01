@extends('layouts.app')

@section('title-block')Big Slam - Soccer 03 - Just another Big Slam Sites site
@endsection
@section('content')

<div class="bigslam-body-outer-wrapper ">
    <div class="bigslam-body-wrapper clearfix  bigslam-with-transparent-header bigslam-with-frame">

        @include('include.head_menu')

        <div class="bigslam-page-wrapper" id="bigslam-page-wrapper">
            <div class="bigslam-not-found-wrap" id="bigslam-full-no-header-wrap">
                <div class="bigslam-not-found-background"></div>
                <div class="bigslam-not-found-container bigslam-container">
                    <div class="bigslam-header-transparent-substitute"></div>
                    <div class="bigslam-not-found-content bigslam-item-pdlr"><h1 class="bigslam-not-found-head">404</h1>
                        <h3 class="bigslam-not-found-title bigslam-content-font">Page Not Found</h3>
                        <div class="bigslam-not-found-caption">Sorry, we couldn&#039;t find the page you&#039;re looking
                            for.
                        </div>
                        <form role="search" method="get" class="search-form"
                              action="https://demo.goodlayers.com/bigslam/"><input type="text"
                                                                                   class="search-field bigslam-title-font"
                                                                                   placeholder="Type Keywords..."
                                                                                   value="" name="s">
                            <div class="bigslam-top-search-submit"><i class="fa fa-search"></i></div>
                            <input type="submit" class="search-submit" value="Search"></form>
                        <div class="bigslam-not-found-back-to-home"><a href="https://demo.goodlayers.com/bigslam/">Or
                                Back To Homepage</a></div>
                    </div>
                </div>
            </div>
        </div>

        @include('include.footer')

    </div>
</div>
<a href="#bigslam-top-anchor" class="bigslam-footer-back-to-top-button" id="bigslam-footer-back-to-top-button"><i
        class="fa fa-angle-up"></i></a>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript">(function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();</script>
<script type='text/javascript'
        src='https://demo.goodlayers.com/bigslam/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7'
        id='regenerator-runtime-js'></script>
<script type='text/javascript'
        src='https://demo.goodlayers.com/bigslam/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>var wpcf7 = {
        "api": {
            "root": "https:\/\/demo.goodlayers.com\/bigslam\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };</script>
<script type='text/javascript' id='gdlr-core-page-builder-js-extra'>var gdlr_core_pbf = {
        "admin": "",
        "video": {"width": "640", "height": "360"},
        "ajax_url": "https:\/\/demo.goodlayers.com\/bigslam\/wp-admin\/admin-ajax.php",
        "ilightbox_skin": "dark"
    };</script>
<script type='text/javascript' id='sportspress-js-extra'>var localized_strings = {
        "days": "days",
        "hrs": "hrs",
        "mins": "mins",
        "secs": "secs",
        "previous": "Previous",
        "next": "Next"
    };</script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>var wc_add_to_cart_params = {
        "ajax_url": "\/bigslam\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/demo.goodlayers.com\/bigslam\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };</script>
<script type='text/javascript' id='woocommerce-js-extra'>var woocommerce_params = {
        "ajax_url": "\/bigslam\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/?wc-ajax=%%endpoint%%"
    };</script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>var wc_cart_fragments_params = {
        "ajax_url": "\/bigslam\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_7c03c023c05cd645d4d7775680942356",
        "fragment_name": "wc_fragments_7c03c023c05cd645d4d7775680942356",
        "request_timeout": "5000"
    };</script>
<script type='text/javascript'
        id='bigslam-script-core-js-extra'>var bigslam_script_core = {"home_url": "https:\/\/demo.goodlayers.com\/bigslam\/"};</script>
<script type='text/javascript'
        src='https://maps.google.com/maps/api/js?key=AIzaSyD733KCcfQFGTp5SjZ5P9nvUKl6Ir4fYPo&#038;libraries=geometry%2Cplaces%2Cweather%2Cpanoramio%2Cdrawing&#038;language=en&#038;ver=5.8.1'
        id='wpgmp-google-api-js'></script>
<script type='text/javascript' id='wpgmp-google-map-main-js-extra'>var wpgmp_local = {
        "all_location": "All",
        "show_locations": "Show Locations",
        "sort_by": "Sort by",
        "wpgmp_not_working": "Not working...",
        "place_icon_url": "https:\/\/demo.goodlayers.com\/bigslam\/wp-content\/plugins\/wp-google-map-plugin\/assets\/images\/icons\/"
    };</script>
<script defer
        src="https://demo.goodlayers.com/bigslam/wp-content/cache/autoptimize/js/autoptimize_40ca191bb48597c72fc1f7189f7fe080.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"697114c80a262307","version":"2021.9.0","r":1,"token":"9247582a97cd45c0b9f0c15195583f49","si":100}'></script>

@endsection
