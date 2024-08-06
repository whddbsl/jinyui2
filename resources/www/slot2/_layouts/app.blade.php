<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    @vite('resources/css/app.scss')
    @vite('resources/css/test/main.scss')
    <!-- @vite('resources/css2/scss/app-saas.scss') -->
    <!-- <link href="/assets/css/docs.css?1" rel="stylesheet" />
    <link href="/assets/css/highlight.css?a1" rel="stylesheet" /> -->

    <style>
    .feature {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 3rem;
        width: 3rem;
        font-size: 1.5rem;
    }
    </style>

    @stack('css')

</head>

<body>
    <div>
        {{$slot}}
    </div>

    {{-- HotKey 단축키 이벤트 --}}
    @livewire('HotKeyEvent')

    <!-- Core theme JS-->
    {{-- <script src="js/scripts.js"></script> --}}
    @stack('script')

</body>

</html>