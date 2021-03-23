const scriptURL = "https://script.google.com/macros/s/AKfycbxlqhchzk65fLzgpC0fke6YKqm_tpsISY70VSE8KRqYEk4ecGGTbW7s32rppuTOTUWVHQ/exec";
const form = document.forms["laporan-or"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      alert("Berhasil Absen!", response);
      form.reset();
    })
    .catch((error) => alert("Error!", error.message));
});
