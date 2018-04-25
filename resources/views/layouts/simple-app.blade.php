<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

{{--        <link href="{{ mix('/css/app.css') }}" ref="stylesheet" type="text/css" />--}}
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        {{--<meta name="Keywords" content="W NameCard" />--}}
        {{--<meta name="Description" content="W NameCard" />--}}

        <title>{{ config('app.name', 'won') }}</title>
    </head>
    <body>
        @include('layouts.partial.header')
        @yield('app-content')
        @include('layouts.partial.footer')

        <script src="{{ mix('/js/app.js') }}"></script>
        @yield('app-script')

        <script>
            console.log('SIMPLE-APP');
        </script>
    </body>
</html>