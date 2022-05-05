<!-- Home search field html start -->
<div class="trip-search-section shape-search-section">
    <div class="slider-shape"></div>
    <form action="" method="post">
        @csrf
        <div class="container">
        <div class="trip-search-inner white-bg d-flex">
            <div class="input-group col-md-3">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label> Lokasi Keberangkatan* </label>

                        <select class="form-control" name="city_branch" id="city_branch">
                            @foreach($offices as $office)
                                <option {{ @request()->city_branch == $office->id ? "selected" : "" }} value="{{ $office->id }}">{{ $office->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-group col-md-3">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label> Tipe Kamar* </label>
                        <select class="form-control" name="room_type" id="room_type">
                            @foreach($rooms as $room)
                                <option {{ @request()->room_type == $room->id ? "selected" : "" }} value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-group col-md-3">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label> Waktu Keberangkatan* </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker date-picker" name="departure_date" value="{{ @request()->departure_date }}" id="datepicker" type="text" name="s" placeholder="MM-YY" autocomplete="off" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="input-group col-md-3">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="screen-reader-text"> Search </label>
                        <input type="submit" name="travel-search" value="Cari Paket Umroh">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- search search field html end -->
