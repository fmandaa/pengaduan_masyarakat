<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;

    }
}
else
{
    ?>
    Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat, tempat pelaporan serta pengaduan masyarakat
    tentang kejadian yang melanggar juga menyimpang yang terjadi di lingkungan masyarakat <br><br>
    <h5> Anda login sebagai <b> <?php echo $_SESSION['nama']; 
}