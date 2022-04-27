@extends('layout.master')

@section('content')
    @include('partials.home_slider')
    @include('partials.home_search')
    <!-- Home packages section html start -->
    <section class="package-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Paket Umroh Populer</h2>
                        <p>Temukan paket umroh yang Anda inginkan.</p>
                    </div>
                </div>
            </div>
            <div class="package-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                            <figure class="feature-image">
                                <a href="{{ route('package.show',1) }}">
                                    <img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">
                                </a>
                            </figure>
                            <div class="package-price">
                                <h6>
                                    <span>Rp 28.900.000</span> / per orang
                                </h6>
                            </div>
                            <div class="package-content-wrap">
                                <div class="package-meta text-center">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar"></i>
                                            5 Mei 2022
                                        </li>
                                        <li>
                                            <i class="fa fa-bed"></i>
                                             Quad
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            Makasar
                                        </li>
                                    </ul>
                                </div>
                                <div class="package-content text-center">
                                    <h3>
                                        <a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Mei</a>
                                    </h3>
                                    <hr class="hr-package">
                                    {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(25 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                            {{--<span style="width: 60%"></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.</p>--}}

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>5 mei 2022 </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>12 Hari </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Makassar </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">


                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Saudi Airlines </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Quad </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="hr-package">
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>
                                        <a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                            <figure class="feature-image">
                                <a href="{{ route('package.show',1) }}">
                                    <img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">
                                </a>
                            </figure>
                            <div class="package-price">
                                <h6>
                                    <span>Rp 21.000.000 </span> / per orang
                                </h6>
                            </div>
                            <div class="package-content-wrap">
                                <div class="package-meta text-center">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar"></i>
                                            22 Juni 2022
                                        </li>
                                        <li>
                                            <i class="fa fa-bed"></i>
                                            Triple
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            Jakarta
                                        </li>
                                    </ul>
                                </div>
                                <div class="package-content text-center">
                                    <h3>
                                        <a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Juni</a>
                                    </h3>
                                    {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(17 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                            {{--<span style="width: 100%"></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>22 Juni 2022 </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>9 Hari </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Jakarta </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">


                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Saudi Airlines </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Triple </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="hr-package">
                                    </div>

                                    <div class="btn-wrap">
                                        <a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>
                                        <a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="package-wrap">
                            <figure class="feature-image">
                                <a href="{{ route('package.show',1) }}">
                                    <img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">
                                </a>
                            </figure>
                            <div class="package-price">
                                <h6>
                                    <span>Rp 23.000.000 </span> / per orang
                                </h6>
                            </div>
                            <div class="package-content-wrap">
                                <div class="package-meta text-center">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar"></i>
                                            12 Juli 2022
                                        </li>
                                        <li>
                                            <i class="fa fa-bed"></i>
                                            Double
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            Solo
                                        </li>
                                    </ul>
                                </div>
                                <div class="package-content text-center">
                                    <h3>
                                        <a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Juli</a>
                                    </h3>
                                    {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(22 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                            {{--<span style="width: 80%"></span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>22 Juni 2022 </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>10 Hari </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Solo </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">


                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Saudi Airlines </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>Double </span>
                                            </div>
                                        </div>

                                        <hr class="hr-package">

                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="hr-package">
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>
                                        <a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap text-center">
                    <a href="{{ route('package.index') }}" class="button-primary">Lihat Semua Paket</a>
                </div>
            </div>
        </div>
    </section>
    <!-- packages html end -->
    <!-- Home blog section html start -->
    {{--@include('partials.recent_post');--}}
    <!-- blog html end -->
    <!-- Home contact details section html start -->
    {{--@include('partials.contact_section');--}}
    <!--  contact details html end -->
@endsection
