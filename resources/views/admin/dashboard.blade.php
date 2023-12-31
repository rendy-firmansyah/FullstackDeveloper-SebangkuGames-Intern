<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">

  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset/apple-touch-icon.png')}}"/>
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset/favicon-32x32.png')}}"/>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset/favicon-16x16.png')}}"/>
  <link rel="mask-icon" href="{{asset('asset/safari-pinned-tab.svg')}}" color="#00b4b6"/>
  @vite('resources/css/app.css')

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>
    <div id="app">

      @include('admin.partials.header-navbar')

      @include('admin.partials.aside-sidebar')

      <section class="is-title-bar">
      <div class="flex md:flex-row items-center space-y-6 md:space-y-0">
          <ul>
          <li class="">Admin</li>
          <li class="">@yield('title')</li>
          </ul>
      </div>
      </section>

      @yield('content')

      @include('admin.partials.footer')

    </div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="{{asset('asset/js/main.min.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{asset('asset/js/chart.sample.min.js')}}"></script>

<script>
    function displayFileName() {
        const fileInput = document.getElementById('file-upload');
        const uploadedFileName = document.getElementById('uploaded-file-name');

        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            uploadedFileName.textContent = `File uploaded: ${fileName}`;
        } else {
            uploadedFileName.textContent = '';
        }
    }
</script>

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
