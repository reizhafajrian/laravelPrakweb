class footer extends HTMLElement{
    connectedCallback(){
        this.render();
    }
    render()
    {   
        this.innerHTML=`
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap');
    *{  
        font-family: 'Nunito Sans', sans-serif;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    .container-footer{
    display: flex;
    flex-direction: column;
    margin: 0px auto;
    width: 1450px;
    max-width: 100%;
    background-color: #F9FDFF;
    margin-top: 50px;

        }
    .footer-content {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding-top: 35px;
    }
    .footer-content h5{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 800;
        color: #163F5B;
    }
    .menu p, .follow-us p{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #163F5B;
    }
    .ticketin{
        display: flex;
        flex-direction: column;
        width: 277px;
        text-align: center;
}

    .ticketin p{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #262627;
    }
    .follow-us p{
        display: inline-block;
    }
    .follow-us div{
        display: flex;
        flex
    }
    .copyright{
        align-items: center;
        text-align: center;
        padding: 10px;
        display: flex;
        justify-content: center;
    
    }
    .copyright p{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #163F5B;
        display: inline;
    }
    .menu p, .follow-us p{
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #163F5B;
    }
    .menu h5 {
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 800;
        color: #163F5B;
    }
    .follow-us div img{
        margin-right: 10px;
    }
        </style>
        <footer id="footer">
        <div class="container-footer">
        <div class="footer-content">
            <div class="ticketin">
                <div><img src="image/componentAssets/ic_footer_logo.svg" alt="footer-logo"></div>
                <div><p>TicketIN adalah sebuah platform marketplace untuk melakukan transaksi berupa penjualan dan pembelian tiket .</p></div>
            </div>
            <div class="menu">
                <h5>Menu</h5>
                <p>Home</p>
                <p>Tiket</p>
                <p>Tentang Kami</p>
                <p>Bantuan</p>
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
    `
    }

}
customElements.define("footer-tiket",footer);