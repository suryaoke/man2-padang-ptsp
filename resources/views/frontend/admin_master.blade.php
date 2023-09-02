<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>PTSP - MAN 1 Kota Padang</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('backend/dist/images/man1.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/LineIcons.2.0.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwind.css') }}">



    <style>
        button,
        [role="button"] {
            cursor: pointer;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        btn:hover:not(:disabled) {
            --tw-border-opacity: 0.9;
            --tw-bg-opacity: 0.9;
        }

        .btn:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            --tw-ring-color: rgb(var(--color-primary) / var(--tw-ring-opacity));
            --tw-ring-opacity: 0.2;
        }

        .items-center {
            align-items: center;
        }

        .flex {
            display: flex;
        }

        .box {
            box-shadow: 0px 3px 20px #0000000b;
            position: relative;
            border-radius: 0.375rem;
            border-color: transparent;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .dropdown .dropdown-menu {
            transform: translate3d(-10000px, 0px, 0px) !important;
        }

        .dropdown-menu {
            z-index: 9999;
            inset: 0px auto auto 0px;
            transition: visibility 0s ease-in-out 0.2s, opacity 0.2s 0s;
            visibility: hidden;
            position: absolute;
            opacity: 0;
        }

        .dropdown-menu.show {
            transition: visibility 0s ease-in-out 0s, opacity 0.2s 0s;
            visibility: visible;
            opacity: 1;
        }

        .dropdown-menu.show>.dropdown-content {
            margin-top: 0.25rem;
        }

        .dropdown-menu.show>.dropdown-content .tab-content .tab-pane {
            visibility: visible;
        }

        .dropdown-menu .dropdown-content {
            transition: margin-top 0.2s;
            box-shadow: 0px 3px 10px #00000017;
            position: relative;
            margin-top: 1.25rem;
            width: 100%;
            border-radius: 0.375rem;
            padding: 0.5rem;
        }

        .dropdown-menu .dropdown-content .dropdown-header {
            padding: 0.5rem;
            font-weight: 500;
        }

        .dropdown-menu .dropdown-content .dropdown-divider {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .dropdown-menu .dropdown-content .dropdown-item {
            display: flex;
            align-items: center;
            border-radius: 0.375rem;
            padding: 0.5rem;
            transition-property: color, background-color, border-color, fill, stroke,
                opacity, box-shadow, transform, filter, -webkit-text-decoration-color,
                -webkit-backdrop-filter;
            transition-property: color, background-color, border-color,
                text-decoration-color, fill, stroke, opacity, box-shadow, transform,
                filter, backdrop-filter;
            transition-property: color, background-color, border-color,
                text-decoration-color, fill, stroke, opacity, box-shadow, transform,
                filter, backdrop-filter, -webkit-text-decoration-color,
                -webkit-backdrop-filter;
            transition-duration: 300ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dropdown-menu .dropdown-content .dropdown-footer {
            display: flex;
            padding: 0.25rem;
        }

        .dropdown-menu .dropdown-content .tab-content .tab-pane {
            visibility: hidden;
        }

        .dropdown-content {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .dark .dropdown-content {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--color-darkmode-600) / var(--tw-bg-opacity));
        }

        .dropdown-divider {
            border-color: rgb(var(--color-slate-200) / 0.6);
        }

        .dark .dropdown-divider {
            --tw-border-opacity: 1;
            border-color: rgb(var(--color-darkmode-400) / var(--tw-border-opacity));
        }

        .dropdown-item:hover {
            background-color: rgb(var(--color-slate-200) / 0.6);
        }

        .dark .dropdown-item {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--color-darkmode-600) / var(--tw-bg-opacity));
        }

        .dark .dropdown-item:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--color-darkmode-400) / var(--tw-bg-opacity));
        }
    </style>

    <style>
        .modal {
            margin-top: -10000px;
            margin-left: -10000px;
            background: #000000a6;
            transition: visibility 0s linear 0.2s, opacity 0.2s 0s;
            visibility: hidden;
            position: fixed;
            left: 0px;
            top: 0px;
            height: 100vh;
            width: 100vw;
            opacity: 0;
        }

        .modal.modal-overlap {
            background: #000000a6;
        }

        .modal.modal-static .modal-content {
            -webkit-animation: modal-static-backdrop 0.3s infinite;
            animation: modal-static-backdrop 0.3s infinite;
            -webkit-animation-direction: alternate;
            animation-direction: alternate;
        }

        .modal.show {
            transition: visibility 0s ease-in-out 0s, opacity 0.4s ease-in-out 0s;
            visibility: visible;
            opacity: 1;
        }

        .modal.show>.modal-dialog {
            margin-top: 4rem;
        }

        .modal .modal-dialog {
            width: 90%;
            transition: margin-top 0.4s;
            margin-left: auto;
            margin-right: auto;
            margin-top: -4rem;
            margin-bottom: 4rem;
        }

        @media (min-width: 640px) {
            .modal .modal-dialog {
                width: 460px
            }

            .modal .modal-dialog.modal-sm {
                width: 300px;
            }

            .modal .modal-dialog.modal-lg {
                width: 600px;
            }

            .modal .modal-dialog.modal-xl {
                width: 600px;
            }
        }

        @media (min-width: 1024px) {
            .modal .modal-dialog.modal-xl {
                width: 900px;
            }
        }

        .modal .modal-dialog .modal-content {
            position: relative;
        }

        .modal .modal-dialog .modal-content>[data-tw-dismiss="modal"] {
            position: absolute;
            right: 0px;
            top: 0px;
            margin-top: 0.75rem;
            margin-right: 0.75rem;
        }

        .modal.modal-slide-over {
            overflow-x: hidden;
        }

        .modal.modal-slide-over.modal-static .modal-content {
            -webkit-animation: none;
            animation: none;
        }

        .modal.modal-slide-over.show {
            transition: visibility 0s ease-in-out 0s, opacity 0.6s ease-in-out 0s;
            visibility: visible;
            opacity: 1;
        }

        .modal.modal-slide-over.show>.modal-dialog {
            margin-right: 0px;
        }

        .modal.modal-slide-over .modal-dialog {
            margin-right: -100%;
            transition: margin-right 0.6s;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .modal.modal-slide-over .modal-dialog .modal-content {
            min-height: 100vh;
            border-radius: 0px;
        }

        .modal.modal-slide-over .modal-dialog .modal-content>[data-tw-dismiss="modal"] {
            position: absolute;
            top: 0px;
            left: 0px;
            right: auto;
            margin-top: 1rem;
            margin-left: -3rem;
        }

        .modal-content {
            position: relative;
            width: 100%;
            border-radius: 0.375rem;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .dark .modal-content {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--color-darkmode-600) / var(--tw-bg-opacity));
        }

        .modal-header {
            display: flex;
            align-items: center;
            border-bottom-width: 1px;
            border-color: rgb(var(--color-slate-200) / 0.6);
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .dark .modal-header {
            --tw-border-opacity: 1;
            border-color: rgb(var(--color-darkmode-400) / var(--tw-border-opacity));
        }

        .modal-body {
            padding: 1.25rem;
        }

        .modal-footer {
            border-top-width: 1px;
            border-color: rgb(var(--color-slate-200) / 0.6);
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            text-align: right;
        }

        .dark .modal-footer {
            --tw-border-opacity: 1;
            border-color: rgb(var(--color-darkmode-400) / var(--tw-border-opacity));
        }
    </style>
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="hidden preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    </div> <!-- row -->



    @include('frontend.body.header')



    <!--====== HEADER PART ENDS ======-->

    @yield('frontend')
    <!--====== FOOTER PART START ======-->




    @include('frontend.body.footer')


    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <script src="  {{ asset('backend/dist/js/app.js') }} "></script>


    <!--====== Jquery js ======-->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.5.1-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrolling-nav.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!--====== Particles js ======-->
    <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


</body>

</html>
