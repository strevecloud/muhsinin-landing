@extends('layout.master')

@section('content')
    @include('frontend.partials.banner_image',['title' => 'Detail Paket'])
    <!-- Inner Banner html end-->
    <div class="single-tour-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-tour-inner">
                        <h2>{{ $package->basic_package_name }}</h2>
                        <figure class="feature-image">
                            <img src="{{ getImageUrl($package->basic_package_photos)}}" alt="">
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
                        </figure>
                        @include('frontend.partials.package_info_tab', $package)
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget-bg booking-form-wrap">
                            <h4 class="package-price"><span>Rp {{ get_currency($package->branch_package_detail_selling_price) }}</span> / per orang</h4>
                            <form class="booking-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tipe Kamar</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-xs fa-bed"></i></div>
                                                <input type="text" value="{{ $package->master_room_name }}" class="form-control" id="formGroupExampleInput" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Maksimal Jammah</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-xs fa-user-friends"></i></div>
                                                <input type="text" class="form-control" value="{{ $package->master_room_value }}" id="formGroupExampleInput" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group submit-btn">
                                            <div class="text-center">
                                                <a href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}" class="button-secondary pull-left"> <i class="fab fa-whatsapp fa-lg"></i> Bagikan</a>
                                                <a href="{{ route('booking.show',[$package->branch_package_detail_id]) }}" class="button-primary pull-right"> <i class="fa fa-book fa-lg"></i> Booking</a>
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
