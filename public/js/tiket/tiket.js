// $("input:file").change(function (){
//     var fileName = $(this).val();
//     if(fileName.length >0){
// $(this).parent().children('span').html(fileName);
//     }
//     else{
//         $(this).parent().children('span').html("Choose file");

//     }
// });
// //file input previewlet 
let image=document.querySelector(".image-card > input");
// function readURL(input) {
//     if (input.files && input.files[0]) {
//             var reader = new FileReader();            
//             reader.onload = function (e) {
                
//             }
//             reader.readAsDataURL(input.files[0]);
//     }
// }
// .change(function(){
//         readURL(this);
// });
const simpan=document.getElementById('simpan');
const data=document.createElement('image-item');
const imageview=document.querySelector(".image-container")
let hasil=[]
image.onchange=async(e)=>{
    console.log(image.files[0])
    console.log(hasil)
    const objek=URL.createObjectURL(e.target.files[0]);
    await hasil.push(objek)
    if(hasil.length<4){
    data.innerHTML+=`<div class="image-card">
    <img src="${hasil[hasil.length-1]}" alt="">
    </div>`;
    imageview.appendChild(data);
        // const output=data.querySelector('img');
        // output.src=objek
// }
}
}
let imageform=new FormData();
imageform.append('file',image.files[0]);
const tes=document.querySelector('meta[name="csrf-token"]').contentconst 
let input = document.getElementById('file');

// This will upload the file after having read it
// const upload = (file) => {
//   fetch('http://localhost:8000/postgambar', {
     
//     method: 'POST',

//     body: file // This is your file object
//   }).then(
//     response => response.json() // if the response is a JSON object
//   ).then(
//     success => console.log(success) // Handle the success response object
//   ).catch(
//     error => console.log(error) // Handle the error response object
//   );
// };

// // Event handler executed when a file is selected
// const onSelectFile = () => upload(input.files[0]);

// // Add a listener on your input
// // It will be triggered when a file will be selected
// input.addEventListener('change', onSelectFile, false);