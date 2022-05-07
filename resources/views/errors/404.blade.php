@extends('layout.master')

@section('content')
<div class="no-content-section 404-page" style="background-image: url({{ asset('assets/images/404-img.jpg'); }});">
   <div class="container">
      <div class="no-content-wrap">
         <span>404</span>
         <h1>Halaman tidak ditemukan</h1>
         <h4>Sepertinya data yang anda cari tidak ada yang ditemukan di lokasi ini.</h4>
      </div>
   </div>
   <div class="overlay"></div>
</div>
@endsection
