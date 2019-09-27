<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/vendor/paper-kit.css') }}" rel="stylesheet">

    <style>
        /* TODO move */
        body {
          font-family: "Montserrat", "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", sans-serif;
          font-weight: 500;
        }
        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6,
        p,
        .navbar,
        .brand,
        a,
        .td-name,
        td,
        button,
        input,
        select,
        textarea {
            font-family: "Montserrat", "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", sans-serif;
            font-weight: 500;
        }
        .main {
            padding-top: 80px;
        }
        .section {
            padding: 35px 0;
        }
    </style>
</head>
<body class="index-page sidebar-collapse">
    @component ('layouts.header') @endcomponent

    <div class="main">
        @component ('layouts.intro') @endcomponent

        <div class="section section-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                    <div class="col-md-4">
                        @component ('layouts.sidebar') @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component ('layouts.footer') @endcomponent

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/vendor/paper-kit.js') }}"></script>

    @if (false)
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    @endif

    <script type="text/javascript" defer>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
</body>
</html>
