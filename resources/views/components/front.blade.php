<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edumint - Edumint LMS & Online Courses Html Template</title>
    <link rel=icon href="/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ url('public/front/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/front/assets/css/responsive.css') }}">
    @stack('style')

</head>

<body>


    <x-front.layout.navbar />
    <!-- navbar end -->

    <!-- banner start -->
    <div class="content">
        {{ $slot }}
    </div>


    <!-- footer area start -->
    <x-front.layout.footer />
    <!-- footer area end -->

    <!-- back to top area start -->

    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="{{ url('public/front/assets/js/vendor.js') }}"></script>
    <!-- main js  -->
    <script src="{{ url('public/front/assets/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
