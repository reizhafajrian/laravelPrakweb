@extends('layout/template')
@section('title')
Bantuan
@endsection
@section('css')
 <link rel="stylesheet" href="/styles/bantuan/bantuan.css">
@endsection

@section('content')
<section class="onboarding-bantuan">
            <div class="onboarding-container">
                <div class="bg-image">
                    <img src="/image/bantuanAssets/bg_onboarding.png" alt="">
                </div>
                <div class="message">
                    <h1>TicketIN</h1>
                    <p>PUSAT BANTUAN</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button id="search-button">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                        <input id="search" placeholder="Apa yang Anda cari?" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="onboarding-icon">
                    <img src="/image/bantuanAssets/undraw_google_docs_jf93 1.png" alt="">
                </div>
            </div>
        </section>

        <section class="help-section">
            <div class="row">
                <div class="col-sm-4">
                    <div id="faq">
                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseAkun">Akun Saya</a>
                            </div>
                            <div id="collapseAkun" class="collapse show" data-parent="#faq">
                                <div class="card-body">
                                    <ul class="faq-link" type="none" id="Akun">
                                        <li class="card-li"><a id="li-1" href="#konten-faq">Cara Daftar</a></li>
                                        <li class="card-li"><a id="li-2" href="#konten1-faq">Cara Ubah Alamat Email</a></li>
                                        <li class="card-li"><a id="li-3" href="#konten2-faq">Lupa Kata Sandi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapsePesan">Pemesanan</a>
                            </div>
                            <div id="collapsePesan" class="collapse" data-parent="#faq">
                                <div class="card-body">
                                    <ul class="faq-link" type="none">
                                        <li class="card-li"><a id="li-4" href="#konten3-faq">Cara Melakukan Pemesanan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseJual">Penjualan</a>
                            </div>
                            <div id="collapseJual" class="collapse" data-parent="#faq">
                                <div class="card-body">
                                    <ul class="faq-link" type="none">
                                        <li class="card-li"><a id="li-5" href="#konten4-faq">Cara Menjual Tiket</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseBayar">Pembayaran</a>
                            </div>
                            <div id="collapseBayar" class="collapse" data-parent="#faq">
                                <div class="card-body">
                                    <ul class="faq-link" type="none">
                                        <li class="card-li"><a id="li-6" href="#konte5-faq">Cara Melakukan Pembayaran</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#konten6-faq" id="li-7">Kontak Lengkap</a>
                            </div>
                        </div> 
                    </div>
                    <div class="bantuan-lain">
                        <p>Butuh Bantuan Lain?</p>
                        <a href="#" class="btn btn-info" role="button">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-8">
                    <div id="konten-faq">
                        <h2>Bagaimana cara daftar di TicketIN ?</h2>
                        <p>1. Klik "Daftar"</p>
                        <img src="/image/bantuanAssets/pic1.png" alt="button daftar">
                        <p><br>
                            2. Masukkan alamat email, kata sandi, dan pilih tipe akun yang Anda inginkan<br>
                            3. Pastikan alamat emailmu sudah benar
                        </p>
                        <img src="image/bantuanAssets/pic2.png" alt="form daftar">
                        <p><br>4. Klik "Sign Up" dan pendaftaran berhasil!</p>
                    </div>

                    <div id="konten1-faq">
                        <h2>Bagaimana Cara Mengubah Alamat Email ?</h2>
                        <p>
                            1. “Masuk/Login” terlebih dahulu<br>
                            2. Klik nama kalian di pojok kanan atas <br>
                            3. Lalu pilih akun saya/setting<br>
                            4. Pilih ubah kata sandi<br>
                            5. Isi kata sandi anda dengan yang baru<br>
                            6. Isi konfirmasi kata sandi<br>
                            7. Klik “Simpan”
                        </p>
                    </div>

                    <div id="konten2-faq">
                        <h2>Bagaimana Jika Saya Lupa Kata Sandi ?</h2>
                        <p>
                            1. Masuk ke halaman “Masuk/Login”<br>
                            2. Klik “Lupa Kata Sandi”<br>
                            3. Isi email anda yang terhubung dengan akun TiketIN anda<br>
                            4. Buka email anda <br>
                            5. Klik “Reset Kata Sandi”<br>
                            6. Isi kata sandi anda dengan yang baru<br>
                            7. Isi konfirmasi kata sandi<br>
                            8. Klik “Simpan”<br>
                            9. Lakukan “Masuk/Login” seperti biasa

                        </p>
                    </div>

                    <div id="konten3-faq">
                        <h2>Bagaimana Cara Melakukan Pemesanan Tiket ?</h2>
                        <p>
                            1. Lakukan “Masuk/Login” terlebih dahulu<br>
                            2. Buka halaman “Home” lalu klik “Pesan”<br>
                            3. Pilih tiket mana yang akan dipesan<br>
                            4. Klik “Beli Tiket”<br>
                            5. Lakukan Pembayaran

                        </p>
                    </div>

                    <div id="konten4-faq">
                        <h2>Bagaimana Cara Menjual Tiket ?</h2>
                        <p>
                            1. Lakukan “Masuk/Login” terlebih dahulu<br>
                            2. Pastikan akun anda memiliki tipe “Seller/Penjual”<br>
                            3. Buka halaman “Home” lalu klik “Jual”<br>
                            4. Pilih gambar/poster yang akan di post<br>
                            5. Isi “Detail Produk” dan “Tempat dan Waktu Kegiatan Anda” sesuai dengan acara anda<br>
                            6. Lalu klik “Simpan

                        </p>
                    </div>

                    <div id="konten5-faq">
                        <h2>Bagaimana Cara Melakukan Pembayaran ?</h2>
                        <p>
                            1. Lakukan “Masuk/Login” terlebih dahulu<br>
                            2. Pesan tiket yang anda inginkan<br>
                            3. Akan muncul metode pembayaran, pilih metode pembayaran anda<br>
                            4. Setelah itu akan di beri kode briva<br>
                            5. Lalu lakukan pembayaran melalui ATM/M-Banking/Internet Banking<br>
                            6. Masukan Kode Briva tersebut<br>
                            7. Lihat kembali detail pembayaran<br>
                            8. Lakukan pembayaran

                        </p>
                    </div>

                    <div id="konten6-faq">
                        <h2>Anda Bisa Menghubungi kami melalui : </h2>
                        <p>
                            1. Call Center<br>
                            (021)12345678<br><br>
                            2. Sosial Media <br>
                            E-mail : tiketin@gmail.com<br>
                            Facebook : Tiket IN<br>
                            Instagram : Tiket.in<br>
                            Twitter : @TiketIN<br>
                            Youtube : TiketIN Official
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <script type="module" src="/js/bantuan/bantuan.js"></script>
@endsection
