@extends('layout/template')
@section('title')
PesanTiket
@endsection
@section('css')
<link rel="stylesheet" href="/styles/pesantiket/pesantiket.css">
@endsection

@section('content')

<section class="onboarding-pesan-tiket">
  <div class="onboarding-container">
    <div class="background-image">
      <img src="/image/pesantiketAssets/background.png" alt="">
    </div>
    <div class="text-message">
      <h1>Pesan Sekarang</h1>
      <p>Berbagai aktivitas dapat kamu pilih untuk segera kamu ikuti, ayo pesan tiketmu di <a href="">TicketIN</a> </p>
    </div>
    <div class="image-icon">
      <img src="/image/pesantiketAssets/undraw_discount_d4bd 1.png" alt="">
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
    </div>
    <input placeholder="Temukan aktivitas terbaik disini" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
</section>
<section class="cari-ticket">
  <div class="cari-ticket-container">
    <div class="choice-item">
      <div class="menu-item-navigator">
        <div class="menu-item">
          <div class="item">
            <a href="">
              <img src="/image/pesantiketAssets/Kolaborasi/Group 246.png" alt="">
              <p>Semua</p>
            </a>
          </div>
          <img src="/image/pesantiketAssets/Line 2.png" alt="">
          <div class="item">
            <a href="">
              <img src="/image/pesantiketAssets/Kolaborasi/openmoji_roller-coaster.png" alt="">
              <p>Wahana</p>
            </a>
          </div>
          <img src="/image/pesantiketAssets/Line 2.png" alt="">
          <div class="item">
            <a href="">
              <img src="/image/pesantiketAssets/Kolaborasi/Ikon 1.png" alt="">
              <p>Workshop</p>
            </a>
          </div>
          <img src="/image/pesantiketAssets/Line 2.png" alt="">
          <div class="item">
            <a href="">
              <img src="/image/pesantiketAssets/Kolaborasi/Ikon 3.png" alt="">
              <p>Konser</p>
            </a>
          </div>

        </div>
        <!-- <div class="navigator"></div> -->

      </div>
      <div class="menu-tiket">
        <div class="text-menu-tiket">
          <h1>Pilih aktivitas</h1>
        </div>
        <div class="menu-tiket-item">
          @foreach($data as $tiket)
          <?php 
          $pricestring=number_format((float)$tiket->harga,0,'.',".");
          // $pricenew=implode(".",$pricestring);
          ?>
      
          <div class="card" style="width: 248.68px;">
          <a href="tiketdetail/{{$tiket->_id}}">
            <img src="{{$tiket->gambar[0]}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{$tiket->lokasi}}</p>
              <h5 class="card-title">{{$tiket->nama}}</h5>
              <p class="price-text">Rp.{{$pricestring}}</p>
            </div>
            </a>
            </div>
            @endforeach
          <!-- </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Tanggerang</p>
              <h5 class="card-title">Pamungkas Concert</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Bali</p>
              <h5 class="card-title">DWP X</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Surabaya</p>
              <h5 class="card-title">DSC UNAIR Weekly ..</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Jogjakarta</p>
              <h5 class="card-title">Campur Sari Concert</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Batu</p>
              <h5 class="card-title">Jatim Park 1</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">DKI Jakarta</p>
              <h5 class="card-title">WeTheFest</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div>
          <div class="card" style="width: 248.68px;">
            <img src="/image/pesantiketAssets/Rectangle 23_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">DKI Jakarta</p>
              <h5 class="card-title">WeTheFest</h5>
              <p class="price-text">Rp.1.050.000</p>
            </div>
          </div> -->

      </div>
    </div>
  </div>
  </div>
</section>


<script type="module" src="js/pesantiket/pesantiket.js"></script>
@endsection