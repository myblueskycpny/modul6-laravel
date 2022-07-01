<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('front/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Modul 3</title>
</head>

<body>
    @section('header')
    @include('layouts.front.inc.header')
    @show

    <!-- Container Berita -->
    @yield('content')
    <!-- Berita 5 End-->
    <!-- Container Berita End -->

    @section('footer')
    @include('layouts.front.inc.footer')
    @show
</body>

</html>