<!DOCTYPE html>
<html lang="fa" dir="rtl" class="rtl">
<head>
    @include('home.layouts.head')
</head>

<body>

<!-- Quick view -->
<main class="main">
    @yield('content')
</main>

<!-- Preloader Start -->
<!-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="assets/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div> -->
<!-- Vendor JS-->
{{--@include('home.layouts.footer')--}}
@include('home.layouts.script')
</body>
</html>
