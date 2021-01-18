// import "./header.js";
// import "./footer.js";



window.addEventListener('DOMContentLoaded', async(event) => {
     const manin=()=>{
        const login=document.querySelector(".login");
        const nav=document.querySelector("#navbarSupportedContent");
        const collapse=document.querySelector(".navbar-collapse")
        const mediaQuery = window.matchMedia('(max-width: 992px)')
        const butt=document.createElement("<button>test</button>")
        if(mediaQuery.matches){
            nav.removeChild(nav.childNodes[6])
            nav.removeChild(nav.childNodes[6])
            
        
        }
    }
    manin()
});





