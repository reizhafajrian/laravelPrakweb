@extends('layout/template')
@section('title')
Pasang Acara
@endsection
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="styles/tiket/tiket.css">
@endsection
<!-- <img src="/image/pasangacara/Group 88@2x.png" alt=""> -->
<!-- <img src="/image/pasangacara/mdi_add_a_photo.png" alt=""> -->
@section('content')
<section class="pasang-tiket">
    <div class="img-container">
        <div class="img">
            <img src="/image/pasangacara/Group 88@2x.png" alt="">
        </div>
        <div class="form-container">
            <div>
                <h1>Pasang Acara Anda</h1>
            </div>
            <div class="form-total">
                <form action="pasangacara/postticket" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="container-1">
                        <div class="card image-upload">
                            <div class="title">
                                <h4>Foto Acara</h4>
                            </div>
                            <div class="container container-image">
                                <div class="form-group">

                                    <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple required>
                                </div>
                                <div class="card image">
                                    <!-- 
                                    <img src="storage/images/NodfjYSXoHMD55Wn5Gmj2yZz0GYp2P8dhyqOacYU.png" alt=""> -->
                                </div>
                                <!-- <div class="card image">
                                    <img src="\image\tiketAssets\image 10.png" alt="">
                                </div>
                                <div class="card image">
                                    <img src="\image\tiketAssets\image 10.png" alt="">
                                </div> -->
                            </div>
                        </div>
                        <div class="card form-1">
                            <div class="title">
                                <h4>Tempat Dan Waktu Acara</h4>
                            </div>
                            <div class="container container-form">
                                <div class="input">
                                    <label for="Lokasi">Lokasi</label>
                                    <input class="form-control" type="text" placeholder="Jakarta" name="lokasi" id="lokasi">
                                </div>
                                <div class="input">
                                    <label for="mulai">Waktu Mulai</label>
                                    <input placeholder="masukkan tanggal Awal" type="date" class="form-control datepicker" name="mulai" id="mulai" required>

                                </div>
                                <div class="input">
                                    <label for="Lokasi">Waktu Berakhir</label>
                                    <input placeholder="masukkan tanggal Awal" type="date" class="form-control datepicker" name="akhir" id="akhir" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card form-2">
                        <div class="title">
                            <h4>Detail Produk</h4>
                        </div>
                        <div class="input">
                            <label for="acara">Nama Acara/Kegiatan</label>
                            <input class="form-control" type="text" placeholder="DWP" name="namaacara" id="namaacara" required>
                        </div>
                        <div class="input">
                            <label for="kategori">Kategori</label>
                            <select id="kategori" name="kategori" class="custom-select custom-select-lg mb-3" required>
                                <option value="workshop">workshop</option>
                                <option value="konser">konser</option>
                                <option value="wahana">wahana</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="desc">Deskripsi Acara / Kegiatan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea" id="textarea" required></textarea>
                        </div>

                        <div class="input">
                            <label for="harga">Harga</label>
                            <div class="harga">
                                <div class="Rp">Rp</div>
                                <input class="form-control" type="number" placeholder="2000000" name="harga" id="harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="submit" id="save" class="btn btn-pill btn-success">Simpan</button>
                        <button type="button" id="batal" class="btn btn-pill btn-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>
<script src="/js/tiket/tiket.js"></script>
@endsection