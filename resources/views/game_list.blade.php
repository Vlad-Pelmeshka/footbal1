@extends('layouts.app')

@section('title-block')Big Slam - Soccer 03 - Just another Big Slam Sites site
@endsection
@section('content')

<div class="bigslam-body-outer-wrapper ">
    <div class="bigslam-body-wrapper clearfix  bigslam-with-transparent-header bigslam-with-frame">

        @include('include.head_menu')

            <div class="bigslam-page-title-wrap  bigslam-style-medium bigslam-left-align">
            <div class="bigslam-header-transparent-substitute"></div>
            <div class="bigslam-page-title-overlay"></div>
            <div class="bigslam-page-title-container bigslam-container">
                <div class="bigslam-page-title-content bigslam-item-pdlr"><h1 class="bigslam-page-title">Game
                        Results</h1></div>
            </div>
        </div>
        <div class="bigslam-page-wrapper" id="bigslam-page-wrapper">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-section">
                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap "><h3
                                        class="gdlr-core-title-item-title gdlr-core-skin-title "
                                        style="font-size: 26px ;">Barcelona vs Liverpool<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <div class="sportspress sp-widget-align-none">
                                        <div class="sp-template sp-template-event-results">
                                            <h4 class="sp-table-caption">Results</h4>
                                            <div class="sp-table-wrapper">
                                                <table class="sp-event-results sp-data-table sp-scrollable-table">
                                                    <thead>
                                                    <th class="data-name">Club</th>
                                                    <th class="data-firsthalf">1st Half</th>
                                                    <th class="data-secondhalf">2nd Half</th>
                                                    <th class="data-goals">Goals</th>
                                                    </tr></thead>
                                                    <tbody>
                                                    <tr class="odd">
                                                        <td class="data-name">Barcelona</td>
                                                        <td class="data-firsthalf">1</td>
                                                        <td class="data-secondhalf">1</td>
                                                        <td class="data-goals">2</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="data-name">Liverpool</td>
                                                        <td class="data-firsthalf">1</td>
                                                        <td class="data-secondhalf">0</td>
                                                        <td class="data-goals">1</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap "><h3
                                        class="gdlr-core-title-item-title gdlr-core-skin-title "
                                        style="font-size: 26px ;">Juventus vs Man.Utd<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                style="padding-bottom: 10px ;">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <div class="sportspress sp-widget-align-none">
                                        <div class="sp-template sp-template-event-results">
                                            <h4 class="sp-table-caption">Results</h4>
                                            <div class="sp-table-wrapper">
                                                <table class="sp-event-results sp-data-table sp-scrollable-table">
                                                    <thead>
                                                    <th class="data-name">Club</th>
                                                    <th class="data-firsthalf">1st Half</th>
                                                    <th class="data-secondhalf">2nd Half</th>
                                                    <th class="data-goals">Goals</th>
                                                    </tr></thead>
                                                    <tbody>
                                                    <tr class="odd">
                                                        <td class="data-name">Juventus</td>
                                                        <td class="data-firsthalf">1</td>
                                                        <td class="data-secondhalf">0</td>
                                                        <td class="data-goals">1</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td class="data-name">Man.Utd</td>
                                                        <td class="data-firsthalf">0</td>
                                                        <td class="data-secondhalf">0</td>
                                                        <td class="data-goals">0</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('include.footer')

    </div>
</div>
<a href="#bigslam-top-anchor" class="bigslam-footer-back-to-top-button" id="bigslam-footer-back-to-top-button"><i
        class="fa fa-angle-up"></i></a>
<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<script type='text/javascript'
        src='//a6e8z9v6.stackpathcdn.com/bigslam/homepages/soccer03/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7'
        id='regenerator-runtime-js'></script>
<script type='text/javascript'
        src='//a6e8z9v6.stackpathcdn.com/bigslam/homepages/soccer03/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/demo.goodlayers.com\/bigslam\/homepages\/soccer03\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' id='gdlr-core-page-builder-js-extra'>
    /* <![CDATA[ */
    var gdlr_core_pbf = {
        "admin": "",
        "video": {"width": "640", "height": "360"},
        "ajax_url": "https:\/\/demo.goodlayers.com\/bigslam\/homepages\/soccer03\/wp-admin\/admin-ajax.php",
        "ilightbox_skin": "dark"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='sportspress-js-extra'>
    /* <![CDATA[ */
    var localized_strings = {
        "days": "days",
        "hrs": "hrs",
        "mins": "mins",
        "secs": "secs",
        "previous": "Previous",
        "next": "Next"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/bigslam\/homepages\/soccer03\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/homepages\/soccer03\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/demo.goodlayers.com\/bigslam\/homepages\/soccer03",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/bigslam\/homepages\/soccer03\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/homepages\/soccer03\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/bigslam\/homepages\/soccer03\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/bigslam\/homepages\/soccer03\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_c0315c87194de35db3d30f9124c8cf00",
        "fragment_name": "wc_fragments_c0315c87194de35db3d30f9124c8cf00",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='bigslam-script-core-js-extra'>
    /* <![CDATA[ */
    var bigslam_script_core = {"home_url": "https:\/\/demo.goodlayers.com\/bigslam\/homepages\/soccer03\/"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://maps.google.com/maps/api/js?libraries=geometry%2Cplaces%2Cweather%2Cpanoramio%2Cdrawing&#038;language=en&#038;ver=5.8.1'
        id='wpgmp-google-api-js'></script>
<script type='text/javascript' id='wpgmp-google-map-main-js-extra'>
    /* <![CDATA[ */
    var wpgmp_local = {
        "all_location": "All",
        "show_locations": "Show Locations",
        "sort_by": "Sort by",
        "wpgmp_not_working": "Not working...",
        "place_icon_url": "https:\/\/demo.goodlayers.com\/bigslam\/homepages\/soccer03\/wp-content\/plugins\/wp-google-map-plugin\/assets\/images\/icons\/"
    };
    /* ]]> */
</script>
<script defer
        src="//a6e8z9v6.stackpathcdn.com/bigslam/homepages/soccer03/wp-content/cache/autoptimize/4/js/autoptimize_e5613d19b9415466432f0c2565713cc9.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"69759082ed9c6d7a","version":"2021.9.0","r":1,"token":"9247582a97cd45c0b9f0c15195583f49","si":100}'></script>

@endsection
