<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | {{config('constants.APP_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}">
        @include('layouts.head')
  </head>
    @yield('body')

    @yield('content')

    @include('layouts.footer-script')
    </body>
</html>
