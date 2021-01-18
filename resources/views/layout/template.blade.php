<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/template/template.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
            <li class="nav-item dropdown">
                <div class="nav-item-user">
                    <img id="user" src="/image/asset/user.png" alt="">
                    {{ Auth::user()->name }}
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </div>
    </header>

    @yield('content')
    <footer id="footer">
        <div class="container-footer">
            <div class="footer-content">
                <div class="ticketin">
                    <div><img src="image/componentAssets/ic_footer_logo.svg" alt="footer-logo"></div>
                    <div>
                        <p>TicketIN adalah sebuah platform marketplace untuk melakukan transaksi berupa penjualan dan pembelian tiket .</p>
                    </div>
                </div>
                <div class="menu">
                    <h5>Menu</h5>
                    <a href="/home">Home</a>
                    <a href="/pesantiket">Tiket</a>
                    <a href="/tentangkami">Tentang Kami</a>
                    <a href="/bantuan">Bantuan</a>
                </div>
                <div class="follow-us">
                    <h5>Ikuti Kami</h5>
                    <div>
                        <img src="image/componentAssets/ic_instagram.svg" alt="">
                        <p>Ticket.in</p>
                    </div>
                    <div>
                        <img src="image/componentAssets/ic_youtube.svg" alt="">
                        <p>TicketIN Official</p>
                    </div>
                    <div>
                        <img src="image/componentAssets/ic_facebook.svg" alt="">
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
                <img src="image/componentAssets/ic_copyright.svg" alt="copyright">
                <p>2020 Copyright TicketIN</p>
            </div>
        </div>

    </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="module" src="js/component/component.js"></script>
</html>
