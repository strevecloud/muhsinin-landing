@extends('layout.master')

@section('content')
    <!-- Inner Banner html start-->
    @include('frontend.partials.banner_image',['title' => 'Info Pemesanan'])
    <!-- Inner Banner html end-->
    <div class="step-section booking-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 right-sidebar">
                    <!-- step one form html start -->
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

                    <form action="{{ route('booking.store',[$package->branch_package_detail_id]) }}" name="myForm" id="myForm" method="post">
                    @csrf
                    <div class="data-jamaah">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($bookingDetails as $detail)
                        <div class="booking-content booking-content-template" id="booking-content-template">
                            <div class="form-title">
                                <span class="person-number">{{$i+1}}</span>
                                @php

                                $personNumber = 0;
                                if($i == 0){
                                    $personNumber = 'Pertama';
                                }else if($i == 1){
                                    $personNumber = 'Kedua';
                                }else if($i == 2){
                                    $personNumber = 'Ketiga';
                                }else if($i == 3){
                                    $personNumber = 'Keempat';
                                }

                                @endphp
                                <h3 class="person-number-text">Jamaah {{$personNumber}}</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Depan*</label>
                                        <input type="text" class="form-control first_name" name="data[{{ $i }}][first_name]" value="{{ $detail->first_name }}" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Belakang*</label>
                                        <input type="text" class="form-control last_name" name="data[{{ $i }}][last_name]" value="{{ $detail->last_name }}" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin*</label>
                                        <input type="text" class="form-control last_name" name="data[{{ $i }}][last_name]" value="{{ ($detail->gender == 'M') ? 'Pria' : 'Wanita'  }}" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Ktp*</label>
                                        <input type="text" class="form-control nik_number" name="data[{{ $i }}][nik_number]" value="{{ $detail->nik_number }}" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Handphone*</label>
                                        <input type="text" class="form-control phone_number" name="data[{{ $i }}][phone_number]" value="{{ $detail->phone_number }}" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hubungan Mahram/Pendamping*</label>
                                        <input type="text" class="form-control phone_number" name="data[{{ $i }}][phone_number]" value="{{ ucfirst($detail->relation_type) }}" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach


                    </div>
                    </form>
                    <!-- step one form html end -->
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
                                <tr>
                                    <td>
                                        <strong>Tipe Pembayaran</strong>
                                    </td>
                                    <td class="text-right">
                                        {{ ucfirst($booking->paymentType->name) }}
                                    </td>
                                </tr>
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
                        @include('frontend.partials.helpdesk_number')
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $(document).on('click','.add-jamaah',function(){
                let templateFoorm = $('#booking-content-template-hidden').clone();
                $(templateFoorm).removeClass('booking-content-template-hidden');
                $(templateFoorm).removeAttr('id');
                $(templateFoorm).addClass('jamaah-conter');
                $(templateFoorm).appendTo('.data-jamaah');

                let countElements = $('.jamaah-conter').length;
                let jamaahPerson = numberPerson(countElements);
                $(templateFoorm).find('.person-number').text(countElements);
                $(templateFoorm).find('.person-number-text').text(jamaahPerson);
                $(templateFoorm).addClass('jamaah-conter-'+countElements);

                if(countElements > 2){
                    $(this).parent().find('.delete-jamaah').hide();

                }
                $(this).hide();

                if(countElements >= 4){
                    $(templateFoorm).find('.add-jamaah').hide();
                }
            });

            $(document).on('click','.delete-jamaah',function(){
                let counter = $(this).closest('.booking-content').find('.person-number').text();
                let counterNow = counter - 1;
                let jamaahElem = $('.jamaah-conter-'+counterNow);
                if(counterNow == 2){
                    let jamaahFirstElem = $('.first-jamaah');
                    $(jamaahFirstElem).find('.add-jamaah').show();
                }
                $(jamaahElem).find('.add-jamaah').show();
                $(jamaahElem).find('.delete-jamaah').show();
                $(this).closest('.booking-content').remove();
            })
        });

        function numberPerson(counter){
            if(counter == 1){
                return 'Jamaah Pertama';
            }else if(counter == 2){
                return 'Jamaah Kedua';
            }else if(counter == 3){
                return 'Jamaah Ketiga';
            } else if(counter == 4){
                return 'Jamaah Keempat';
            }
        }
    </script>

@endsection
