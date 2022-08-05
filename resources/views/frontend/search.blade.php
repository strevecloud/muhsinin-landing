@extends('layout.master')

@section('content')
    @include('frontend.partials.banner_image',['title' => 'Pencarian Pesanan'])
    <!-- Inner Banner html end-->
    <!-- search section html start -->
    <div class="search-section">
        <div class="container">
            <div class="content-search-from search-outer-wrap">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h4>Gunakan Kode Pemesanan Atau Nomor Handphone Pendaftar</h4>
                        <h2>Mulai Pencarian !!</h2>
                        <form class="search-form">
                            <input type="text" name="search" placeholder="Cari..">
                            <button class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="search-outer-wrap">
                @php
                    $i = 1;
                    $gridSize = 12;
                    if(@$countBooking >= 3){
                        $gridSize = 12;
                    }
                @endphp
                <div class="row grid">
                    @foreach($results as $result)
                    <div class="col-lg-{{ $gridSize }} grid-item">

                        @php
                            $viewPackage = $result->viewPackage;

                            if($result->viewPackage == null){
                                $viewPackage = $result->viewPackageAll;
                            }
                        @endphp

                        <div class="search-content-wrap">
                            <article class="post">
                                <div class="entry-content">
                                    <h3 class="entry-title">
                                        <a href="{{ route('booking.detail',[$result->booking_code ]) }}"><h3>{{ $i }}.</h3>{{ $viewPackage->basic_package_name }}</a>
                                    </h3>

                                    <div class="entry-text">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm text-sm-bold">Kode Pemesanan</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>{{ $result->booking_code }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-text">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm text-sm-bold">Kota Keberangkatan</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>{{ $viewPackage->master_office_name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-text">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm text-sm-bold">Waktu Keberangkatan</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>{{ getDateIndo($viewPackage->basic_package_depature_date) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-text">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm text-sm-bold">Nama Pemesan</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>{{ $result->bookingDetail[0]->first_name.' '.$result->bookingDetail[0]->last_name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-text">
                                        <div class="row">
                                            <div class="col-sm text-left">
                                                <span class="text-sm text-sm-bold">Waktu Pemesanan</span>
                                            </div>
                                            <div class="col-sm text-right">
                                                <span>{{ getDateIndo($result->created_at) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry-text text-center">
                                        <a href="{{ route('booking.detail',[$result->booking_code ]) }}">Lihat Detail <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
