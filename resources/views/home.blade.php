<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <link rel="icon" type="image/png" href="{{ asset('img/logo_coincoins_tab.png')}}" />
    <title>CoinCoins</title>
</head>
<body>
    @include('nav')
    @include('header')
    @include('content_discover')
    @include('transition')
    @include('content_img_shared')
    @include('content_comment')
    @include('content_phone')
    @include('footer')
</body>
</html>
