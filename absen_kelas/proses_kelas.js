const scriptURL = "https://script.google.com/macros/s/AKfycbyxqt5V6ERrK4Ayq2RkyMkWqndARAyeFr8s-ZsMIQBXEsuuOPB12M5qeVHpS9izqh2r/exec";
const form = document.forms["absensi"];
form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => alert("Berhasil Absen!"))
    .catch((error) => alert("Error!", error.message));
});
