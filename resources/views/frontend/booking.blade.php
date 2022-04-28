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
                <div class="col-lg-8 right-sidebar">
                    <!-- step one form html start -->
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

                    <div class="data-jamaah">
                        <div class="booking-content jamaah-conter first-jamaah">
                            <div class="form-title">
                                <span>1</span>
                                <h3>Jamaah Pertama</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Depan*</label>
                                        <input type="text" class="form-control" name="firstname_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Belakang*</label>
                                        <input type="text" class="form-control" name="lastname_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Ktp*</label>
                                        <input type="email" class="form-control" name="email_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Handphone*</label>
                                        <input type="text" class="form-control" name="lastname_booking">
                                    </div>
                                </div>

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
                                        <label>Nama Depan*</label>
                                        <input type="text" class="form-control" name="firstname_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Belakang*</label>
                                        <input type="text" class="form-control" name="lastname_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Ktp*</label>
                                        <input type="email" class="form-control" name="email_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Handphone*</label>
                                        <input type="text" class="form-control" name="lastname_booking">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hubungan Dengan Orang Pertama*</label>
                                        <select class="form-control" name="country" id="country">
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
                    </div>
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
                                        Rp 28.900.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tipe Kamar</strong>
                                    </td>
                                    <td class="text-right">
                                        Quad
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Jumlah Jamaah</strong>
                                    </td>
                                    <td class="text-right">
                                        4
                                    </td>
                                </tr>
                                <tr class="total">
                                    <td>
                                        <strong>Total Harga</strong>
                                    </td>
                                    <td class="text-right">
                                        <strong>Rp 115.600.000</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group submit-btn text-center">
                                <input type="submit" name="submit" value="Pesan Sekarang">
                            </div>
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
