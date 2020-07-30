<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo_coincoins_tab.png')}}" />
    <title>CoinCoins</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="not-found" style="background-image: url('{{ asset('/img/404/fond404.jpg')}}');">
    <h1>{{ __('messages.not_found_title') }}</h1>
    <p>{{ __('messages.not_found_text1') }}</p>
    <p>{{ __('messages.not_found_text2') }}</p>
    <br/>
    <p>{{ __('messages.not_found_return_home') }}<a href="{{route('home')}}">{{route('home')}}</a></p>
</div>   
</body>
</html>
