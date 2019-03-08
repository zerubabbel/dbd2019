<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">        
    </head>
    <body>
    	@include('inc.navbar')
   		<div class="container">
          @include('inc.messages')
       		@yield('content')
   		</div>
      @include('inc.footer')
          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
          <script>
              CKEDITOR.replace( 'article-ckeditor' );
          </script>
    </body>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/app.js" charset="utf-8"></script>
    <script src="js/functions.js"></script>
</html>
