import "../component/component.js"
const form=document.querySelectorAll(".form");
const click=document.querySelector(".no-account a");
const clickSignUp=document.querySelector(".have-account a");
import login from "./login.js"
import regist from "./regist.js"
window.onload=async()=>{
    click.onclick=()=>{
        let boolean=true
        if(boolean){
            form[1].className+=' active'
            form[0].className='form'
            boolean=false
        }else{
            form[1].className='form'
             form[0].className+=' active'
            boolean=true
        }
       
    }
    clickSignUp.onclick=()=>{
        let boolean=true
        if(boolean){
            form[0].className+=' active'
            form[1].className='form'
            boolean=false
        }
        else{
            form[1].className='form'
            form[0].className+=' active'
           boolean=true
        }
    }
}




