@extends('layout.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url({{ asset('assets/images/slider-banner-umrah1.jpeg')}});">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Pesan Paket</h1>
                </div>
            </div>
        </div>
        <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="step-section booking-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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

                        <div class="success-notify">
                            <div class="success-content">
                                <h3>Informasi Tipe Pembayaran</h3>
                                <p>1. Cash = Transfer ke Rekening BSI (Bank Syariah Indonesia an. PT Barokah Insan Muhsinin Cab. Depok Cinere
                                    no rekening 8008282080</p>
                                <br>
                                <p>2. Pembiayaan = (DP Rp 7juta,Upload KTP dan KK, Isi Formulir).</p>
                            </div>
                        </div>


                        <div class="booking-content">
                            <div class="form-title">
                                <h3>Informasi Pendaftaran</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Silahkan pilih jika anda adalah seorang agen.</label>
                                        <label class="checkbox-list">
                                            <input type="checkbox" id="check" class="checkbox-button" name="s">
                                            Saya adalah agen.
                                            <span class="custom-checkbox"></span>
                                        </label>
                                    </div>

                                    <div class="form-group" id="form_agent hide-component">
                                        <label class="hide-component">Kode Agen<span class="text-danger ">*</span></label>
                                        <input type="text" class="form-control agent_code hide-component" id="agent_code" name="agent_code">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="booking-content">
                            <div class="form-title">
                                <h3>Tipe Pembayaran</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Tipe Pembayaran <span class="text-danger">*</span></label>
                                        <select class="form-control payment_type" name="payment_type" id="payment_type">
                                            <option value="" selected="">Pilih Tipe Pembayaran</option>
                                            @foreach($paymentTypes as $paymentType)
                                                <option value="{{ $paymentType->id }}">{{ $paymentType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="booking-content">
                            <div class="form-title">
                                <h3>Alamat Penagihan</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat Penagihan <span class="text-danger">*</span></label>
                                        <textarea class="forrm-control billing_address" name="billing_address" id="billing_address"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="booking-content jamaah-conter first-jamaah">
                            <div class="form-title">
                                <span>1</span>
                                <h3>Jamaah Pertama</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Depan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control first_name" id="first_name_0" name="data[0][first_name]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Belakang <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control last_name" id="last_name_0" name="data[0][last_name]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select class="form-control gender_0" name="data[0][gender]" id="gender_1">
                                            <option value="" selected="">Pilih Jenis Kelamin</option>
                                            <option value="M">Laki Laki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Ktp <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control nik_number" id="nik_number_0" name="data[0][nik_number]">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Handphone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control phone_number" id="phone_number_0" name="data[0][phone_number]">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hubungan Mahram/Pendamping <span class="text-danger">*</span></label>
                                        <select class="form-control relation_type" name="data[0][relation_type]" id="relation_type_0">
                                            <option value="" selected="">Pilih Hubungan</option>
                                            <option value="istri">Istri</option>
                                            <option value="suami">Suami</option>
                                            <option value="anak">Anak</option>
                                            <option value="ayah">Ayah</option>
                                            <option value="ibu">Ibu</option>
                                            <option value="adik">Adik</option>
                                            <option value="kakak">Kakak</option>
                                            <option value="mertua">Mertua</option>
                                            <option value="saudara">Saudara</option>
                                            <option value="lainya">Lainya</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="data[0][is_lead]" value="true">
                                <input type="hidden" name="package_detail_id" value="{{ $package->branch_package_detail_id }}">

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary float-left add-jamaah">Tambah Jamaah</button>
                                </div>
                            </div>
                        </div>


                        <div class="booking-content booking-content-template-hidden" id="booking-content-template-hidden">
                            <div class="form-title">
                                <span class="person-number">1</span>
                                <h3 class="person-number-text">Jamaah Pertama</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Depan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-data first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Belakang <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-data last_name" id="last_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select class="form-control input-data gender" id="gender">
                                            <option value="" selected="">Pilih Jenis Kelamin</option>
                                            <option value="M">Laki Laki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Ktp <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-data nik_number" id="nik_number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Handphone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-data phone_number" id="phone_number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hubungan Mahram/Pendamping <span class="text-danger">*</span></label>
                                        <select class="form-control input-data relation_type" id="relation_type">
                                            <option value="" selected="">Pilih Hubungan</option>
                                            <option value="istri">Istri</option>
                                            <option value="suami">Suami</option>
                                            <option value="anak">Anak</option>
                                            <option value="ayah">Ayah</option>
                                            <option value="ibu">Ibu</option>
                                            <option value="adik">Adik</option>
                                            <option value="kakak">Kakak</option>
                                            <option value="mertua">Mertua</option>
                                            <option value="saudara">Saudara</option>
                                            <option value="lainya">Lainya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary add-jamaah float-left">Tambah Jamaah</button>
                                    <button type="button" class="btn btn-warning delete-jamaah float-right">Hapus Jamaah</button>
                                </div>
                            </div>
                        </div>

                        <span id="room_val" class="hide">{{ $package->master_room_value }}</span>



                        {{--@for ($i = 1; $i <= $package->master_room_value-1; $i++)--}}
                        {{--<div class="booking-content booking-content-template" id="booking-content-template">--}}
                            {{--<div class="form-title">--}}
                                {{--<span class="person-number">{{$i+1}}</span>--}}
                                {{--@php--}}

                                {{--$personNumber = 0;--}}
                                {{--if($i == 0){--}}
                                    {{--$personNumber = 'Pertama';--}}
                                {{--}else if($i == 1){--}}
                                    {{--$personNumber = 'Kedua';--}}
                                {{--}else if($i == 2){--}}
                                    {{--$personNumber = 'Ketiga';--}}
                                {{--}else if($i == 3){--}}
                                    {{--$personNumber = 'Keempat';--}}
                                {{--}--}}

                                {{--@endphp--}}
                                {{--<h3 class="person-number-text">Jamaah {{$personNumber}}</h3>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Nama Depan <span class="text-danger">*</span></label>--}}
                                        {{--<input type="text" class="form-control first_name" name="data[{{ $i }}][first_name]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Nama Belakang <span class="text-danger">*</span></label>--}}
                                        {{--<input type="text" class="form-control last_name" name="data[{{ $i }}][last_name]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Jenis Kelamin <span class="text-danger">*</span></label>--}}
                                        {{--<select class="form-control gender" name="data[{{ $i }}][gender]" id="gender">--}}
                                            {{--<option value="" selected="">Pilih Jenis Kelamin</option>--}}
                                            {{--<option value="M">Pria</option>--}}
                                            {{--<option value="F">Wanita</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Nomor Ktp <span class="text-danger">*</span></label>--}}
                                        {{--<input type="text" class="form-control nik_number" name="data[{{ $i }}][nik_number]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Nomor Handphone <span class="text-danger">*</span></label>--}}
                                        {{--<input type="text" class="form-control phone_number" name="data[{{ $i }}][phone_number]">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Hubungan Mahram/Pendamping <span class="text-danger">*</span></label>--}}
                                        {{--<select class="form-control relation_type" name="data[{{ $i }}][relation_type]" id="country">--}}
                                            {{--<option value="" selected="">Pilih Hubungan</option>--}}
                                            {{--<option value="istri">Istri</option>--}}
                                            {{--<option value="suami">Suami</option>--}}
                                            {{--<option value="anak">Anak</option>--}}
                                            {{--<option value="ayah">Ayah</option>--}}
                                            {{--<option value="ibu">Ibu</option>--}}
                                            {{--<option value="adik">Adik</option>--}}
                                            {{--<option value="kakak">Kakak</option>--}}
                                            {{--<option value="mertua">Mertua</option>--}}
                                            {{--<option value="saudara">Saudara</option>--}}
                                            {{--<option value="lainya">Lainya</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-12">--}}
                                    {{--<button type="button" class="btn btn-primary add-jamaah float-left">Tambah Jamaah</button>--}}
                                    {{--<button type="button" class="btn btn-warning delete-jamaah float-right">Hapus Jamaah</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--@endfor--}}


                    </div>
                    </form>
                    <!-- step one form html end -->
                </div>
                <div class="col-lg-12">
                    <aside class="sidebar">
                        <div class="widget-bg widget-table-summary">
                            <div class="form-title">
                                <h3>Tipe Pembayaran</h3>
                            </div>
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
                            <div class="form-group submit-btn text-center">
                                <input type="submit" id="submit-booking" name="submit" value="Pesan Sekarang">
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        validation();
        $(document).ready(function(){
            // $(document).on('click', '.custom-checkbox',function(){
            //     let component = $('#agent_code');
            //     let hasHide = $(component).hasClass('hide-component');
            //     console.log(hasHide);
            //     if(hasHide){
            //         $('#form_agent').removeClass('hide-component');
            //         $('#agent_code').removeClass('hide-component');
            //     }else{
            //         $('#form_agent').addClass('hide-component');
            //         $('#agent_code').addClass('hide-component');
            //     }
            // });

            $(document).on('click', '.custom-checkbox',function(){
                if ($('#check').is(':checked') !== true) {
                    $('#check').checked = true;
                } else {
                    $('#check').checked = false;
                }

                if($('#check').is(':checked') === true){
                    $('#form_agent').removeClass('hide-component');
                    $('#agent_code').removeClass('hide-component');
                }else{
                    $('#form_agent').addClass('hide-component');
                    $('#agent_code').addClass('hide-component');
                }
            });

            $(document).on('click', '.checkbox-list',function(){
                if ($('#check').is(':checked') !== true) {
                    $('#check').checked = true;
                } else {
                    $('#check').checked = false;
                }

                if($('#check').is(':checked') === true){
                    $('#form_agent').removeClass('hide-component');
                    $('#agent_code').removeClass('hide-component');
                }else{
                    $('#form_agent').addClass('hide-component');
                    $('#agent_code').addClass('hide-component');
                }
            });

            validation();
            let maxVal = $('#room_val').text();

            if(maxVal == 1){
                $('.add-jamaah').hide();
            }

            $(document).on('click','.add-jamaah',function(){
                let countElements = $('.jamaah-conter').length+1;
                validation();
                let templateFoorm = $('#booking-content-template-hidden').clone();
                $(templateFoorm).removeClass('booking-content-template-hidden');
                $(templateFoorm).removeAttr('id');
                $(templateFoorm).addClass('jamaah-conter');

                $(templateFoorm).find('.input-data').each(function (el,dt) {
                    let id = $(this).attr('id');
                    $(dt).attr('id',id+'_'+(countElements-1));
                    $(dt).removeClass('input-data');
                    $(dt).attr('name','data['+(countElements-1)+']['+id+']');
                });
                $(templateFoorm).appendTo('.data-jamaah');

                validation();


                let jamaahPerson = numberPerson(countElements);
                $(templateFoorm).find('.person-number').text(countElements);
                $(templateFoorm).find('.person-number-text').text(jamaahPerson);
                $(templateFoorm).addClass('jamaah-conter-'+countElements);

                if(countElements > 1){
                    $(this).parent().find('.delete-jamaah').hide();

                }
                $(this).hide();

                if(countElements >= maxVal){
                    $(templateFoorm).find('.add-jamaah').hide();
                }
            });

            $(document).on('click','.delete-jamaah',function(){
                validation();
                let counter = $(this).closest('.booking-content').find('.person-number').text();
                let counterNow = counter - 1;
                let jamaahElem = $('.jamaah-conter-'+counterNow);
                if(counterNow == 1){
                    let jamaahFirstElem = $('.first-jamaah');
                    $(jamaahFirstElem).find('.add-jamaah').show();
                }
                $(jamaahElem).find('.add-jamaah').show();
                $(jamaahElem).find('.delete-jamaah').show();
                $(this).closest('.booking-content').remove();
            });


            $(document).on('click','#submit-booking',function(e){
                let valid = $("#myForm").valid();
                if(valid){
                    $.confirm({
                        title: 'Konfirmasi!',
                        theme: 'material',
                        columnClass: 'col-md-6',
                        content: 'Pastikan data yang anda masukkan sudah benar dan valid',
                        buttons: {
                            confirm: {
                                text: 'Konfirmasi',
                                btnClass: 'btn-blue',
                                action: function(){
                                    // $('#myForm').submit();
                                    let formToken = $('input[name="_token"]').val();
                                    let formMethod = $('input[name="_method"]').val();
                                    let agentCode = $('#agent_code').val();
                                    $.ajax({
                                        url: '{{ route('user.findCOde') }}',
                                        type: 'POST',
                                        data: {
                                            _token:formToken,
                                            _method:formMethod,
                                            data : agentCode
                                        },
                                        success: function( data, status, xhr ) {
                                           if(!data && agentCode){
                                               $.confirm({
                                                   columnClass: 'col-md-6',
                                                   title: 'Terjadi Kesalahan!',
                                                   content: '<p>Maaf kode agen (<b>'+agentCode+'</b>) tidak ditemukan.</p>',
                                                   type: 'red',
                                                   typeAnimated: true,
                                                   buttons: {
                                                       ok: {
                                                           text: 'Konfirmasi',
                                                           btnClass: 'btn-red',
                                                           action: function(){
                                                           }
                                                       }
                                                   }
                                               });
                                               return;
                                           }else{
                                               $('#myForm').submit();
                                           }
                                        },
                                        error: function( data, status ) {
                                            if ( status === 422 ) {
                                                return false;
                                            }
                                        }
                                    });
                                }
                            },
                            cancel:{
                                text: 'Cek lagi',
                                action: function(){
                                    return;
                                }
                            }
                        }
                    });
                }else{
                    $.confirm({
                        columnClass: 'col-md-6',
                        title: 'Terjadi Kesalahan!',
                        content: 'Mohon isi semua data yang diperlukan.',
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            ok: {
                                text: 'Konfirmasi',
                                btnClass: 'btn-red',
                                action: function(){
                                }
                            }
                        }
                    });
                }
            });

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

        function validation(){
            $("#myForm").validate({ errorElement: 'div' });

            $('select[id^="payment_type"]').each(function () {
                // console.log(this);
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Jenis pembayaran harus diisi.",
                    }
                })
            });

            $('textarea[id^="billing_address"]').each(function () {
                // console.log(this);
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Alamat penagihan harus diisi.",
                    }
                })
            });

            $('input[id^="first_name_"]').each(function () {
                // console.log(this);
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Nama depan harus diisi.",
                    }
                })
            });

            $('input[id^="last_name_"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Nama belakang harus diisi.",
                    }
                })
            });

            $('select[id^="gender_"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Jenis kelamin harus diisi.",
                    }
                })
            });

            $('input[id^="nik_number_"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Nomor KTP harus diisi.",
                    }
                })
            });

            $('input[id^="phone_number_"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Nomor HP harus diisi.",
                    }
                })
            });

            $('select[id^="relation_type_"]').each(function () {
                $(this).rules('add', {
                    required: true,
                    messages: {
                        required: "Hubungan mahram/pendamping harus diisi.",
                    }
                })
            });
        }
    </script>

@endsection
