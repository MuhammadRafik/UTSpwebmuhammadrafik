<?php
if (isset($_GET['Muhammad Rafik'])) {
    $nama = htmlspecialchars($_GET['Muhammad Rafik']);
    echo "Halo, $nama!";
} else {
    echo "Nama tidak ditemukan di URL.";
}
?>