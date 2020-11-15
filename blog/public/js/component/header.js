class header extends HTMLElement{
    connectedCallback(){
        this.render();
    }
    render(){
        this.innerHTML=`


        <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .header {
            box-shadow: 0px 2px 5px #ebebeb;
            width: 100%;
            z-index: 100;
            background-color: white;
        }
        
        .li-header a{
            font-family: 'Nunito Sans', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #262627;
            text-decoration: none;
            position: relative;
        }
        
        .hover-a-header::after{
            content: '';
            width: 0%;
            height: 3px;
            background: #1a6997;
            position: absolute;
            bottom: 0%; left: 50%;
            border-radius: 10px;
            transition: all 500ms ease;
          }
        
        .hover-a-header:hover::after{
            left: 0%;
            width: 100%;
          }
        nav ul{
            margin:0;
        }
        .container-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0px auto;
            padding: 20px 10%;
            width: 1450px;
            max-width: 100%;
        }
        
        .logo{
            cursor: pointer;
            width: 113px;
            height: 25px;
            margin: 0dp;
        }
        
        .nav-links{
            list-style: none;
        }
        
        .nav-links li {
            display: inline-block;
            padding: 0px 20px;
        }
        
        .btn-login-header{
            padding: 9px 25px;
            background-color: #D0EEFF;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: #006EAC;
            text-decoration: none;
            transition: all 0.5s ease 0s;
        }
        
        .btn-login-header:hover{
            background-color: #054A72;
            color: white;
        }
        
        /*header stop*/
        </style>
        <header class="header" id="header">
        <div class="container-header">
            <img class="logo" src="image/componentAssets/bg_logo_ticketin.png" alt="logo-ticketin">
            <nav class="nav-header">
                <ul class="nav-links">
                    <li class="li-header"><a class="hover-a-header" href="/">Home</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/pesantiket">Tiket</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/tentangkami">Tentang Kami</a></li>
                    <li class="li-header"><a class="hover-a-header" href="/bantuan">Bantuan</a></li>
                </ul>
            </nav>
            <a href="/login"><button class="btn-login-header">Masuk</button></a>
        </div>
    </header>
    `;
}
}
customElements.define('header-tiket',header);