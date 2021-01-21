const submit = document.querySelector("#images")
submit.onchange = () => {
    if (submit.files.length !== 3) {
        alert("anda harus memasukan 3 foto")
        submit.value = ""
    }
}

const button = document.querySelector("#save");
const batal = document.querySelector("#batal")
const spinner = document.querySelector(".spinner-border")
const input = document.querySelectorAll("input")
button.onclick = () => {
    input.forEach(element => {
        if ()
    });

}