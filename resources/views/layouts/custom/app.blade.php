<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    {{-- SEO --}}
    <title>MRM</title>
    <meta name="author" content="MRM" />
    <link rel="shortcut icon" href="{{ asset('gambar/profile-icon-9.png') }}" type="image/x-icon">
    {{-- <!-- Google tag (gtag.js) --> --}}
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLR8RCP3X0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-VLR8RCP3X0');
    </script> --}}
    {{-- ENDSEO --}}

    {{-- <script src="https://cdn.tailwindcss.com/3.3.5"></script> --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    {{-- <script src="{{ asset('/cdn/tailwind3.3.5.js') }}"></script> 
    <link href='{{ asset('/cdn/boxicons.min.css') }}' rel='stylesheet'> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @filamentStyles

    {{$stylehalaman}}
</head>

<body style="background: #edf2f7;">
    <!-- page -->
    <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="{ profileOpen: false, asideOpen: true }">
        <!-- header page -->
        @include('layouts.custom.header')

        <div class="flex pt-12 h-screen">
            <!-- aside -->
            @include('layouts.custom.sidebar')

            <!-- main content page -->
            <div class="w-full md:flex-auto overflow-scroll scroll-m-2" id="main_div">
                {{$slot}}
            </div>
        </div>
    </main>

    <!-- Alpine -->
    {{-- <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script> --}}
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    {{-- sweetalert --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    @livewire('notifications')
    @filamentScripts

    <script>
        let pressedKeys = [];
        document.addEventListener('keydown', function(event) {
            pressedKeys.push(event.key);
            if (pressedKeys.includes('`') && pressedKeys.includes('1') ) {
                window.location.href = '{{ route('landing.home') }}';
            }
        });
        document.addEventListener('keyup', function(event) {
            let keyIndex = pressedKeys.indexOf(event.key);
            if (keyIndex > -1) {
                pressedKeys.splice(keyIndex, 1);
            }
        });
    </script>

    {{$scripthalaman}}

</body>

</html>