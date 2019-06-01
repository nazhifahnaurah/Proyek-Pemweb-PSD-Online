<?php
    require_once('config.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("select * FROM login WHERE username='$username' AND password=md5('$password')");
$num = mysql_num_rows($sql);

if(isset($_POST['Login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("select * FROM login WHERE username='$username' && password=md5('$password')");
$num = mysql_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?>
<script language="JavaScript">alert('LOGIN SUKSES');
document.location=('indexx.php')</script>
<?php
}
else {
// jika login salah //
echo "<script>
eval(\"parent.location='indexx.php '\");
alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
</script>";
}
}
?>