<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('home.layouts.head')
</head>

<body>
<!-- header-------------------------------->
<header class="header-main">
    @include('home.layouts.navbar')
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">جستجو</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header-search text-right">
                    <div class="header-search-box">
                        <form action="#" class="form-search">
                            <input type="search" class="header-search-input" name="search-input"
                                   placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <div class="action-btns">
                                <button class="btn btn-search" type="submit">
                                    <img src="{{ asset('static/home/assets/images/search.png') }}" alt="search">
                                </button>
                                <div class="search-filter">
                                    <div class="form-ui">
                                        <div class="custom-select-ui">
                                            <select class="right">
                                                <option>همه دسته ها</option>
                                                <option>کالای دیجیتال</option>
                                                <option>آرایشی بهداشتی</option>
                                                <option>ابزاری اداری</option>
                                                <option>مد پوشاک</option>
                                                <option>خانه آشپز خانه</option>
                                                <option>لوازم تحریر و هنر</option>
                                                <option>کودک و نوزاد</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="search-result">
                            <ul class="search-result-list mb-0">
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        کالای دیجیتال
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        آرایشی و بهداشتی
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        گوشی موبایل
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        تبلت
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        لپ تاپ
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        دوربین
                                        <button class="btn btn-light btn-continue-search" type="submit">
                                            <i class="fa fa-angle-left"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                            <div class="localSearchSimple"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-categories-overlay"></div>
<div class="overlay-search-box"></div>
<!-- header-------------------------------->

<!-- sidebar------------------------->
{{--@include('home.layouts.sidebar')--}}
<!-- sidebar-------------------------------->

<!-- content-site--------------------------->
<div class="container-main">
    @yield('content')
{{--    <aside class="col-lg-9 col-md-9 col-xs-12 order-2 order-lg-2 pl">--}}
{{--        <!-- slider-main--------------------------->--}}
{{--        <div class="slider-main-container d-block">--}}
{{--            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--                <ol class="carousel-indicators carousel-indicators-ul">--}}
{{--                    <li class="carousel-indicators-item active" data-target="#carouselExampleIndicators"--}}
{{--                        data-slide-to="0" class="active">--}}
{{--                        <span>موبایل</span>--}}
{{--                    </li>--}}
{{--                    <li class="carousel-indicators-item" data-target="#carouselExampleIndicators" data-slide-to="1">--}}
{{--                        <span>لباس مردانه</span>--}}
{{--                    </li>--}}
{{--                    <li class="carousel-indicators-item" data-target="#carouselExampleIndicators" data-slide-to="2">--}}
{{--                        <span>پاور پانک</span>--}}
{{--                    </li>--}}
{{--                </ol>--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active">--}}
{{--                        <img src="{{ asset('static/home/assets/images/slider-main/sm-1.jpg') }}" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/slider-main/sm-4.jpg" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/slider-main/sm-5.jpg" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--                    <span class="fa fa-angle-left" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--                    <span class="fa fa-angle-right" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- slider-amazing------------------------->--}}
{{--        <div class="slider-widget-products slider-content-tabs slider-amazing-product pr-0 pl-0">--}}
{{--            <div class="widget widget-product card slider-content-tabs pr-0 pl-0">--}}
{{--                <header class="card-header">--}}
{{--                    <span class="title-one">محصولات شگفت انگیز</span>--}}
{{--                    <h3 class="card-title"></h3>--}}
{{--                </header>--}}
{{--                <div class="product-carousel product-amazing owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                    <div class="owl-stage-outer">--}}
{{--                        <div class="owl-stage"--}}
{{--                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1162px;">--}}
{{--                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-1.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            لپ تاپ ۱۵ اینچی ایسوس مدل VivoBook Flip TP510UQ – C--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>12,000,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>11,180,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="countdown-timer">--}}
{{--                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                             data-labels="{&quot;label-day&quot;: &quot;روز&quot;, &quot;label-hour&quot;: &quot;ساعت&quot;, &quot;label-minute&quot;: &quot;دقیقه&quot;, &quot;label-second&quot;: &quot;ثانیه&quot;}">--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">155</div>--}}
{{--                                                <div class="countdown-label">روز</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">10</div>--}}
{{--                                                <div class="countdown-label">ساعت</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">16</div>--}}
{{--                                                <div class="countdown-label">دقیقه</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">01</div>--}}
{{--                                                <div class="countdown-label">ثانیه</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-2.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            یخچال و فریزر سامسونگ مدل HM34--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>9,000,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>8,500,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="countdown-timer">--}}
{{--                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                             data-labels="{&quot;label-day&quot;: &quot;روز&quot;, &quot;label-hour&quot;: &quot;ساعت&quot;, &quot;label-minute&quot;: &quot;دقیقه&quot;, &quot;label-second&quot;: &quot;ثانیه&quot;}">--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">155</div>--}}
{{--                                                <div class="countdown-label">روز</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">10</div>--}}
{{--                                                <div class="countdown-label">ساعت</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">16</div>--}}
{{--                                                <div class="countdown-label">دقیقه</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">01</div>--}}
{{--                                                <div class="countdown-label">ثانیه</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-3.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            کامپیوتر همه کاره 21.5 اینچی ایسوس مدل AIO V222UAK-B--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>12,000,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>11,180,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="countdown-timer">--}}
{{--                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                             data-labels="{&quot;label-day&quot;: &quot;روز&quot;, &quot;label-hour&quot;: &quot;ساعت&quot;, &quot;label-minute&quot;: &quot;دقیقه&quot;, &quot;label-second&quot;: &quot;ثانیه&quot;}">--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">155</div>--}}
{{--                                                <div class="countdown-label">روز</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">10</div>--}}
{{--                                                <div class="countdown-label">ساعت</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">16</div>--}}
{{--                                                <div class="countdown-label">دقیقه</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">01</div>--}}
{{--                                                <div class="countdown-label">ثانیه</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item tab-item active" style="width: 222.313px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-4.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            شارژر بی سیم مدل EP-NG930--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>8,000,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>6,500,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="countdown-timer">--}}
{{--                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                             data-labels="{&quot;label-day&quot;: &quot;روز&quot;, &quot;label-hour&quot;: &quot;ساعت&quot;, &quot;label-minute&quot;: &quot;دقیقه&quot;, &quot;label-second&quot;: &quot;ثانیه&quot;}">--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">155</div>--}}
{{--                                                <div class="countdown-label">روز</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">10</div>--}}
{{--                                                <div class="countdown-label">ساعت</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">16</div>--}}
{{--                                                <div class="countdown-label">دقیقه</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">01</div>--}}
{{--                                                <div class="countdown-label">ثانیه</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item tab-item" style="width: 222.313px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-5.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تلویزیون ال ای دی هوشمند سامسونگ مدل 55NU7900 سایز 55 اینچ--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>14,500,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>13,500,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="countdown-timer">--}}
{{--                                        <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                             data-labels="{&quot;label-day&quot;: &quot;روز&quot;, &quot;label-hour&quot;: &quot;ساعت&quot;, &quot;label-minute&quot;: &quot;دقیقه&quot;, &quot;label-second&quot;: &quot;ثانیه&quot;}">--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">155</div>--}}
{{--                                                <div class="countdown-label">روز</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">10</div>--}}
{{--                                                <div class="countdown-label">ساعت</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">16</div>--}}
{{--                                                <div class="countdown-label">دقیقه</div>--}}
{{--                                            </div>--}}
{{--                                            <div class="countdown-item">--}}
{{--                                                <div class="countdown-value">01</div>--}}
{{--                                                <div class="countdown-label">ثانیه</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="content-widget-amazing mt-4 cwa-p">--}}
{{--            <section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">--}}
{{--                <div class="row m-0">--}}
{{--                    <ol class="carousel-indicators carousel-indicators-order col-lg-3">--}}
{{--                        <li class="carousel-item-li active" data-target="#amazing-slider" data-slide-to="0">--}}
{{--                        </li>--}}
{{--                        <li class="carousel-item-li" data-target="#amazing-slider" data-slide-to="1" class="">--}}
{{--                        </li>--}}
{{--                        <li class="carousel-item-li" data-target="#amazing-slider" data-slide-to="2" class="">--}}
{{--                        </li>--}}
{{--                        <li class="carousel-item-li" data-target="#amazing-slider" data-slide-to="3" class="">--}}
{{--                        </li>--}}
{{--                        <li class="carousel-item-li" data-target="#amazing-slider" data-slide-to="4" class="">--}}
{{--                        </li>--}}
{{--                    </ol>--}}
{{--                    <div class="carousel-inner p-0 col-12 col-lg-11">--}}
{{--                        <div class="carousel-item active">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="right-col col-5 d-flex align-items-center">--}}
{{--                                    <a class="w-100 text-center img-link-amazing" href="#">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-1.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="carousel-content">--}}
{{--                                        <div class="discount">--}}
{{--                                                <span class="discount-percent">6.2--}}
{{--                                                    <i class="fa fa-percent"></i>--}}
{{--                                                </span>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="product-title">--}}
{{--                                            <a href="#"> لپ تاپ ۱۵ اینچی ایسوس مدل VivoBook Flip TP510UQ – C </a>--}}
{{--                                        </h2>--}}
{{--                                        <div class="price text-center">--}}
{{--                                            <del><span>12,000,000<span>تومان</span></span></del>--}}
{{--                                            <ins><span>11,180,000<span>تومان</span></span></ins>--}}
{{--                                        </div>--}}
{{--                                        <ul class="list-group">--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">ظرفیت حافظه داخلی: </span>--}}
{{--                                                <span class="text">یک ترابایت </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">ظرفیت حافظه رم: </span>--}}
{{--                                                <span class="text">8 گیگابایت </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">سری پردازنده: </span>--}}
{{--                                                <span class="text">Core i5 </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">دقت صفحه نمایش: </span>--}}
{{--                                                <span class="text"> 1080 × 1920 </span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="countdown-timer">--}}
{{--                                            <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                                 data-labels='{"label-day": "روز", "label-hour": "ساعت", "label-minute": "دقیقه", "label-second": "ثانیه"}'>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="right-col col-5 d-flex align-items-center">--}}
{{--                                    <a class="w-100 text-center img-link-amazing" href="#">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-2.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="carousel-content">--}}
{{--                                        <div class="discount">--}}
{{--                                                <span class="discount-percent">3.2--}}
{{--                                                    <i class="fa fa-percent"></i>--}}
{{--                                                </span>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="product-title">--}}
{{--                                            <a href="#"> یخچال و فریزر سامسونگ مدل HM34 </a>--}}
{{--                                        </h2>--}}
{{--                                        <div class="price text-center">--}}
{{--                                            <del><span>9,000,000<span>تومان</span></span></del>--}}
{{--                                            <ins><span>8,500,000<span>تومان</span></span></ins>--}}
{{--                                        </div>--}}
{{--                                        <ul class="list-group">--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">قفل کودک: </span>--}}
{{--                                                <span class="text">دارد</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">اخطار باز ماندن درب: </span>--}}
{{--                                                <span class="text">بله</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">آبسردکن: </span>--}}
{{--                                                <span class="text">دارد</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="countdown-timer">--}}
{{--                                            <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                                 data-labels='{"label-day": "روز", "label-hour": "ساعت", "label-minute": "دقیقه", "label-second": "ثانیه"}'>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="right-col col-5 d-flex align-items-center">--}}
{{--                                    <a class="w-100 text-center img-link-amazing" href="#">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-3.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="carousel-content">--}}
{{--                                        <div class="discount">--}}
{{--                                                <span class="discount-percent">2.2--}}
{{--                                                    <i class="fa fa-percent"></i>--}}
{{--                                                </span>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="product-title">--}}
{{--                                            <a href="#">کامپیوتر همه کاره 21.5 اینچی ایسوس مدل AIO V222UAK-B</a>--}}
{{--                                        </h2>--}}
{{--                                        <div class="price text-center">--}}
{{--                                            <del><span>12,000,000<span>تومان</span></span></del>--}}
{{--                                            <ins><span>11,180,000<span>تومان</span></span></ins>--}}
{{--                                        </div>--}}
{{--                                        <ul class="list-group">--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">ظرفیت حافظه داخلی: </span>--}}
{{--                                                <span class="text">500 گیگابایت</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">ظرفیت حافظه رم: </span>--}}
{{--                                                <span class="text">4 گیگابایت </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">سری پردازنده: </span>--}}
{{--                                                <span class="text">Pentium </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">دقت صفحه نمایش: </span>--}}
{{--                                                <span class="text"> 1080 × 1920 </span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="countdown-timer">--}}
{{--                                            <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                                 data-labels='{"label-day": "روز", "label-hour": "ساعت", "label-minute": "دقیقه", "label-second": "ثانیه"}'>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="right-col col-5 d-flex align-items-center">--}}
{{--                                    <a class="w-100 text-center img-link-amazing" href="#">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-4.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="carousel-content">--}}
{{--                                        <div class="discount">--}}
{{--                                                <span class="discount-percent">4.2--}}
{{--                                                    <i class="fa fa-percent"></i>--}}
{{--                                                </span>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="product-title">--}}
{{--                                            <a href="#">--}}
{{--                                                شارژر بی سیم مدل EP-NG930--}}
{{--                                            </a>--}}
{{--                                        </h2>--}}
{{--                                        <div class="price text-center">--}}
{{--                                            <del><span>8,000,000<span>تومان</span></span></del>--}}
{{--                                            <ins><span>6,500,000<span>تومان</span></span></ins>--}}
{{--                                        </div>--}}
{{--                                        <ul class="list-group">--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">شدت جریان خروجی: </span>--}}
{{--                                                <span class="text"> 2.0 آمپر مخصوص تبلت و موبایل </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">تعداد درگاه خروجی: </span>--}}
{{--                                                <span class="text">1</span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="countdown-timer">--}}
{{--                                            <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                                 data-labels='{"label-day": "روز", "label-hour": "ساعت", "label-minute": "دقیقه", "label-second": "ثانیه"}'>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item  finished">--}}
{{--                            <div class="row m-0">--}}
{{--                                <div class="right-col col-5 d-flex align-items-center">--}}
{{--                                    <a class="w-100 text-center img-link-amazing" href="#">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-amazing/as-5.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-7">--}}
{{--                                    <div class="carousel-content">--}}
{{--                                        <div class="discount">--}}
{{--                                                <span class="discount-percent">5.2--}}
{{--                                                    <i class="fa fa-percent"></i>--}}
{{--                                                </span>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="product-title">--}}
{{--                                            <a href="#">--}}
{{--                                                تلویزیون ال ای دی هوشمند سامسونگ مدل 55NU7900 سایز 55 اینچ--}}
{{--                                            </a>--}}
{{--                                        </h2>--}}
{{--                                        <div class="price text-center">--}}
{{--                                            <del><span>14,500,000<span>تومان</span></span></del>--}}
{{--                                            <ins><span>13,500,000<span>تومان</span></span></ins>--}}
{{--                                        </div>--}}
{{--                                        <ul class="list-group">--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">درگاه USB: </span>--}}
{{--                                                <span class="text">دارد </span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">کیفیت تصویر: </span>--}}
{{--                                                <span class="text">Ultra HD - 4K</span>--}}
{{--                                            </li>--}}
{{--                                            <li class="list-group-item">--}}
{{--                                                <i class="fa fa-check"></i>--}}
{{--                                                <span class="title">رابط هوشمند: </span>--}}
{{--                                                <span class="text">دارد </span>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="countdown-timer">--}}
{{--                                            <div class="countdown h4" data-date-time="10/10/2025 12:00"--}}
{{--                                                 data-labels='{"label-day": "روز", "label-hour": "ساعت", "label-minute": "دقیقه", "label-second": "ثانیه"}'>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--        <!-- adplacement--------------------------->--}}
{{--        <div class="adplacement-container-row">--}}
{{--            <div class="col-6 col-lg-3 pr">--}}
{{--                <a href="#" class="adplacement-item mb-4">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-5.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-lg-3 pr">--}}
{{--                <a href="#" class="adplacement-item">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-6.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-lg-3 pr">--}}
{{--                <a href="#" class="adplacement-item">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-7.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-lg-3 pr">--}}
{{--                <a href="#" class="adplacement-item">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-4.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-lg-6 pr">--}}
{{--                <a href="#" class="adplacement-item">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-9.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-6 col-lg-6 pr">--}}
{{--                <a href="#" class="adplacement-item">--}}
{{--                    <div class="adplacement-sponsored_box">--}}
{{--                        <img src="{{ asset('static/home/assets/images') }}/adplacement/a-11.jpg">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- adplacement--------------------------->--}}

{{--        <!-- tabs---------------------------------->--}}
{{--        <div class="tab-count-product">--}}
{{--            <section class="section-header-tab">--}}
{{--                <div class="tab-scroll">--}}
{{--                    <ul class="tabs nav" id="myTab" role="tablist">--}}
{{--                        <li class="tab-item nav-item">--}}
{{--                            <a class="tab-link active" id="camera-tab" data-toggle="tab" href="#camera" role="tab"--}}
{{--                               aria-controls="camera" aria-selected="true">دوربین</a>--}}
{{--                        </li>--}}
{{--                        <li class="tab-item nav-item">--}}
{{--                            <a class="tab-link" id="cellphone-tab" data-toggle="tab" href="#cellphone" role="tab"--}}
{{--                               aria-controls="cellphone" aria-selected="false">گوشی موبایل</a>--}}
{{--                        </li>--}}
{{--                        <li class="tab-item nav-item">--}}
{{--                            <a class="tab-link" id="Home-Appliances-tab" data-toggle="tab" href="#Home-Appliances"--}}
{{--                               role="tab" aria-controls="Home-Appliances" aria-selected="false">لوازم خانگی</a>--}}
{{--                        </li>--}}
{{--                        <li class="tab-item nav-item">--}}
{{--                            <a class="tab-link" id="laptop-tab" data-toggle="tab" href="#laptop" role="tab"--}}
{{--                               aria-controls="laptop" aria-selected="false">لپ تاپ</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--            <div class="tab-content" id="myTabContent">--}}
{{--                <div class="tab camera tab-pane fade show active" id="camera" role="tabpanel"--}}
{{--                     aria-labelledby="camera-tab">--}}
{{--                    <div class="slider-widget-products slider-content-tabs pr-0 pl-0">--}}
{{--                        <div class="widget widget-product card slider-content-tabs pr-0 pl-0">--}}
{{--                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                                <div class="owl-stage-outer">--}}
{{--                                    <div class="owl-stage"--}}
{{--                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 309.083px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/camera-canon-4000D.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        دوربین دیجیتال کانن مدل EOS 4000D به همراه لنز 18-55 میلی--}}
{{--                                                        متر IS II--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۱۲,۰۰۰,۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۱۰,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 309.083px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/camera-samsung.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        دوربین دیجیتال سامسونگ مدل ST150F--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۲۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 309.083px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/camera-nikon-3500D.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        دوربین دیجیتال نیکون مدل D3500 به همراه لنز 18-55 میلی متر--}}
{{--                                                        VR AF-P--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 309.083px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/camera-instax-mini-70.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        دوربین عکاسی چاپ سریع فوجی فیلم مدل Instax mini 70--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۶,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۴,۲۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item tab-item" style="width: 309.083px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/camera-nikon.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        دوربین دیجیتال بدون آینه نیکون مدل Z6 به همراه لنز 24-70--}}
{{--                                                        میلی متر f/4 S--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۷,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۶,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab cellphone tab-pane fade" id="cellphone" role="tabpanel"--}}
{{--                     aria-labelledby="cellphone-tab">--}}
{{--                    <div class="slider-widget-products slider-content-tabs">--}}
{{--                        <div class="widget widget-product card slider-content-tabs">--}}
{{--                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                                <div class="owl-stage-outer">--}}
{{--                                    <div class="owl-stage"--}}
{{--                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1534px;">--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/Samsung-S10Plus.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        سامسونگ گلکسی اس 10 پلاس – 128 گیگابایت – دو سیم کارت--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۱۲,۰۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۱۰,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/huawei-p-smart.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        هوآوی مدل P Smart 2019 دو سیم کارت ظرفیت 64 گیگابایت--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۲۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/iphone-xs-max-space.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        اپل آیفون ایکس اس مکس – 256 گیگابایت – دو سیم کارت--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/honer.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        هواوی هانر ویوو 20 – 256 گیگابایت – دو سیم کارت--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۶,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۴,۲۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/huawei.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        هواوی پی 20 پرو 128 گیگابایت – دو سیم کارت--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۷,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۶,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab Home-Appliances tab-pane fade" id="Home-Appliances" role="tabpanel"--}}
{{--                     aria-labelledby="Home-Appliances-tab">--}}
{{--                    <div class="slider-widget-products slider-content-tabs">--}}
{{--                        <div class="widget widget-product card slider-content-tabs">--}}
{{--                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                                <div class="owl-stage-outer">--}}
{{--                                    <div class="owl-stage"--}}
{{--                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1534px;">--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/Stove-lopez.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        اجاق گاز طرح فر لوپز مدل 10000S--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۱۲,۰۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۱۰,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/SWF-40R.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        آون توستر سان ورد مدل SWF-40R--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۲۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/ECM2013.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        اسپرسوساز مباشی مدل ECM2013--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/DNR 290T-366T.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        یخچال و فریزر دو قلوی دونار مدل DNR 290T-366T--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۶,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۴,۲۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/Avocado.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        آب میوه گیری پارس خزر مدل Avocado--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۷,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۶,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab laptop tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">--}}
{{--                    <div class="slider-widget-products slider-content-tabs">--}}
{{--                        <div class="widget widget-product card slider-content-tabs">--}}
{{--                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                                <div class="owl-stage-outer">--}}
{{--                                    <div class="owl-stage"--}}
{{--                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1534px;">--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/mitbook.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        هواوای میت بوک X پرو 13.9 اینچ--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۱۲,۰۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۱۰,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/SL1200_-300x300.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        لپ تاپ چووی الترابوک 14 اینچ پرو--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۲۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۵۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img src="{{ asset('static/home/assets/images') }}/slider-product/zenbook.jpg"--}}
{{--                                                         class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        لپ تاپ 13 اینچی ایسوس مدل ZenBook S13 UX392FN - A--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۷,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۶,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item active tab-item"--}}
{{--                                             style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        کامپیوتر همه کاره 27 اینچی اپل مدل iMac CTO - A 2019 با صفحه--}}
{{--                                                        نمایش رتینا 5K--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                            <div class="item">--}}
{{--                                                <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                                   data-target="#exampleModal">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ asset('static/home/assets/images') }}/slider-product/asus-laptop.jpg"--}}
{{--                                                        class="img-fluid" alt="">--}}
{{--                                                    <span class="icon-view">--}}
{{--                                                            <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                                        </span>--}}
{{--                                                </a>--}}
{{--                                                <h2 class="post-title">--}}
{{--                                                    <a href="#">--}}
{{--                                                        لپ تاپ ایسوس زِنبوک 14--}}
{{--                                                    </a>--}}
{{--                                                </h2>--}}
{{--                                                <div class="price">--}}
{{--                                                    <del><span>۶,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                    <ins><span>۴,۲۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                                </div>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="action-item like">--}}
{{--                                                            <button class="btn btn-light add-product-wishes"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-heart-o"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item compare">--}}
{{--                                                            <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                                <i class="fa fa-random"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="action-item add-to-cart">--}}
{{--                                                            <button class="btn btn-light btn-add-to-cart"--}}
{{--                                                                    type="submit">--}}
{{--                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- tabs---------------------------------->--}}

{{--        <!-- slider-product------------------------>--}}
{{--        <div class="slider-widget-products slider-content-tabs pr-0 pl-0">--}}
{{--            <div class="widget widget-product card slider-content-tabs pr-0 pl-0">--}}
{{--                <header class="card-header">--}}
{{--                    <span class="title-one">محصولات جدید</span>--}}
{{--                    <h3 class="card-title"></h3>--}}
{{--                </header>--}}
{{--                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                    <div class="owl-stage-outer">--}}
{{--                        <div class="owl-stage"--}}
{{--                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1534px;">--}}
{{--                            <div class="owl-item active tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                       data-target="#exampleModal">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-product/boxing.jpg"--}}
{{--                                             class="img-fluid" alt="">--}}
{{--                                        <span class="icon-view">--}}
{{--                                                <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تی شرت ورزشی نخی مردانه فلوریزا طرح بوکس کد boxing 002M تیشرت--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>50,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>40,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="actions">--}}
{{--                                        <ul>--}}
{{--                                            <li class="action-item like">--}}
{{--                                                <button class="btn btn-light add-product-wishes" type="submit">--}}
{{--                                                    <i class="fa fa-heart-o"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item compare">--}}
{{--                                                <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                    <i class="fa fa-random"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item add-to-cart">--}}
{{--                                                <button class="btn btn-light btn-add-to-cart" type="submit">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                       data-target="#exampleModal">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-product/btt.jpg" class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                        <span class="icon-view">--}}
{{--                                                <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تی شرت آستین کوتاه تارکان کد btt 152-1--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>68,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>58,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="actions">--}}
{{--                                        <ul>--}}
{{--                                            <li class="action-item like">--}}
{{--                                                <button class="btn btn-light add-product-wishes" type="submit">--}}
{{--                                                    <i class="fa fa-heart-o"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item compare">--}}
{{--                                                <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                    <i class="fa fa-random"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item add-to-cart">--}}
{{--                                                <button class="btn btn-light btn-add-to-cart" type="submit">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                       data-target="#exampleModal">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-product/t-shirt-1.jpg"--}}
{{--                                             class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                        <span class="icon-view">--}}
{{--                                                <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تی شرت به رسم طرح دریم کچر کد 558--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>42,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>32,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="actions">--}}
{{--                                        <ul>--}}
{{--                                            <li class="action-item like">--}}
{{--                                                <button class="btn btn-light add-product-wishes" type="submit">--}}
{{--                                                    <i class="fa fa-heart-o"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item compare">--}}
{{--                                                <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                    <i class="fa fa-random"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item add-to-cart">--}}
{{--                                                <button class="btn btn-light btn-add-to-cart" type="submit">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                       data-target="#exampleModal">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-product/t-shirt-2.jpg"--}}
{{--                                             class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                        <span class="icon-view">--}}
{{--                                                <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تیشرت آستین بلند مردانه پاتیلوک طرح Killed مدل 330451--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>99,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>88,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="actions">--}}
{{--                                        <ul>--}}
{{--                                            <li class="action-item like">--}}
{{--                                                <button class="btn btn-light add-product-wishes" type="submit">--}}
{{--                                                    <i class="fa fa-heart-o"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item compare">--}}
{{--                                                <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                    <i class="fa fa-random"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item add-to-cart">--}}
{{--                                                <button class="btn btn-light btn-add-to-cart" type="submit">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item tab-item" style="width: 296.75px; margin-left: 10px;">--}}
{{--                                <div class="item">--}}
{{--                                    <a href="#" class="d-block hover-img-link" data-toggle="modal"--}}
{{--                                       data-target="#exampleModal">--}}
{{--                                        <img src="{{ asset('static/home/assets/images') }}/slider-product/t-shirt-3.jpg"--}}
{{--                                             class="img-fluid"--}}
{{--                                             alt="">--}}
{{--                                        <span class="icon-view">--}}
{{--                                                <strong><i class="fa fa-eye"></i></strong>--}}
{{--                                            </span>--}}
{{--                                    </a>--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            تی شرت مردانه زی مدل 153118473--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <del><span>90,000<span>تومان</span></span></del>--}}
{{--                                        <ins><span>85,000<span>تومان</span></span></ins>--}}
{{--                                    </div>--}}
{{--                                    <div class="actions">--}}
{{--                                        <ul>--}}
{{--                                            <li class="action-item like">--}}
{{--                                                <button class="btn btn-light add-product-wishes" type="submit">--}}
{{--                                                    <i class="fa fa-heart-o"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item compare">--}}
{{--                                                <button class="btn btn-light btn-compare" type="submit">--}}
{{--                                                    <i class="fa fa-random"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                            <li class="action-item add-to-cart">--}}
{{--                                                <button class="btn btn-light btn-add-to-cart" type="submit">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                                </button>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Modal -->--}}
{{--            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"--}}
{{--                 aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                <div class="modal-dialog">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="modal-body">--}}
{{--                            <div class="col-lg-6 pr">--}}
{{--                                <div class="thum-img">--}}
{{--                                    <div class="widget widget-product card mb-0">--}}
{{--                                        <div--}}
{{--                                            class="product-carousel-more owl-carousel owl-theme owl-rtl owl-loaded owl-drag">--}}
{{--                                            <div class="owl-stage-outer">--}}
{{--                                                <div class="owl-stage"--}}
{{--                                                     style="transform: translate3d(1652px, 0px, 0px); transition: all 0.25s ease 0s; width: 2065px;">--}}
{{--                                                    <div class="owl-item" style="width: 403px; margin-left: 10px;">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <a href="#" class="d-block hover-img-link"--}}
{{--                                                               data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                                <div class="zoom-box">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                                        width="200" height="150"/>--}}
{{--                                                                    <div class="discount-m">--}}
{{--                                                                        <span>10%</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="owl-item" style="width: 403px; margin-left: 10px;">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <a href="#" class="d-block hover-img-link"--}}
{{--                                                               data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                                <div class="zoom-box">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                                        width="200" height="150"/>--}}
{{--                                                                    <div class="discount-m">--}}
{{--                                                                        <span>10%</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="owl-item" style="width: 403px; margin-left: 10px;">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <a href="#" class="d-block hover-img-link"--}}
{{--                                                               data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                                <div class="zoom-box">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                                        width="200" height="150"/>--}}
{{--                                                                    <div class="discount-m">--}}
{{--                                                                        <span>10%</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="owl-item" style="width: 403px; margin-left: 10px;">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <a href="#" class="d-block hover-img-link"--}}
{{--                                                               data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                                <div class="zoom-box">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                                        width="200" height="150"/>--}}
{{--                                                                    <div class="discount-m">--}}
{{--                                                                        <span>10%</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="owl-item active"--}}
{{--                                                         style="width: 403px; margin-left: 10px;">--}}
{{--                                                        <div class="item">--}}
{{--                                                            <a href="#" class="d-block hover-img-link"--}}
{{--                                                               data-toggle="modal" data-target="#exampleModal">--}}
{{--                                                                <div class="zoom-box">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{ asset('static/home/assets/images') }}/slider-product/computer-appel.jpg"--}}
{{--                                                                        width="200" height="150"/>--}}
{{--                                                                    <div class="discount-m">--}}
{{--                                                                        <span>10%</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 pr">--}}
{{--                                <div class="product-box-modal-title">--}}
{{--                                    <h2 class="post-title">--}}
{{--                                        <a href="#">--}}
{{--                                            کامپیوتر همه کاره 27 اینچی اپل مدل iMac CTO - A 2019 با صفحه نمایش رتینا--}}
{{--                                            5K--}}
{{--                                        </a>--}}
{{--                                    </h2>--}}
{{--                                </div>--}}
{{--                                <div class="small-gutters align-items-stretch mb-4">--}}
{{--                                    <div class="col-lg-12 pr-0 pl-0 pr">--}}
{{--                                        <div class="product-box-modal_price mt-12 mt-auto">--}}
{{--                                            <div class="price">--}}
{{--                                                <del><span>۳,۵۰۰,۰۰۰<span>تومان</span></span></del>--}}
{{--                                                <ins><span>۲,۰۰۰,۰۰۰<span>تومان</span></span></ins>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="small-gutters">--}}
{{--                                        <div class="col-lg-12 mb-8 pr-0 pl-0 pr mt-3">--}}
{{--                                            <div class="product-box_action">--}}
{{--                                                <button class="btn btn-gradient-primary add-to-cart"--}}
{{--                                                        type="submit">افزودن به سبد--}}
{{--                                                </button>--}}
{{--                                                <a href="#" class="btn btn-outline-dark btn-block">مشاهده جزئیات</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- slider-product------------------------>--}}
{{--    </aside>--}}
</div>
<!-- content-site--------------------------->

<!-- footer------------------------------------------->
@include('home.layouts.footer')
<!-- footer------------------------------------------->
<!-- scroll_Progress------------------------->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- scroll_Progress------------------------->
<!-- Page Loader----------------------------->
<div class="P-loader">
    <div class="P-loader-content">
        <div class="logo-loader">
            <img src="{{ asset('static/home') }}/logo.png" alt="logo">
        </div>
        <div class="pic-loader text-center">
            <img src="{{ asset('static/home') }}/three-dots.svg" width="50" alt="">
        </div>
    </div>
</div>
<!-- Page Loader----------------------------->
</body>
@include('home.layouts.script')
<!-- file js---------------------------------------------------->
</html>
