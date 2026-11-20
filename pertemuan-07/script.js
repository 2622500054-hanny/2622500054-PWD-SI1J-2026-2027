const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

navToggle.addEventListener("click", () => {
  const isOpen = navMenu.classList.toggle("nav-open");
  navToggle.setAttribute("aria-expanded", isOpen);
  if (isOpen) {
    navToggle.setAttribute("aria-label", "Tutup navigasi");
  } else {
    navToggle.setAttribute("aria-label", "Buka navigasi");
  }
});

const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const semesterInput = document.getElementById("semester");
const tanggalInput = document.getElementById("tanggal");
const prodiInput = document.getElementById("prodi");
const pesanInput = document.getElementById("pesan");

contactForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const nama = namaInput.value.trim();
  const email = emailInput.value.trim();
  const semester = Number(semesterInput.value);
  const tanggal = tanggalInput.value;
  const jenisPesan = document.querySelector('input[name="jenis_pesan"]:checked');
  const topikDipilih = document.querySelectorAll('input[name="minat"]:checked, input[name="minat[]"]:checked');
  const prodi = prodiInput.value;
  const pesan = pesanInput.value.trim();

  formFeedback.className = "form-feedback-error";

  if (nama.length < 3 || nama.length > 50) {
    formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
    return;
  }
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    formFeedback.textContent = "Masukkan alamat email yang valid.";
    return;
  }
  if (semesterInput.value === "" || semester < 1 || semester > 14) {
    formFeedback.textContent = "Semester harus diisi dengan angka 1 sampai 14.";
    return;
  }
  if (tanggal === "") {
    formFeedback.textContent = "Tanggal kunjungan harus diisi.";
    return;
  }
  if (!jenisPesan) {
    formFeedback.textContent = "Pilih jenis pesan.";
    return;
  }
  if (topikDipilih.length === 0) {
    formFeedback.textContent = "Pilih minimal satu topik yang diminati.";
    return;
  }
  if (prodi === "") {
    formFeedback.textContent = "Pilih program studi.";
    return;
  }
  if (pesan.length === 0) {
    formFeedback.textContent = "Pesan harus diisi.";
    return;
  }
  if (pesan.length > 300) {
    formFeedback.textContent = "Pesan maksimal 300 karakter.";
    return;
  }

  formFeedback.textContent = "Form berhasil divalidasi.";
  formFeedback.className = "form-feedback-success";
  contactForm.submit();
});

contactForm.addEventListener("reset", () => {
  formFeedback.textContent = "";
});

contactForm.addEventListener("input", () => {
  formFeedback.textContent = "";
});