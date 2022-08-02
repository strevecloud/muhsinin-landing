@extends('layout.master')

@php
        use App\Repositories\BranchPackageRepository;
        $branchPackageRepository = new BranchPackageRepository();
        $package = $packages->first();
        $itinerary = $branchPackageRepository->branchPackageByDetailId($package->branch_package_detail_id);
@endphp
@section('meta_image', getImageUrl($package->basic_package_photos))
@section('meta_description', $package->basic_package_name.' '.getDateIndoShort($package->basic_package_depature_date))

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
                                    {{--<li>--}}
                                        {{--<i class="fa fa-bed"></i>--}}
                                        {{--{{ $package->master_room_name }}--}}
                                    {{--</li>--}}
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $package->master_office_name }}
                                    </li>
                                </ul>
                            </div>
                        </figure>
                        @include('frontend.partials.package_info_tab', ['packages' => $package,'itinerary' => $itinerary])
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">


                        @foreach($packages as $pack)

                            <div class="widget-bg booking-form-wrap">
                            <form class="booking-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput" class="font-weight-bold">Tipe Kamar</label>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-xs fa-bed"></i></div>
                                                <input type="text" value="{{ $pack->master_room_name }}" class="form-control" id="formGroupExampleInput" readonly="readonly">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h4>Rp {{ get_currency($pack->branch_package_detail_selling_price) }} / per orang</h4>
                                    </div>
                                    {{--<div class="col-sm-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="formGroupExampleInput">Maksimal Jammah</label>--}}
                                            {{--<div class="input-group-prepend">--}}
                                                {{--<div class="input-group-text"><i class="fa fa-xs fa-user-friends"></i></div>--}}
                                                {{--<input type="text" class="form-control" value="{{ $pack->master_room_value }}" id="formGroupExampleInput" readonly="readonly">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group submit-btn">
                                            <div class="text-center">
                                                <a href="{{ route('booking.show',[$pack->branch_package_detail_id]) }}" class="button-primary pull-right"> <i class="fa fa-book fa-lg"></i> Booking</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <a href="https://api.whatsapp.com/send?text={{urlencode(url()->current()."?brc=".request()->brc) }}" class="button-secondary"> <i class="fab fa-whatsapp fa-lg"></i> Bagikan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
