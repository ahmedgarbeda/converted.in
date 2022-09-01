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
{{--    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">--}}

    <!-- Facebook -->
{{--    <meta property="og:url" content="http://themepixels.me/bracketplus">--}}
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

{{--    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">--}}
{{--    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">--}}
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <link rel="icon" href="{{asset('assets/admin/download.svg')}}">
    <title>Login</title>
{{--    @notifyCss--}}
    <!-- vendor css -->
    <link href="{{asset('assets/admin/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/bracket.css')}}" rel="stylesheet">

</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><img src="{{asset('assets/admin/download.svg')}}" width="100px"></div>
        <div class="tx-center mg-b-60">Login to your account</div>

        <form method="post" action="{{route('doLogin')}}">
            @csrf
{{--        <div class="form-group">--}}
{{--            <select class="form-control select2" data-placeholder="Choose Browser" name="type" required>--}}
{{--                <option disabled selected>اختر نوع الحساب</option>--}}
{{--                <option value="1">مسؤول نظام</option>--}}
{{--                <option value="2">عضو لجنة اسئلة</option>--}}
{{--                <option value="5">مدرسة</option>--}}
{{--            </select>--}}
{{--            @error('type')--}}
{{--            <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--        </div><!-- form-group -->--}}
         <div class="form-group">
            <input type="email" class="form-control" placeholder="email" name="email" required>
                @error('email')
                <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div><!-- form-group -->
        <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password" required>
            @error('password')
            <div style="background:transparent;margin:0;padding:0" class="alert alert-danger">{{ $message }}</div>
            @enderror
{{--            <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>--}}
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
        <br>
        <div class="c">
{{--            <a href="{{route('registerPage')}}">تسجيل جديد</a>--}}
        </div>
    </div><!-- login-wrapper -->

</div><!-- d-flex -->

<script src="{{asset('assets/admin/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<script src="{{asset('assets/admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@include('sweetalert::alert')
{{--@include('notify::messages')--}}
{{--@notifyJs--}}
</body>
</html>
