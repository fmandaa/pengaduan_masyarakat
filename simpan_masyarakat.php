<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysqli_query($conn,"insert into masyarakat values('$nik','$nama','$user','$pass','$telp')");
if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data berhasil disimpan, silakan lanjut login!');
        window.location="index.php";
    </script>
<?php
}
?>