// P6 - script.js
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  if (!form) return;

  form.addEventListener("submit", function (e) {
    const nama = document.getElementById("nama");
    if (nama && nama.value.trim() === "") {
      alert("Nama belum diisi ya!");
      e.preventDefault();
    } else {
      alert("Halo " + nama.value + ", pesan terkirim!");
    }
  });

  console.log("script.js P6 jalan");
});