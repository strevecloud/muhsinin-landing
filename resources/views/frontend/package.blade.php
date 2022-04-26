@extends('layout.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/slider-banner-umrah1.jpeg')}});">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Paket Umroh</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <!-- packages html start -->
    <div class="package-section">
        <div class="container">
            <div class="package-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget-bg booking-form-wrap">
                                <h4 class="bg-title">Filter</h4>
                                <form class="booking-form">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Kota Keberangkatan</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-location-arrow"></i></div>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Jadwal Keberangkatan</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-calendar"></i></div>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Tipe Kamar</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-bed"></i></div>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group text-center submit-btn">
                                                <input type="submit" name="submit" value="Cari Paket">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="widget-bg information-content text-center">
                                <h5>Tips Pencarian Paket</h5>
                                <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. </p>
                                <a href="#" class="button-primary">GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-8">
                        <div class="col-lg-12 button-filter text-center">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-md btn-outline-secondary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Semua Kategori (35)
                                </label>
                                <label class="btn btn-md btn-outline-secondary">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Umroh Reguler (34)
                                </label>
                                <label class="btn btn-md btn-outline-secondary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Umroh Plus Wisata (0)
                                </label>
                                <label class="btn btn-md btn-outline-secondary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Halal Trip (1)
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
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
                                            <a href="#">Umroh Syawal 2022 - Mei</a>
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
                                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
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
                                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
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
                                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
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
                                                Single
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
                                                    <span>Single </span>
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
                                            <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                            <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
