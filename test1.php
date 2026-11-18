<?php
//1
echo "Ho va ten: Vo Phi Thai <br>"; //in ra thong tin
echo "ngay sinh: 24/05/2007 <br>";
echo "mssv: 2125110134 <br>";
echo "<br>";
//2
//KHAI BAO BIEN
$ht = "Vo Phi Thai<br>";
$mssv = "2125110134<br>";
$dt = "0377715207<br>";
$ngaysinh = "24/05/2007<br>";
//HIEN THI BIEN
echo "ho va ten la: ", $ht, "<br>";
echo "ma so sinh vien la: ", $mssv, "<br>";
echo "so dien thoai la: ", $dt, "<br>";
echo "ngay sinh la: ", $ngaysinh, "<br>";
echo "<br>";
//3
//KHAI BAO HANG SO
define("HOST", "localhost");
define("DATABASE", "qlsinhvien");
define("USERNAME", "vophithai");
define("PASSWORD", "12345");
//HIEN THI HANG SO
echo "HOST: ", HOST, "<br>";
echo "DATABASE: ", DATABASE, "<br>";
echo "USERNAME: ", USERNAME, "<br>";
echo "PASSWORD: ", PASSWORD, "<br>";
echo "<br>";
//4
//chuoi su dung dau nhay kep
echo "toi la $ht <br>"; //nhan gia tri tu bien
//chuoi su dungj dau nhay don
echo 'to la $ht <br>'; //khong nhan gia tri tu bien
echo "<br>";
?>