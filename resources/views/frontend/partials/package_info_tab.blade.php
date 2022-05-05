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
