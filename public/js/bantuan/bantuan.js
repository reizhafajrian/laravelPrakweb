import main from "./search.js"
main();
var klik = document.getElementById("li-1");
var klik1 = document.getElementById("li-2");
var klik2 = document.getElementById("li-3");
var klik3 = document.getElementById("li-4");
var klik4 = document.getElementById("li-5");
var klik5 = document.getElementById("li-6");
var klik6 = document.getElementById("li-7");

var caraDaftar = document.getElementById("konten-faq")
var ubahEmail = document.getElementById("konten1-faq")
var lupaSandi = document.getElementById("konten2-faq")
var pesan = document.getElementById("konten3-faq")
var jual = document.getElementById("konten4-faq")
var bayar = document.getElementById("konten5-faq")
var hubungi = document.getElementById("konten6-faq")

klik.addEventListener("click", function() {
    klik.style.color = "#2F80ED"
    caraDaftar.style.display = "block"

    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik1.addEventListener("click", function() {
    klik1.style.color = "#2F80ED"
    ubahEmail.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik2.addEventListener("click", function() {
    klik2.style.color = "#2F80ED"
    lupaSandi.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik3.addEventListener("click", function() {
    klik3.style.color = "#2F80ED"
    pesan.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik4.addEventListener("click", function() {
    klik4.style.color = "#2F80ED"
    jual.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik5.addEventListener("click", function() {
    klik5.style.color = "#2F80ED"
    bayar.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik6.style.color = "rgba(0, 0, 0, 0.87)"
    hubungi.style.display = "none"
});

klik6.addEventListener("click", function() {
    klik6.style.color = "#2F80ED"
    hubungi.style.display = "block"

    klik.style.color = "rgba(0, 0, 0, 0.87)"
    caraDaftar.style.display = "none"
    klik1.style.color = "rgba(0, 0, 0, 0.87)"
    ubahEmail.style.display = "none"
    klik2.style.color = "rgba(0, 0, 0, 0.87)"
    lupaSandi.style.display = "none"
    klik3.style.color = "rgba(0, 0, 0, 0.87)"
    pesan.style.display = "none"
    klik4.style.color = "rgba(0, 0, 0, 0.87)"
    jual.style.display = "none"
    klik5.style.color = "rgba(0, 0, 0, 0.87)"
    bayar.style.display = "none"
});

/*
document.getElementById("myBtn").addEventListener("click", function() {
  alert("Hello World!");
});*/