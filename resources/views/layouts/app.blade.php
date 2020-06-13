<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(View::hasSection('title'))
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endif

    <meta name="description" content="@yield('description', config('app.description'))">

    <script src="{{ asset('js/app.js') }}?hash={{ md5_file(public_path('js/app.js')) }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="{{ asset('css/app.css') }}?hash={{ md5_file(public_path('css/app.css')) }}" rel="stylesheet">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title', config('app.name'))" />
    <meta property="og:description" content="@yield('description', config('app.description'))" />
    <meta property="og:image" content="@yield('image', asset('img/sharing-image.png'))" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@SendAnEmojigram">
    <meta name="twitter:creator" content="@SendAnEmojigram">
    <meta name="twitter:title" content="@yield('title', config('app.name'))">
    <meta name="twitter:description" content="@yield('description', config('app.description'))">
    <meta name="twitter:image" content="@yield('image', asset('img/sharing-image.png'))">


    @if(config('services.google_analytics.id'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ config('services.google_analytics.id') }}');
        </script>
    @endif
    @if(config('services.facebook.id'))
    <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ config('services.facebook.id') }}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id={{ config('services.facebook.id') }}&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    @endif

    @yield('head')

</head>
<body>
<main id="app">
    @yield('content')
</main>
</body>
</html>
