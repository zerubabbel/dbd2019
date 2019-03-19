<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'LSAPP')}}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        
    <!--Links-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">  

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        

        @yield('content')
        @include('inc.messages')
    </div>
        @include('inc.footer')
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- <script src="js/app.js" charset="utf-8"></script> -->
<script src="{{ asset('js/functions.js') }}" defer></script>
<!-- <script src="js/functions.js"></script> -->
</html>


