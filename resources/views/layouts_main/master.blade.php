<!DOCTYPE html>
<html lang="zh_TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <meta name="description"
        content="玥玥越式養生洗髮位於台南市中心，鄰近新光三越台南西門新天地、藍曬圖文創園區和南英商工，是當地人推薦的台南越式洗頭首選！提供90至120分鐘的極致放鬆體驗，讓您徹底享受深層舒壓。專業的越式洗頭、修指甲、臉部護理、臉部按摩、玉石撥筋到全身按摩，每一項服務都能讓您身心放鬆。隨時歡迎預約，感受台南在地正宗的越式洗髮、越式按摩一條龍服務。" />
    <meta name="keywords" content="台南越式洗髮,台南越式洗頭,台南深夜洗頭,台南頭皮按摩,台南舒壓,台南按摩洗髮,越式洗髮推薦,越式洗頭推薦" />
    <meta property="og:locale" content="zh_TW" />
    <meta name="author" content="紀孟勳 Bryantchi.work@gmail.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="玥玥越式養生洗髮｜台南總店・正宗越式洗髮店" />
    <meta property="og:description"
        content="玥玥越式養生洗髮位於台南市中心，鄰近新光三越台南西門新天地、藍曬圖文創園區和南英商工，是當地人推薦的台南越式洗頭首選！提供90至120分鐘的極致放鬆體驗，讓您徹底享受深層舒壓。專業的越式洗頭、修指甲、臉部護理、臉部按摩、玉石撥筋到全身按摩，每一項服務都能讓您身心放鬆。隨時歡迎預約，感受台南在地正宗的越式洗髮、越式按摩一條龍服務。" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <title>玥玥越式養生洗髮｜台南總店・正宗越式洗髮店</title>
    <meta name="title" content="玥玥越式養生洗髮｜台南總店・正宗越式洗髮店" />
    <meta name="google-site-verification" content="" />
    <link rel="canonical" href="" /> --}}

    <meta name="description" content="{{ $seoInfo->description ?? '' }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords ?? '' }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta name="author" content="紀孟勳 Bryantchi.work@gmail.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title ?? '' }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription ?? '' }}" />
    <meta property="og:image" content="{{ asset('assets/images/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name ?? '玥玥越式養生洗髮｜台南總店・正宗越式洗髮店' }}" />
    <title>{{ $seoInfo->title ?? '玥玥越式養生洗髮｜台南總店・正宗越式洗髮店' }}</title>
    <meta name="title" content="{{ $seoInfo->title ?? '玥玥越式養生洗髮｜台南總店・正宗越式洗髮店' }}" />
    <link rel="canonical" href="{{ url()->full() }}" />
    <meta name="google-site-verification" content="" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?v={{ time() }}">

    @stack('third_party_stylesheets')
    @stack('page_css')

</head>

<body>

    <div class="site-wrap">

        @include('layouts_main.header')
        @include('layouts_main.hero')

        @yield('content')

        @include('layouts_main.footer')

    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- <script src="js/typed.js"></script>
  <script>
      var typed = new Typed('.typed-words', {
          strings: ["pain", " stress", " fatigue"],
          typeSpeed: 80,
          backSpeed: 80,
          backDelay: 4000,
          startDelay: 1000,
          loop: true,
          showCursor: true
      });
  </script> -->

    <script src="{{ asset('assets/js/main.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}?v={{ time() }}"></script>


    {{-- <script>
        $(function() {


        })
    </script> --}}

    @stack('third_party_scripts')
    @stack('page_scripts')

</body>

</html>
