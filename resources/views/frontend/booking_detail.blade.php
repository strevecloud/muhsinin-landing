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
                        <hr>
                        @if(@$payment->paymentType->name == 'Cash')
                            <p><b>Cara Pembayaran {{ @$payment->paymentType->name }} : </b></p>
                            <p>Silahkan Transfer ke Rekening BSI (Bank Syariah Indonesia)</p>
                            <p>Atas nama <b>PT Barokah Insan Muhsinin Cabang Depok Cinere</b></p>
                            <p>No rekening <b>8008282080</b> dan Lampirkan bukti transfer ke sistem.</p>
                        @else
                            <p><b>Cara Pembayaran {{ @$payment->paymentType->name }} :</b></p>
                            <p>- DP Rp 7 jt</p>
                            <p>- Upload KTP dan KK</p>
                            <p>- Isi Formulir</p>
                        @endif
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
                                        <td>{{ ($bookingDetail->gender == 'M') ? 'Laki Laki' : 'Perrempuan' }}</td>
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
                                <br>
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

                                        <tr>
                                            <td>
                                                <strong><b>Status Pemesanan</b></strong>
                                            </td>
                                            <td class="text-right">
                                                Booking
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
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Bukti Pembayaran</h3>
                            <div class="details-desc payment">
                                {{--<div class="container">--}}
                                    <div class="row clearfix">
                                        <div class="col-md-12 column">
                                            <table class="table table-bordered table-hover" id="tab_logic">
                                                <thead>
                                                <tr class="header-table">
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th class="text-center">
                                                        Keterangan
                                                    </th>
                                                    <th class="text-center">
                                                        Upload Bukti
                                                    </th>
                                                    <th class="text-center">
                                                        Jumlah Terkonfirmasi
                                                    </th>
                                                    <th class="text-center">
                                                        Status
                                                    </th>
                                                    <th class="text-center">
                                                        Aksi
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody id="body-table">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if(@$payment->payment->history)
                                                    @foreach(@$payment->payment->history as $history)
                                                    <tr id='first' class="new-row">
                                                        <td class="numbering">{{ $i }}</td>
                                                        <td>
                                                            <input type="text" id="note_1" placeholder='Tambah Catatan'
                                                                   value="{{ @$history->user_note ??  'Tidak Ada Catatan' }}"
                                                                   class="form-control input {{ @$history->id ? 'readonly' : '' }}"
                                                            />

                                                            <input type="hidden" id="hidden_1" value="{{ $booking->booking_code }}" class="form-control input"/>
                                                        </td>
                                                        <td class="text-center">
                                                            @if(@!$history->id)
                                                                <input type="file" id="file_1" placeholder='Upload Bukti' class="form-control input"/>
                                                            @else
                                                                <a class="btn btn-outline-info download" id="file_1" href="{{ getImageUrl(@$history->image_url) }}" rel="nofollow">Download</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <input type="text" id="amount_1" style="text-align: right" value="Rp. {{ @$history->billing_amount ?? 0 }}" class="form-control readonly input"/>
                                                        </td>
                                                        <td>
                                                            @php
                                                                $status = '';
                                                                if(@$history->status == 'need_approved'){
                                                                    $status = 'Menunggu Konfirmasi';
                                                                }else if(@$history->status == 'approved'){
                                                                    $status = 'Sudah Dikonfirmasi';
                                                                }else if(@$history->status == 'rejected'){
                                                                    $status = 'Permintaan Ditolak';
                                                                }
                                                            @endphp
                                                            <input type="text" id="status_1" value="{{ @$status }}" class="form-control readonly input"/>
                                                        </td>
                                                        <td class="text-center">
                                                            @if(@!$history->id)
                                                                <button type="button" id="submit_1" class="btn btn-primary submit">Kirim</button>
                                                            @else
                                                                <button type="button" id="submit_1" class="btn btn-outline-secondary">Terkirim</button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    @endforeach
                                                @else
                                                    <tr id='first' class="new-row">
                                                        <td class="numbering">1</td>
                                                        <td>
                                                            <input type="text" id="note_1" placeholder='Tambah Catatan' class="form-control input"/>
                                                            <input type="hidden" id="hidden_1" value="{{ $booking->booking_code }}" class="form-control input"/>
                                                        </td>
                                                        <td>
                                                            <input type="file" required id="file_1" placeholder='Upload Bukti' class="form-control input"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" style="text-align: right" id="amount_1" value="Rp. 0" class="form-control readonly input"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="status_1" value="Pending" class="form-control readonly input"/>
                                                        </td>
                                                        <td>
                                                            <button type="button" id="submit_1" class="btn btn-primary submit">Kirim</button>
                                                        </td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button id="add_row" class="btn btn-outline-primary pull-left">Tambah Kolom</button>
                                    <button id='delete_row' class="pull-right btn btn-outline-danger">Hapus Kolom</button>
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- step three form html end -->
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function(){

        $(document).on('click','#add_row',function(){
            let count = $('.new-row').length+1;
            console.log(count);
            let first = $('#first').clone();
            $(first).removeAttr('id');
            $(first).find('.numbering').text(count);
            $(first).find('#note_1').attr('id', 'note_'+count);
            $(first).find('#file_1').attr('id', 'file_'+count);
            $(first).find('#submit').attr('id', 'submit_'+count);
            $(first).find('#hidden_1').attr('id', 'hidden_'+count);
            $(first).find('#status_1').attr('id', 'status_'+count);
            $(first).find('#submit_1').attr('id', 'submit_'+count);
            $(first).find('#amount_1').attr('id', 'amount_'+count);
            $(first).attr('id','data-'+count);
            $(first).appendTo('#body-table');


            let elemSubmit = $('#submit_'+count);
            let elemDownload = $('#file_'+count);
            $('#note_'+count).removeClass('readonly');

            let hasDownload = $(elemDownload).hasClass('download');

            if(hasDownload){
                let upload = document.createElement('input');
                $(upload).attr('type', 'file');
                $(upload).attr('id','file_'+count);
                $(upload).addClass('form-control');
                $(upload).addClass('input');
                let parent = $('#file_'+count).parent();
                $('#file_'+count).first().remove();
                $(upload).appendTo(parent);
            }

            let hasSubmit = $(elemSubmit).hasClass('submit');
            if(!hasSubmit){
                $(elemSubmit).addClass('submit');
                $(elemSubmit).removeClass('btn-outline-secondary');
                $(elemSubmit).addClass('btn-primary');
                $(elemSubmit).text('Kirim');
            }

            $('#file_'+count).val('');
            $('#note_'+count).val('');
            $('#amount_'+count).val('Rp. 0');
            $('#status_'+count).val('Pending');
        });

        $(document).on('click','#delete_row',function(){
            let count = $('.new-row').length;
            console.log(count);
            let remove = $('#data-'+count).remove();
        });

        $(document).on('click','.submit',function(){
            let count = $('.new-row').length;
            console.log(count);
            let $this = $(this);

            let id = $(this).parent().parent().attr('id');
            let note = $('#note_'+count);
            let file = document.querySelector('#file_'+count).files[0];

            if(!file) {
                $.confirm({
                    columnClass: 'col-md-6',
                    title: 'Terjadi Kesalahan!',
                    content: 'File bukti pembayaran tidak boleh kosong!',
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
            }

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

                                let reader = new FileReader();
                                reader.readAsDataURL(file);
                                reader.onload = function () {
                                let result = reader.result.split(',')[1];

                                let formToken = $('input[name="_token"]').val();
                                let code = $('#hidden_'+count).val();
                                let note = $('#note_'+count).val();

                                $.ajax({
                                    url: '{{ route('payment.store') }}',
                                    type: 'POST',
                                    data: {
                                        _token:formToken,
                                        data : result,
                                        code : code,
                                        note : note
                                    },
                                    success: function( data, status, xhr ) {
                                        if(!data){
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
                                                            $('#status_'+count).text('Menunggu Konfirmasi');
                                                        }
                                                    }
                                                }
                                            });
                                            return;
                                        }else{
                                            if(!note){
                                                note = 'Tidak ada catatan';
                                            }
                                            $($this).removeClass('btn-primary');
                                            $($this).removeClass('submit');
                                            $('#status_'+count).val('Menunggu Konfirmasi');
                                            $($this).addClass('btn-outline-secondary');
                                            $($this).text('Terkirim');
                                            $('#note_'+count).val(note);
                                            $('#note_'+count).addClass('readonly');

                                            let download = document.createElement('a');
                                            $(download).attr('href', data);
                                            $(download).attr('id','file_'+count);
                                            $(download).attr('rel','nofollow');
                                            $(download).text('Download');
                                            $(download).addClass('btn btn-outline-info download');
                                            let parent = $('#file_'+count).parent();
                                            $('#file_'+count).first().remove();
                                            $(download).appendTo(parent);
                                        }
                                    },
                                    error: function( data, status ) {
                                        if ( status === 422 ) {
                                            return false;
                                        }
                                    }
                                });

                            };
                            reader.onerror = function (error) {
                                return null;
                            };

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

        });

    });
</script>
@endsection
