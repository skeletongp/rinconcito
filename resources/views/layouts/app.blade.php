<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{Auth::user()?(Auth::user()->dark=='Y'?'dark':''):''}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HolyHope') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ mix('css/styles.css') }}" rel="stylesheet">
    <link href="{{ mix('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="{{mix('js/main.js')}}" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="text-black dark:text-white">
    @yield('content')
    <script>
        var sidebar = $('#sidebar');

        function sidebarToggle() {
            sidebar.toggle('', false)
        }

        var profileDropdown = $('#ProfileDropDown');

        function profileToggle() {
            profileDropdown.toggle(' ', false)
        }
    </script>
</body>

</html>
