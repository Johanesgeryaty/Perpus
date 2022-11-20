<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from eyecix.com/html/ereaders/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 02:53:40 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Wadah Baca</title>

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" />
    <link href="{{asset('')}}" rel="stylesheet" />
    <link href="{{asset('css/slick-slider.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/color.css')}}" rel="stylesheet" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="ereaders-main-wrapper">
        {{-- header --}}
        @include('partials.header')

        {{-- end header --}}
        <div class="container">
            @yield('content')
        </div>
        {{-- footer --}}
        @include('partials.footer')
        {{-- end footer --}}

        <div class="clearfix"></div>
    </div>

    <script type="text/javascript" src="{{asset('script/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/progressbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/circle-chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/numscroller.js')}}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs_m2ywm-bE8z9YM_WmtPaIQNIosN4Dxo&amp;callback=initMap">
    </script>
    <script type="text/javascript" src="{{asset('script/functions.js')}}"></script>
</body>

<!-- Mirrored from eyecix.com/html/ereaders/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 02:54:57 GMT -->

</html>
