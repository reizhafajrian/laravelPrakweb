<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Help</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/bantuan/bantuan.css">
    </head>
    <body>
  <header-tiket></header-tiket>
        <section class="onboarding-bantuan">
            <div class="onboarding-container">
                <div class="bg-image">
                    <img src="image/bantuanAssets/bg_onboarding.png" alt="">
                </div>
                <div class="message">
                    <h1>TicketIN</h1>
                    <p>PUSAT BANTUAN</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
                        </div>
                        <input placeholder="Apa yang Anda cari?" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
                <div class="onboarding-icon">
                    <img src="image/bantuanAssets/undraw_google_docs_jf93 1.png" alt="">
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
                                    <ul class="faq-link" type="none">
                                        <li class="card-li"><a id="li-1" href="#konten-faq">Cara Daftar</a></li>
                                        <li class="card-li"><a id="li-2" href="">Cara Ubah Kata Sandi</a></li>
                                        <li class="card-li"><a id="li-3" href="">Cara Ubah Nomor Ponsel</a></li>
                                        <li class="card-li"><a id="li-4" href="">Cara Ubah Alamat Email</a></li>
                                        <li class="card-li"><a id="li-5" href="">Lupa Kata Sandi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapsePesan">Pemesanan</a>
                            </div>
                            <div id="collapsePesan" class="collapse" data-parent="#faq">
                                <div class="card-body">Lorem ipsum..</div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseBayar">Pembayaran</a>
                            </div>
                            <div id="collapseBayar" class="collapse" data-parent="#faq">
                                <div class="card-body">Lorem ipsum..</div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapsePromo">Promo dan Voucher</a>
                            </div>
                            <div id="collapsePromo" class="collapse" data-parent="#faq">
                                <div class="card-body">Lorem ipsum..</div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapsePengembalian">Pengembalian Dana</a>
                            </div>
                            <div id="collapsePengembalian" class="collapse" data-parent="#faq">
                                <div class="card-body">Lorem ipsum..</div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card-header">
                                <a class="btn btn-link" data-toggle="collapse" href="#collapseCorona">Informasi Coronavirus</a>
                            </div>
                            <div id="collapseCorona" class="collapse" data-parent="#faq">
                                <div class="card-body">Lorem ipsum..</div>
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
                        <img src="image/bantuanAssets/pic1.png" alt="button daftar">
                        <p><br>
                            2. Masukkan alamat email, kata sandi, dan pilih tipe akun yang Anda inginkan<br>
                            3. Pastikan alamat emailmu sudah benar
                        </p>
                        <img src="image/bantuanAssets/pic2.png" alt="form daftar">
                        <p><br>4. Klik "Sign Up" dan pendaftaran berhasil!</p>
                    </div>
                </div>
            </div>
        </section>
        <footer-tiket></footer-tiket>
        <script type="module" src="js/component/component.js"></script>

    
   
    </body>
</html>
