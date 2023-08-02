<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#ff0000"/>
        <link rel="apple-touch-icon" href="{{ asset('images/icons/icon-192x192.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script>
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.SERVICE_WORKER_PARAM = { scope: '/onesignal/' };
                OneSignal.SERVICE_WORKER_PATH = 'onesignal/OneSignalSDKWorker.js'
                OneSignal.SERVICE_WORKER_UPDATER_PATH = 'onesignal/OneSignalSDKWorker.js'
                OneSignal.init({
                    appId: "4f817285-f27a-4c60-8cec-e4f97d5b9503",
                    safari_web_id: "web.onesignal.auto.4ed01e00-f557-41b7-a4bd-c51172d553fd",
                    autoRegister: false,
                    allowLocalhostAsSecureOrigin: true,
                    autoResubscribe: true,
                    promptOptions: {},
                    notifyButton: {
                        enable: false,
                    },
                });
            });
        </script>
    </head>
    <script>
        window.popupPage = "{{Session::get('popupPage')}}";
    </script>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            {{--@include('components.video-join-modal')--}}
            <x-video-join :apiErrors="$apiErrors"/>
            @include('components.onesignal-modal')
            @include('components.install-modal')

            <!-- Page Heading -->
            @if (isset($header))
                {{ $header }}
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <add-to-home-screen></add-to-home-screen>
        <script type="module" src="{{ asset('js/AddToHomeScreen.js') }}"></script>

        <script src="{{ asset('/serviceworker.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/serviceworker.js").then(function (reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
    </body>
</html>
