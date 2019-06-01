<?php
session_start();
session_destroy();
echo "<p align= 'center'>Anda Telah Keluar</p>";
echo "<meta http-equiv='refresh' content='2;
url=index.php'>";
?>