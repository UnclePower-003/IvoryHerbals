<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="{{ asset('js/wind.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#7CB80E",
                        darkText: "#333333",
                        lightText: "#858585",
                        lightBg: "#F7FBEA",
                        brandcream: '#FDfeFA',
                        /* The very light background color */
                        brandgreen: '#80bc23',
                        /* The specific green used for text */
                        brandbtn: '#8dc63f',
                        /* The button green */
                        brandbtnhover: '#7ab332',
                    },
                },
            },
        };
    </script>
    @stack('style')

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <header>@include('frontend.components.navbar')</header>

    <main>@yield('content')</main>

    <footer>@include('frontend.components.footer')</footer>
    @stack('script')
</body>

</html>
