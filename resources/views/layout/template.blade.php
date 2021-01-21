<!DOCTYPE html>
<html lang="en">

<head>
    <?php header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/template/template.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    @yield('css')

</head>

<body>
    <header class="header" id="header">

        <div class="container-header">
            <a href="/"><img class="logo" src="/image/componentAssets/bg_logo_ticketin.png" alt="logo-ticketin"></a>
            <nav class="nav-header">
                <ul class="nav-links">
                    <?php

                    use App\Http\Controllers\BerandaController;

                    $data = new BerandaController();
                    $seller = $data->data();
                    ?>
                    @if($seller=="seller")
                    <li class="li-header"><a class="hover-a-header" href="/">Home</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/pesantiket">Tiket</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/pasangacara">Pasang Acara</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/tentangkami">Tentang Kami</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/bantuan">Bantuan</a></li>
                    @else
                    <li class="li-header"><a class="hover-a-header" href="/">Home</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/pesantiket">Tiket</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/tentangkami">Tentang Kami</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/bantuan">Bantuan</a></li>
                    @endif
                </ul>
            </nav>
            @guest
            @if (Route::has('login'))
            <a href="/login"><button class="btn-login-header">Masuk</button></a>
            @endif
            @else
            <div class="accordion" id="accordionExample">
                <div>
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                        <img id="user" src="/image/asset/user.png" alt="">
                        {{ Auth::user()->name }}
                    </button>
                </div>
                <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>




            @endguest
        </div>
    </header>

    @yield('content')
    <footer id="footer">
        <div class="container-footer">
            <div class="footer-content">
                <div class="ticketin">
                    <div><img src="/image/componentAssets/ic_footer_logo.svg" alt="footer-logo"></div>
                    <div>
                        <p>TicketIN adalah sebuah platform marketplace untuk melakukan transaksi berupa penjualan dan pembelian tiket .</p>
                    </div>
                </div>
                <div class="menu">
                    <h5>Menu</h5>
                    <a href="/">Home</a>
                    <a href="/pesantiket">Tiket</a>
                    <a href="/tentangkami">Tentang Kami</a>
                    <a href="/bantuan">Bantuan</a>
                </div>
                <div class="follow-us">
                    <h5>Ikuti Kami</h5>
                    <div>
                        <img src="/image/componentAssets/ic_instagram.svg" alt="">
                        <p>Ticket.in</p>
                    </div>
                    <div>
                        <img src="/image/componentAssets/ic_youtube.svg" alt="">
                        <p>TicketIN Official</p>
                    </div>
                    <div>
                        <img src="/image/componentAssets/ic_facebook.svg" alt="">
                        <p>Ticket IN</p>
                    </div>
                </div>
                <div class="payment">
                    <h5>Payment</h5>
                    <br>
                    <img src="image/componentAssets/ic_payment.svg" alt="">
                </div>
            </div>
            <div class="copyright">
                <img src="/image/componentAssets/ic_copyright.svg" alt="copyright">
                <p>2020 Copyright TicketIN</p>
            </div>
        </div>

    </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script type="module" src="js/component/component.js"></script>

</html>