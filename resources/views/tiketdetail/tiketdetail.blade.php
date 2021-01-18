@extends('layout/template')
@section('title')
Detail Tiket
@endsection
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/styles/tiketdetail/tiket.css">
@endsection
<!-- <img src="/image/pasangacara/Group 88@2x.png" alt=""> -->
<!-- <img src="/image/pasangacara/mdi_add_a_photo.png" alt=""> -->
@section('content')
    <section class="tiketinfo">
        <div class="tiket-info-contianer">
            <div class="background-image-tiket-info">
                <img src="/image/detailtiket/Group 248.png" alt="">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                </div>
                <input placeholder="Temukan aktivitas terbaik disini" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
    

        <div class="tiket-container">
            <div class="image-and-text-tiket">
                <div class="image-tiket-detail">
                <div class="image-tiket">
                    <img src="/{{$data->gambar[0]}}" alt="">
                </div>
                <div class="text-tiket">
                    <div class="title"><h1>{{$data->nama}}</h1></div>
                    <div class="penyedia"><p>{{$data->email}}</p></div>
                    <div class="info-text" ><p>{{$data->desc}} </p>
                    </div>
                </div>
            </div>
                <div class="more-image-container">
                    <div class="image-more">
                        <img src="/{{$data->gambar[0]}}" alt="">
                    </div>
                    
                    <div class="image-more">
                        <img src="/{{$data->gambar[1]}}" alt="">
                    </div>
                
          
                    <div class="image-more">
                        <img src="/{{$data->gambar[2]}}" alt="">
                    </div>
            
                </div>
             
            </div>
            <div class="harga-tiket-container">
                <div class="harga-button">
                    <h1>Harga</h1>
                    <h2>Rp.{{$data->harga}}</h2>
                    <button id="beli-tiket">Beli Tiket</button>
                </div>
                <div class="location">
                    <h1>Lokasi</h1>
                    <div class="logo-location">
                        <img src="/image/detailtiket/mdi_location_on.png" alt="">
                        <p>{{$data->lokasi}}</p>
                    </div>
                </div>
                <div class="date-and-time">
                    <h1>Tanggal,dan Waktu</h1>
                    <div class="logo-date-and-time">
                        <img src="/image/detailtiket/mdi_calendar_today.png" alt="">
                        <p>19, 20, 21, July 2021TA</p>
                    </div>
                    <div class="logo-date-and-time">
                        <img src="/image/detailtiket/mdi_access_time.png" alt="">
                        <p>15:00 - tba WIB</p>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection