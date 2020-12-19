class header extends HTMLElement{
    connectedCallback(){
        this.render();
    }
    render(){
        this.innerHTML=`


        <style>
       
        
        /*header stop*/
        </style>
      
    `;
    
}
}
customElements.define('header-tiket',header);