@extends('layout.master')

@section('content')
    <!-- Inner Banner html start-->
    @include('frontend.partials.banner_image',['title' => 'Semua Paket'])
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
                                <form class="booking-form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Kota Keberangkatan</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-location-arrow"></i></div>
                                                    <select class="form-control" name="city_branch" id="city_branch">
                                                        @foreach($offices as $office)
                                                            <option {{ @request()->city_branch == $office->id ? "selected" : "" }} value="{{ $office->id }}">{{ $office->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Jadwal Keberangkatan</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-calendar"></i></div>
                                                    <input class="input-date-picker date-picker" name="departure_date" value="{{ @request()->departure_date }}" id="datepicker" type="text" name="s" placeholder="MM-YY" autocomplete="off" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Tipe Kamar</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-xs fa-bed"></i></div>
                                                    <select class="form-control" name="room_type" id="room_type">
                                                        @foreach($rooms as $room)
                                                            <option {{ @request()->room_type == $room->id ? "selected" : "" }} value="{{ $room->id }}">{{ $room->name }}</option>
                                                        @endforeach
                                                    </select>
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
                        </div>
                    </div>
                    <div class="row col-lg-8">
                        {{--<div class="col-lg-12 button-filter text-center">--}}
                            {{--<div class="btn-group btn-group-toggle" data-toggle="buttons">--}}
                                {{--<label class="btn btn-md btn-outline-secondary active">--}}
                                    {{--<input type="radio" name="options" id="option1" autocomplete="off" checked> Semua Kategori (35)--}}
                                {{--</label>--}}
                                {{--<label class="btn btn-md btn-outline-secondary">--}}
                                    {{--<input type="radio" name="options" id="option2" autocomplete="off"> Umroh Reguler (34)--}}
                                {{--</label>--}}
                                {{--<label class="btn btn-md btn-outline-secondary">--}}
                                    {{--<input type="radio" name="options" id="option3" autocomplete="off"> Umroh Plus Wisata (0)--}}
                                {{--</label>--}}
                                {{--<label class="btn btn-md btn-outline-secondary">--}}
                                    {{--<input type="radio" name="options" id="option3" autocomplete="off"> Halal Trip (1)--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        @if($packages->count() > 0)
                            @foreach($packages as $package)
                            <div class="col-lg-6 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="{{ route('package.show',[$package->branch_package_detail_id]) }}">
                                            <img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                        <h6>
                                            <span>Rp {{ get_currency($package->branch_package_detail_selling_price) }} </span> / per orang
                                        </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-meta text-center">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-calendar"></i>
                                                    {{ getDateIndoShort($package->basic_package_depature_date) }}
                                                </li>
                                                <li>
                                                    <i class="fa fa-bed"></i>
                                                    {{ $package->master_room_name }}
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    {{ $package->master_office_name }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="package-content text-center">
                                            <h3>
                                                <a href="{{ route('package.show',1) }}">{{ $package->basic_package_name }}</a>
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
                                                        <span>{{ getDateIndoShort($package->basic_package_depature_date) }}</span>
                                                    </div>
                                                </div>

                                                <hr class="hr-package">

                                                <div class="row">
                                                    <div class="col-sm text-left">
                                                        <span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>
                                                    </div>
                                                    <div class="col-sm text-right">
                                                        <span>{{ $package->basic_package_duration }}</span>
                                                    </div>
                                                </div>

                                                <hr class="hr-package">

                                                <div class="row">
                                                    <div class="col-sm text-left">
                                                        <span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>
                                                    </div>
                                                    <div class="col-sm text-right">
                                                        <span>{{ $package->master_office_name }}</span>
                                                    </div>
                                                </div>

                                                <hr class="hr-package">


                                                <div class="row">
                                                    <div class="col-sm text-left">
                                                        <span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>
                                                    </div>
                                                    <div class="col-sm text-right">
                                                        <span>{{ $package->master_airline_name }}</span>
                                                    </div>
                                                </div>

                                                <hr class="hr-package">

                                                <div class="row">
                                                    <div class="col-sm text-left">
                                                        <span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>
                                                    </div>
                                                    <div class="col-sm text-right">
                                                        <span>{{ $package->master_room_name }}</span>
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
                                                <a href="{{ route('booking.show',[$package->branch_package_detail_id]) }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>
                                                <a href="{{ route('package.show',[$package->branch_package_detail_id]) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="booking-content text-center col-lg-12">
                                <p class="text-center">Data tidak ditemukan</p>
                            </div>
                        @endif
                        {{--<div class="col-lg-6 col-md-6">--}}
                            {{--<div class="package-wrap">--}}
                                {{--<figure class="feature-image">--}}
                                    {{--<a href="{{ route('package.show',1) }}">--}}
                                        {{--<img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">--}}
                                    {{--</a>--}}
                                {{--</figure>--}}
                                {{--<div class="package-price">--}}
                                    {{--<h6>--}}
                                        {{--<span>Rp 21.000.000 </span> / per orang--}}
                                    {{--</h6>--}}
                                {{--</div>--}}
                                {{--<div class="package-content-wrap">--}}
                                    {{--<div class="package-meta text-center">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-calendar"></i>--}}
                                                {{--22 Juni 2022--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fa fa-bed"></i>--}}
                                                {{--Triple--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-map-marker-alt"></i>--}}
                                                {{--Jakarta--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="package-content text-center">--}}
                                        {{--<h3>--}}
                                            {{--<a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Juni</a>--}}
                                        {{--</h3>--}}
                                        {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(17 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                        {{--<span style="width: 100%"></span>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>22 Juni 2022 </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>9 Hari </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Jakarta </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}


                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Saudi Airlines </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Triple </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                                        {{--<span style="width: 60%"></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}
                                        {{--</div>--}}

                                        {{--<div class="btn-wrap">--}}
                                            {{--<a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>--}}
                                            {{--<a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 col-md-6">--}}
                            {{--<div class="package-wrap">--}}
                                {{--<figure class="feature-image">--}}
                                    {{--<a href="{{ route('package.show',1) }}">--}}
                                        {{--<img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">--}}
                                    {{--</a>--}}
                                {{--</figure>--}}
                                {{--<div class="package-price">--}}
                                    {{--<h6>--}}
                                        {{--<span>Rp 23.000.000 </span> / per orang--}}
                                    {{--</h6>--}}
                                {{--</div>--}}
                                {{--<div class="package-content-wrap">--}}
                                    {{--<div class="package-meta text-center">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-calendar"></i>--}}
                                                {{--12 Juli 2022--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fa fa-bed"></i>--}}
                                                {{--Double--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-map-marker-alt"></i>--}}
                                                {{--Solo--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="package-content text-center">--}}
                                        {{--<h3>--}}
                                            {{--<a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Juli</a>--}}
                                        {{--</h3>--}}
                                        {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(22 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                        {{--<span style="width: 80%"></span>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>22 Juni 2022 </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>10 Hari </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Solo </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}


                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Saudi Airlines </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Double </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                                        {{--<span style="width: 60%"></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}
                                        {{--</div>--}}
                                        {{--<div class="btn-wrap">--}}
                                            {{--<a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>--}}
                                            {{--<a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-6 col-md-6">--}}
                            {{--<div class="package-wrap">--}}
                                {{--<figure class="feature-image">--}}
                                    {{--<a href="{{ route('package.show',1) }}">--}}
                                        {{--<img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">--}}
                                    {{--</a>--}}
                                {{--</figure>--}}
                                {{--<div class="package-price">--}}
                                    {{--<h6>--}}
                                        {{--<span>Rp 23.000.000 </span> / per orang--}}
                                    {{--</h6>--}}
                                {{--</div>--}}
                                {{--<div class="package-content-wrap">--}}
                                    {{--<div class="package-meta text-center">--}}
                                        {{--<ul>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-calendar"></i>--}}
                                                {{--12 Juli 2022--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fa fa-bed"></i>--}}
                                                {{--Single--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<i class="fas fa-map-marker-alt"></i>--}}
                                                {{--Solo--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="package-content text-center">--}}
                                        {{--<h3>--}}
                                            {{--<a href="{{ route('package.show',1) }}">Umroh Syawal 2022 - Juli</a>--}}
                                        {{--</h3>--}}
                                        {{--<div class="review-area">--}}
                                        {{--<span class="review-text">(22 reviews)</span>--}}
                                        {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                        {{--<span style="width: 80%"></span>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-calendar"></i> Berangkat</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>22 Juni 2022 </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>10 Hari </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Solo </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}


                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Saudi Airlines </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<span>Single </span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}

                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm text-left">--}}
                                                    {{--<span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm text-right">--}}
                                                    {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                                        {{--<span style="width: 60%"></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr class="hr-package">--}}
                                        {{--</div>--}}
                                        {{--<div class="btn-wrap">--}}
                                            {{--<a href="{{ route('booking.index') }}" class="button-text width-6">Booking<i class="fas fa-arrow-right"></i></a>--}}
                                            {{--<a href="{{ route('package.show',1) }}" class="button-text width-6">Lihat Detail<i class="fas fa-arrow-right"></i></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-12 text-center">
                            {{ $packages->links() }}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
