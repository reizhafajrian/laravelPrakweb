<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="/styles/loginregist/loginregist.css">
    
    </head>
    <body>
       <header-tiket></header-tiket>
        <section>
            <div class="container-login-register">
                <div class="sign-in-up">
                    <div class="form active">
                        <form action="">
                        <div class="sign-in-header">
                            <h5>Sign in</h5>
                            <br>
                            <p>Masuk untuk melakukan transaksi di TicketIN</p>
                            <br>
                        </div>
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email-login" placeholder="Email" required>
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password-login" placeholder="Password" required>
                        </div>
                        <div class="check-forget">
                            <div class="check-box">
                                <input type="checkbox" id="logged-in" name="logged-in" value="true" required>
                                <label for="logged-in">Keep me logged in</label>
                            </div>
                            <div class="forgot-pass">
                                <a href="#">Lupa Password?</a>
                            </div>
                        </div>
                        <div class="btn-sign-in">
                            <button class="submit-login">Sign in</button>
                        </div>
                        <div class="no-account">
                            <p>Tidak punya akun?</p>
                            <a href="javascript:signUp()"> Sign up</a>
                        </div>
                    </form>
                    </div>
                    <div class="form">
                        <form method="post" action="{{url('login')}}">
                        @csrf
                        <div class="sign-up-header">
                            <h5>Sign up</h5>
                            <br>
                            <p>Isi datamu dan kamu siap untuk menggunakan TicketIN</p>
                            <br>
                        </div>
                        <div class="email">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email-register" placeholder="Email" required>
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password-register" placeholder="Password" required>
                        </div>
                        <div class="password">
                            <label for="conf-password">Password Confirmation</label>
                            <input type="password" name="conf-password" id="conf-password-register" placeholder="Confirm your password" required>
                        </div>
                        <div class="account-type">
                            <label for="account-type">Account type</label>
                            <select id="acc-type" name="accountype" required>
                                <option value="" disabled selected>Select your type</option>
                                <option value="buyer">Pembeli</option>
                                <option value="seller">Penjual</option>
                            </select>
                        </div>
                        <div class="check-box-acc">
                                <input type="checkbox" id="acc-terms" name="agreement" value="true" required>
                                <label for="acc-terms">I agree to the terms and conditions</label>
                            </div>
        
                        <div class="btn-sign-up">
                            <button class="submit-register" type="submit" >Sign up</button>
                        </div>
                        <div class="have-account">
                            <p>Sudah memiliki akun?</p>
                            <a href="#"> Sign in</a>
                        </div>
                    </div>
                </form>
                </div>
                <div class="login-illustration">
                    <img id="bg-login" src="/image/loginregistAssets/bg_login.svg" alt="">
                </div>
            </div>
        </section>
        <footer-tiket></footer-tiket>
        <script type="module" src="/js/loginregist/loginregist.js"></script>
     
    </body>
</html>
