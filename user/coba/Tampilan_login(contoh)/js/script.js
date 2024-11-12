// Contoh validasi form login atau pendaftaran
document.querySelector('form').addEventListener('submit', function (e) {
    let username = document.querySelector('input[name="username"]');
    let password = document.querySelector('input[name="password"]');

    if (username.value.trim() === "" || password.value.trim() === "") {
        alert("Semua kolom harus diisi!");
        e.preventDefault();  // Mencegah form dikirim
    }
});
