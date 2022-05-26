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
                            <span>{{ getDateIndoShort($package->basic_package_depature_date) }} </span>
                        </div>
                    </div>

                    <hr class="hr-package">

                    <div class="row">
                        <div class="col-sm text-left">
                            <span class="text-sm"><i class="fa fa-xs fa-stopwatch"></i> Durasi</span>
                        </div>
                        <div class="col-sm text-right">
                            <span>{{ $package->basic_package_duration }} Hari </span>
                        </div>
                    </div>

                    <hr class="hr-package">

                    <div class="row">
                        <div class="col-sm text-left">
                            <span class="text-sm"><i class="fa fa-xs fa-location-arrow"></i> Kota</span>
                        </div>
                        <div class="col-sm text-right">
                            <span>{{ $package->master_office_name }} </span>
                        </div>
                    </div>

                    <hr class="hr-package">


                    <div class="row">
                        <div class="col-sm text-left">
                            <span class="text-sm"><i class="fa fa-xs fa-plane"></i> Maskapai</span>
                        </div>
                        <div class="col-sm text-right">
                            <span>{{ $package->master_airline_name }} </span>
                        </div>
                    </div>

                    <hr class="hr-package">

                    <div class="row">
                        <div class="col-sm text-left">
                            <span class="text-sm"><i class="fa fa-xs fa-bed"></i> Kamar</span>
                        </div>
                        <div class="col-sm text-right">
                            <span>{{ $package->master_room_name }} </span>
                        </div>
                    </div>

                    <hr class="hr-package">

                    <div class="row">
                        <div class="col-sm text-left">
                            <span class="text-sm"><i class="fa fa-xs fa-hotel"></i> Hotel</span>
                        </div>
                        <div class="col-sm text-right">
                            <span>
                                @if(@$package->offering->offeringHotel)
                                    @foreach($package->offering->offeringHotel as $hotel)
                                        {{ ucwords(strtolower($hotel->hotel->name)) }},
                                    @endforeach
                                @else
                                    <span>N/A</span>
                                @endif
                            </span>
                            {{--<div class="rating-start" title="Rated 5 out of 5">--}}
                                {{--<span style="width: 60%"></span>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    <hr class="hr-package">
                </div>

            </div>
        </div>
        <div class="tab-pane" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="overview-content">
                <b>Harga Sudah Termasuk :</b>
                <ol>
                    <li>Tiket Pesawat kelas ekonomi (PP)</li>
                    <li>Visa Umroh</li>
                    <li>Pelengkapan Umroh (Koper, Tas Selempang, Tas Sandal, Jaket, dll)</li>
                    <li>Makan 3x/hari Menu Indonesia</li>
                    <li>Bimbingan Ibadah (Tour Leader/Muthawif)</li>
                    <li>City Tour Madinah-Mekah-Jedah</li>
                    <li>Bus Ac</li>
                    <li>Air Zam-zam 5 liter (jika diperbolehkan pihak Airline)</li>
                    <li>Akomodasi hotel selama di Tanah Suci sesuai pilihan paket </li>
                    <li>Pembekalan Ibadah Umroh (Pra Manasik) </li>
                    <li>Asuransi Perjalanan </li>
                    <li>Handling Airport Jakarta dan Saudi Arabia</li>
                </ol>

                <b>Harga Tidak Termasuk :</b>
                <ol>
                    <li>Passport</li>
                    <li>Suntik Meningitis</li>
                    <li>Kelebihan berat bagasi menurut ketentuan penerbangan </li>
                    <li>Keperluan pribadi (laundry, telp , tips, dan lain-lain)</li>
                    <li>Tiket Domestik dari dan ke Daerah</li>
                    <li>Kursi roda dan pemandu khusus </li>
                    <li>Akomodasi hotel dan transportasi di Jakarta</li>
                    <li>City Tour Khaibar Rp 680,000/orang</li>
                    <li>City Tour Madein Shaleh Rp 1,480,000/orang</li>
                    <li>Villa di Madein Shaleh jika menginap Rp 1,080,000/orang</li>
                    <li>City Tour Tabuk Rp 2,000,000/orang</li>
                    <li>City Tour Thoif Rp 850,000/orang</li>
                    <li>Pengiriman Perlengkapan ke Daerah</li>
                </ol>
            </div>
        </div>
        <div class="tab-pane" id="program" role="tabpanel" aria-labelledby="program-tab">
            <div class="itinerary-content">
                <h3>{{ $itinerary->title }} <span>( {{ @$package->basic_package_duration }} Hari )</span></h3>
                {{--<p>Dolores maiores dicta dolore. Natoque placeat libero sunt sagittis debitis? Egestas non non qui quos, semper aperiam lacinia eum nam! Pede beatae. Soluta, convallis irure accusamus voluptatum ornare saepe cupidatat.</p>--}}
            </div>
            <div class="itinerary-timeline-wrap">
                <ul>
                    @foreach($itinerary->detail as $detail)
                    <li>
                        <div class="timeline-content">
                            <div class="day-count"> <span>{{ $detail->sequence }}</span></div>
                            <h4>{{ $detail->program }}</h4>
                            <p>{{ $detail->description }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
            <div class="map-area">
                <div class="overview-content">
                    <b>Syarat</b>
                    <ol>
                        <li>Mengisi formulir pendaftaran </li>
                        <li>Passport Asli dengan nama minimal dua kata dan masa berlaku minimal 8 bulan</li>
                        <li>Copy KTP, Copy Bukti vaksin covid 19 (minimal 1&2)</li>
                        <li>Kartu vaksin Maningitis </li>
                        <li>Uang Muka Rp 10 Juta/orang (pembayaran dianggap syah jika melalui transfer rekening PT. Barokah Insan Muhsinin)</li>
                        <li>Penyerahan Buku Kuning  setelah suntik meningitis</li>
                    </ol>


                    <b>Pembatalan</b>
                    <p>Jika terjadi pembatalan jamaah akan dikenakan denda sebagai berikut:</p>
                    <ol>
                        <li>Pembatalan 1 hari setelah pendaftaran Rp 2,8 juta</li>
                        <li>Pembatalan 2 bulan sebelum keberangkatan 40% dari harga paket</li>
                        <li>Pembatalan 2 minggu sebelum keberangkatan 60% dari harga paket</li>
                        <li>Pembatalan 1 minggu sebelum keberangkatan 85% dari harga paket</li>
                        <li>Pembatalan di hari keberangkatan 100% dari harga paket</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
