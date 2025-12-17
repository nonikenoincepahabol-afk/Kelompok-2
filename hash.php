<?php
/**
 * Program Sederhana PHP untuk Membuat Hash Password
 * * Gunakan hasil hash (string yang dimulai dengan $2y$10$) 
 * untuk dimasukkan ke kolom password di database.
 */

// 1. Tentukan password teks biasa yang Anda inginkan
$password_teks_biasa = 'admin123'; // <--- GANTI PASSWORD INI!

// 2. Buat hash menggunakan algoritma Bcrypt (DEFAULT)
// PASSWORD_DEFAULT saat ini menggunakan algoritma Bcrypt dan akan diperbarui 
// secara otomatis seiring waktu jika algoritma yang lebih baik muncul.
$password_hash = password_hash($password_teks_biasa, PASSWORD_DEFAULT);

// 3. Tampilkan hasilnya

echo "<h1>🔑 Hasil Hashing Password</h1>";
echo "<p>Password Teks Biasa: <strong>" . htmlspecialchars($password_teks_biasa) . "</strong></p>";
echo "<p>Panjang Hash: " . strlen($password_hash) . " karakter</p>";
echo "<h3>HASH YANG PERLU ANDA SIMPAN KE DATABASE:</h3>";
echo "<pre style='background-color: #f8f9fa; padding: 10px; border: 1px solid #dee2e6; word-break: break-all;'>";
echo $password_hash;
echo "</pre>";

echo "---";

// 4. Verifikasi (Opsional: untuk membuktikan hash berfungsi)
$verifikasi = password_verify($password_teks_biasa, $password_hash);
echo "<p>Status Verifikasi (dengan password yang sama): <strong>" . ($verifikasi ? 'BERHASIL' : 'GAGAL') . "</strong></p>";

?>