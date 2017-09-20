<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.app.head')
</head>
<body>
@include('layouts.partials.app.top')

@yield('content')


@include('layouts.partials.app.scripts')
</body>
</html>