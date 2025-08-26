@extends('layouts.front-end.app')

@section('title', 'about-us')

@push('css_or_js')
    <link rel="stylesheet"
          href="{{ theme_asset(path: 'public/assets/front-end/plugin/intl-tel-input/css/intlTelInput.css') }}">
@endpush

@section('content')
    <div class="__inline-58">
        <div class="container rtl">
            <div class="row">
                <div class="col-md-12 contact-us-page sidebar_heading text-center mb-2">
                    <h1 class="h3 mb-0 headerTitle">About Us</h1>
                </div>
            </div>
        </div>

        <div class="container rtl text-align-direction">
            <div class="row no-gutters py-5">
                <section class="pt-120 ab-about-section position-relative z-1 overflow-hidden">
                    <div class="container">
                        <div class="row g-5 g-xl-4 align-items-center">
                            <div class="col-xl-6">
                                <div class="ab-left position-relative">
                                    <img class="for-contact-image thumbnail"
                                         src="{{ theme_asset(path: 'public/assets/front-end/png/repair-banner.jpg') }}"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ab-about-right">
                                    <div class="subtitle d-flex align-items-center gap-3 flex-wrap">
                                        <span class="gshop-subtitle">100% Durable products</span>
                                        <span>
                                <svg width="78" height="16" viewBox="0 0 78 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <line x1="0.0138875" y1="7.0001" x2="72.0139" y2="8.0001" stroke="#FF7C08"
                                          stroke-width="2"/>
                                    <path d="M78 8L66 14.9282L66 1.0718L78 8Z" fill="#FF7C08"/>
                                </svg>
                            </span>
                                    </div>
                                    <h2 class="mb-4">Welcome to Teza Auto<br/> Accessories</h2>
                                    <p class="mb-8 ">At <b>TEZA AUTO ACCESSORIES</b>, we are
                                        passionate about driving excellence—literally. Established with the goal of
                                        enhancing every journey, we specialize in providing high-quality, reliable, and
                                        affordable auto accessories and spare parts that keep your vehicle looking sharp
                                        and running smoothly. Based on years of experience and a deep understanding of
                                        the automotive industry, TEZA AUTO is committed to being a trusted partner for
                                        mechanics, drivers, fleet owners, and car enthusiasts. Whether you&#039;re
                                        upgrading your car’s performance, adding a personal touch, or simply replacing a
                                        worn-out part, we’ve got the right product for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row p-5 mb-5" style="background-color: #fff;">
            <div class="col-md-6">
                <div class="image-box py-6 px-4 image-box-border">
                    <div class="footer-slide-item card">
                        <a href="{{ route('helpTopic') }}">
                            <div class="text-center text-primary">
                                <img class="object-contain svg" width="36" height="36"
                                     src="{{ theme_asset(path: "public/assets/front-end/img/icons/mission.png") }}"
                                     alt="">
                            </div>
                            <div class="text-center">
                                <p class="m-0 mt-2">
                                    Our Mission
                                </p>
                                <small class="d-none d-md-block">
                                    At Teza auto, we are dedicated to empowering your drive with
                                    premium,reliable car accessories,delivering style,functionality, and
                                    quality to enhance every journey
                                    <br>
                                    <br>
                                </small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box py-6 px-4 image-box-border">
                    <div class="footer-slide-item card">
                        <a href="{{ route('helpTopic') }}">
                            <div class="text-center text-primary">
                                <img class="object-contain svg" width="36" height="36"
                                     src="{{ theme_asset(path: "public/assets/front-end/img/icons/vision.png") }}"
                                     alt="">
                            </div>
                            <div class="text-center">
                                <p class="m-0 mt-2">
                                    Our Vision
                                </p>
                                <small class="d-none d-md-block">
                                    To revolutionize the Ugandan automotive industry by providing
                                    innovative,high-quality car accessories that enhance safety,style
                                    and performance,while delivering exceptional customer experiences
                                </small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
