const scriptURL = "https://script.google.com/macros/s/AKfycbwBxVPOAybK_dVs1grEaEU62FFzufmbCUVPyf9Wian5Kg7FpL3gn9E0IG5QVQ5HcVwz/exec";
const form = document.forms["absen-taruna"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => alert("Berhasil Absen!"))
    .catch((error) => alert("Error!", error.message));
});
