<?php
require 'koneksi.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$status='belum ditanggapi';

$sql=mysqli_query($conn,"insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$foto','$status')");
move_uploaded_file($file, "foto/".$foto);

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Pengaduanmu berhasil disimpan, terima kasih atas laporan anda!')
        window.location="masyarakat.php";
    </script>
    <?php
}
?>