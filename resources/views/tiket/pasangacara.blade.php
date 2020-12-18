
@extends('layout/template')
@section('title')
Pasang Acara
@endsection
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="styles/tiket/tiket.css">
@endsection

@section('content')
    <section class="pasang-tiket">
        <div class="pasang-tiket-onboard">
            <div class="background-image">
                <img src="/image/pasangacara/Group 88@2x.png" alt="">
            </div>
            <div class="text"><h1>Pasang Acara Anda</h1></div>
            <div class="add-photo">
                <div class="title"><h2>Foto Acara</h2></div>
                <div class="image-container">
                <form method="POST" action="http://localhost:8000/postgambar" enctype="multipart/form-data">
                    @csrf
                    <div class="image-card">
                        <label for="file">
                        <img src="/image/pasangacara/mdi_add_a_photo.png" alt="">
                        </label>
                        <input type="file" name="file[]" id="file" multiple>
                        <button id="simpan" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detail-produk">
        <div class="detail-produk-container">
            <div class="title"><h2>Tempat an Waktu Kegiatan Anda</h2></div>
            <div class="form" >
                <form action="">
                    <div>
                    <label for="namaacara">Nama Acara/Kegiatan</label>
                    <input type="text" placeholder="nama acara">
                    </div>
                    <div>
                    <label for="namaacara">Nama Acara</label>
                    <input type="text">
                    </div>
                    <div>
                    <label for="namaacara">Nama Acara</label>
                    <textarea type="text-area" rows="4" cols="50" ></textarea> 
                    </div>
                </form>
            </div>
        </div>
       
    </section>
    
    <section class="tempat-waktu-kegiatan">
        <div class="tempat-waktu-container">
            <div class="title"><h2>Detail Produk</h2></div>
            <div class="form">
                <form action="">
                    <div>
                        <label for="lokasi">Lokasi</label>
                        <input type="text" placeholder="Nama acara">
                        </div>
                        <div>
                        <label for="waktumulai">Waktu Mulai</label>
                        <input type="date">
                        </div>
                        <div>
                        <label for="namaacara">Waktu Berakhir</label>
                        <input type="date">
                        </div>
                </form>
            </div>
        </div>
       
    </section>
    <section class="harga-tiket">
        <div class="harga-tiket-container">
            <div class="title"><h2>Harga Tiket</h2></div>
            <div class="form">
                <form action="">
                    <div>
                        <label for="harga">Rp</label>
                        <input type="number" >
                </form>
            </div>
        </div>
       
    </section>
    <section class="button">
        <button id="batal">Batal</button>
        <button id="simpan">Simpan</button>
    </section>

  
   <script src="js/tiket/tiket.js"></script>
@endsection