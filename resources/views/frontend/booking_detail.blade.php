@extends('layout.master')

@section('content')
    <!-- Inner Banner html start-->
    @include('frontend.partials.banner_image',['title' => 'Detail Pemesanan'])
    <!-- Inner Banner html end-->
    <div class="step-section cart-section">
        <div class="container">
            <!-- step three form html start -->
            <div class="confirmation-outer">
                <div class="success-notify">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="success-content">
                        <h3>Pemesanan telah dikonfirmasi.</h3>
                        <p>Silahkan datang ke cabang yang dipilih atau tunggu konfirmasi telepon dari cabang kami, Terimakasih.</p>
                    </div>
                </div>
                <div class="confirmation-inner">
                    <div class="row">
                        <div class="col-lg-8 right-sidebar">
                            <div class="confirmation-details">
                                <h3>Info Pemesanan</h3>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Kode Pemesanan:</td>
                                        <td>{{ $booking->booking_code }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe Pembayaran:</td>
                                        <td>{{ ucFirst($booking->paymentType->name) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Keberangkatan:</td>
                                        <td>{{ getDateIndo($package->basic_package_depature_date) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Depan:</td>
                                        <td>{{ $bookingDetail->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Belakang:</td>
                                        <td>{{ $bookingDetail->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin:</td>
                                        <td>{{ ($bookingDetail->gender == 'M') ? 'Pria' : 'Wanita' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Handphone</td>
                                        <td>{{ $bookingDetail->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe Kamar</td>
                                        <td>{{ $package->master_room_name }}</td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td>Jumlah Jamaah</td>--}}
                                        {{--<td>{{ $package->master_room_value }}</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td>Warktu Pemesanan</td>
                                        <td>{{ getDateIndoWithTime($booking->created_at) }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="details">
                                    <h3>Lihat Data Pemesanan</h3>
                                    <div class="details-desc">
                                        <p><a href="{{ route('booking.info',[$booking->booking_code]) }}">{{ route('booking.info',[$booking->booking_code]) }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="sidebar">
                                <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Total Harga</h4>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong>Harga per Jamaah </strong>
                                            </td>
                                            <td class="text-right">
                                                Rp {{ get_currency($package->branch_package_detail_selling_price) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tipe Kamar</strong>
                                            </td>
                                            <td class="text-right">
                                                {{ $package->master_room_name }}
                                            </td>
                                        </tr>
                                        {{--<tr>--}}
                                            {{--<td>--}}
                                                {{--<strong>Jumlah Jamaah</strong>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-right">--}}
                                                {{--{{ $package->master_room_value }}--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr class="total">--}}
                                            {{--<td>--}}
                                                {{--<strong>Total Harga</strong>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-right">--}}
                                                {{--<strong>Rp {{ get_currency($package->branch_package_detail_selling_price * $package->master_room_value) }}</strong>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="widget-bg widget-support-wrap">
                                    <div class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="support-content">
                                        <h5>Butuh Bantuan</h5>
                                        <a href="telto:12345678" class="phone">0819-0507-8000</a>
                                        <small>Senin sampai Jumat 9.00 - 19.30</small>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step three form html end -->
        </div>
    </div>
@endsection
