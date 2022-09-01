<!DOCTYPE html>

    <html lang="en" dir="ltr" class="ltr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
      <link rel="icon" href="{{asset('assets/admin/download.svg')}}">

    <title>Converted.in</title>
{{--      @notifyCss--}}
    <!-- vendor css -->
    @include('layouts.css')
      @yield('css')

  </head>

  <body>
    <!-- ########## START: LEFT PANEL ########## -->
    @can('show statistics')
    <div class="br-logo"><a href="{{url('/')}}"><span>Converted.in</span></a></div>
    @else
        <div class="br-logo"><span>Converted.in</span></div>
    @endcan
    @include('layouts.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">




      @yield('content')<!-- br-pagebody -->


        @include('layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('layouts.js')
    @include('sweetalert::alert')
  @yield('js')

  </body>
</html>
