@extends('layout/template')
@section('title')
Home
@endsection
@section('css')
<link rel="stylesheet" href="/styles/home/home.css">
@endsection

@section('content')
        <section class="onboarding-home">
            <div class="container-onboard-home">
                <img id="img-onboard-home" src="image/homeAssets/bg_home.svg" alt="background-image/homeAssets">
                <div class="home-onboard">
                    <div class="home-text">
                        <div class="text-head">
                            <h1>Ayo TicketIN</h1>
                        </div>
                        <div class="text-paragraph">
                            <p>Kami selalu menyediakan tiket terbaik dengan harga termurah untuk 
                                kenyamanan anda, ayo pesan tiketmu di <span id="text-ticketin">TicketIN</span></p>
                        </div>
                        <div class="container-btn-order">
                            <a class="btn-order" href="{{url('pesantiket')}}">Pesan</a>
                        </div>
                    </div>
                    <div>
                        <img id="bg-ill-home" src="image/homeAssets/bg_travellers.svg" alt="image/homeAssets-travelers">
                    </div>
                </div>
            </div>
        </section>
        <section class="ticketin-superior">
            <div class="container-superior">
                <div class="superior-header">
                    <p>Keuntungan Menggunakan TicketIN</p>
                </div>
                <div class="superior-content">
                    <img id="line-superior" src="image/homeAssets/ic_line_superior.svg" alt="line">
                    <div class="superior-items">
                        <div class="ticket-type">
                            <img src="image/homeAssets/ic_ticket_type.svg" alt="ticket type">
                            <div>
                                <h5>Jenis Tiket</h5>
                            </div>
                            <div>
                                <p>Kamu bisa menjual berbagai jenis tiket tanpa terkecuali</p>
                            </div>
                        </div>
                        <div class="cheap">
                            <img src="image/homeAssets/ic_cheap.svg" alt="cheap">
                            <div>
                                <h5>Murah</h5>
                            </div>
                            <div>
                                <p>Dengan menggunakan ticketIN kamu dijamin mendapatkan harga tiket termurah</p>
                            </div>
                        </div>
                        <div class="flexible">
                            <img src="image/homeAssets/ic_flexible.svg" alt="flexible">
                            <div>
                                <h5>Fleksibel</h5>
                            </div>
                            <div>
                                <p>Kapanpun dimanapun kalian bisa selalu memesan tiket melalui TicketIN</p>
                            </div>
                        </div>
                        <div class="safe">
                            <img src="image/homeAssets/ic_safe.svg" alt="safe">
                            <div>
                                <h5>Aman</h5>
                            </div>
                            <div>
                                <p>Jangan takut bertransaksi karena TicketIN menjamin keamanan kamu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ticketin-recommend">
            <div class="container-recommend">
                <div class="recommend-header">
                    <p>Rekomendasi Jenis Tiket Terbaik</p>
                </div>
                <div class="recommend-content">
                    <div class="workshop">
                        <div>
                            <img src="image/homeAssets/ic_workshop.svg" alt="workshop">
                        </div>
                        <div>
                            <h5>Workshop</h5>
                        </div>
                        <div>
                            <p>Tiket dengan jenis Workshop adalah tiket yang digunakan dalam mengikuti sebuah workshop suatu topik pengetahuan di berbagai sektor pendidikan.</p>
                        </div>
                    </div>
                    <div class="concert">
                        <div>
                            <img src="image/homeAssets/ic_concert.svg" alt="concert">
                        </div>
                        <div>
                            <h5>Konser</h5>
                        </div>
                        <div>
                            <p>Tiket dengan jenis Konser adalah tiket yang digunakan untuk mengikuti sebuah acara pertunjukan baik pertunjukan musik, teater ataupun pertunjukan seni lain</p>
                        </div>
                    </div>
                    <div class="park">
                        <div>
                            <img src="image/homeAssets/ic_park.svg" alt="park">
                        </div>
                        <div>
                            <h5>Wahana</h5>
                        </div>
                        <div>
                            <p>Tiket dengan jenis Wahana adalah tiket yang digunakan untuk masuk kedalam sebuah wahana seperti wahana rumah hantu, permainan air dan wahana lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <script type="module" src="js/home/home.js"></script>
@endsection
