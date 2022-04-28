@extends('layout.master')

@section('content')
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/slider-banner-umrah1.jpeg')}});">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Detail Paket</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="single-tour-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-tour-inner">
                        <h2>Umrah Syawal 2022 - Mei</h2>
                        <figure class="feature-image">
                            <img src="{{ asset('assets/images/umrah-sample1.jpeg')}}" alt="">
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
                        </figure>
                        <div class="tab-container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="true">Paket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="false">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="program-tab" data-toggle="tab" href="#program" role="tab" aria-controls="program" aria-selected="false">Rencana Perjalanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Syarat & Ketentuan</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="package" role="tabpanel" aria-labelledby="package-tab">
                                    <div class="overview-content">
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

                                    </div>
                                </div>
                                <div class="tab-pane" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                        <p>Dalam paket ini tersedia faslitas sebagai berikut :</p>
                                        <ul>
                                            <li>- Travel cancellation insurance</li>
                                            <li>- Breakfast and dinner included</li>
                                            <li>- Health care included</li>
                                            <li>- Transfer to the airport and return to the agency</li>
                                            <li>- Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
                                    <div class="itinerary-content">
                                        <h3>Program <span>( 4 days )</span></h3>
                                        <p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p>
                                    </div>
                                    <div class="itinerary-timeline-wrap">
                                        <ul>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>1</span></div>
                                                    <h4>Ancient Rome Visit</h4>
                                                    <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>2</span></div>
                                                    <h4>Classic Rome Sightseeing</h4>
                                                    <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>3</span></div>
                                                    <h4>Vatican City Visit</h4>
                                                    <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-content">
                                                    <div class="day-count">Day <span>4</span></div>
                                                    <h4>Italian Food Tour</h4>
                                                    <p>Nostra semper ultricies eu leo eros orci porta provident, fugit? Pariatur interdum assumenda, qui aliquip ipsa! Dictum natus potenti pretium.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                    <div class="map-area">
                                        <div class="overview-content">
                                            <p>Dalam paket ini tersedia faslitas sebagai berikut :</p>
                                            <ul>
                                                <li>- Memiliki Kartu Tanda Penduduk yang masih berlaku / identitas lain yang sah</li>
                                                <li>- Paspor Asli</li>
                                                <li>- Buku Kuning</li>
                                                <li>- Pas Foto 4x6 (2 lembar, Background putih, 80% wajah)</li>
                                                <li>- Sisa pembayaran diselesaikan maksimal 1 bulan sebelum keberangkatan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="single-tour-gallery">--}}
                            {{--<h3>GALLERY / PHOTOS</h3>--}}
                            {{--<div class="single-tour-slider">--}}
                                {{--<div class="single-tour-item">--}}
                                    {{--<figure class="feature-image">--}}
                                        {{--<img src="{{ asset('assets/images/img28.jpg')}}" alt="">--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                                {{--<div class="single-tour-item">--}}
                                    {{--<figure class="feature-image">--}}
                                        {{--<img src="{{ asset('assets/images/img29.jpg')}}" alt="">--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                                {{--<div class="single-tour-item">--}}
                                    {{--<figure class="feature-image">--}}
                                        {{--<img src="{{ asset('assets/images/img32.jpg')}}" alt="">--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                                {{--<div class="single-tour-item">--}}
                                    {{--<figure class="feature-image">--}}
                                        {{--<img src="{{ asset('assets/images/img33.jpg')}}" alt="">--}}
                                    {{--</figure>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget-bg booking-form-wrap">
                            <h4 class="package-price"><span>Rp 28.900.000</span> / per orang</h4>
                            <form class="booking-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tipe Kamar</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-xs fa-bed"></i></div>
                                                <input type="text" value="Quad" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Maksimal Jammah</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-xs fa-user-friends"></i></div>
                                                <input type="text" class="form-control" value="4" id="formGroupExampleInput" placeholder="Example input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group submit-btn">
                                            <div class="text-center">
                                                <a href="{{ route('booking.index') }}" class="button-primary">Booking</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
