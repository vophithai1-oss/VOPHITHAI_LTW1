<?php
//1
$a = 5;
$b = 8;
echo "ket qua cua phep cong la: ",($a + $b),"<br>";
echo "ket qua cua phep tru la: ",($a - $b),"<br>";
echo "ket qua cua phep nhan la: ",($a * $b),"<br>";
echo "ket qua cua phep chia la: ",($a / $b),"<br>";
echo "ket qua cua phep chia du la: ",($a % $b),"<br>";
echo "<br>";
//2 so sanh 2 bien
$a = 5; // bien int
$b = "8"; //bien string

echo "a == b: ";
var_dump($a == $b);
echo "<br>";
echo "a === b: ";
var_dump($a === $b);
echo "<br>";
echo "a != b: ";
var_dump($a != $b);
echo "<br>";
echo "a <> b: ";
var_dump($a <> $b);
echo "<br>";
echo "a !== b: ";
var_dump($a !== $b);
echo "<br>";

//3
//phep tang truoc
$x = 5;
echo "gia tri ban dau: ",$x,"<br>";
echo "phep tang truoc: ",++$x,"<br>";
echo "gia tri cua bien sau khi tang truoc: ",$x,"<br>";
echo "<br>";
//bien duoc cong 1 roi moi in ra
//phep tang sau
$x2 = 5;
echo "gia tri ban dau: ",$x2,"<br>";
echo "phep tang sau: ",$x2++,"<br>";
echo "gia tri cua bien sau khi tang sau: ",$x2,"<br>";
echo "<br>";
//bien in ra roi moi duoc cong them 1 vao

//4
$c1 = "Lap trinh";
$c2 = "php";

$kq = $c1."".$c2;
echo "dung dau cham: ",$kq,"<br>";
echo "<br>";
$c1.="".$c2;
echo "dung dau cham bang: ", $c1;
echo "<br>";
/*noi bang . khong thay doi bien ban dau, .= thi thay doi bien ban dau */
//5
$chuoi1 = "chuoi khong dau";
$chuoi2 = "chuỗi có dấu";
//dếm   
echo "do dai chuoi khong dau: ", strlen($chuoi1), "<br>";
echo "do dai chuoi co dau: ", mb_strlen($chuoi2), "<br>";
echo "<br>";
/*khong dau: se dem theo bit, 2 bit.
co dau: se bo qua ky tu co dau */

//6
$chuoivb = "Lập Trình php";
echo "chuyen hoa: ",strtoupper($chuoivb), "<br>"; //doi hoa
echo "chuyen thuong: ",strtolower($chuoivb), "<br>"; //doi thuong
echo "chuyen chu co dau thanh hoa: ", mb_strtoupper($chuoivb), "<br>"; //doi co dau thanh hoa
echo "chuyen chu co dau thanh thuong: ", mb_strtolower($chuoivb), "<br>"; //doi co dau thanh thuong

//7
$chuoi3 = "123 abc";
$chuoi4 = "abc 123";
$a = (int)$a;
$b = (int)$b;
var_dump($a);
echo "<br>";
var_dump($b);
//8
$bien1 = 10;
$bien2 = 10.5;
$bien3 = "hello world";
$bien4 = true;

var_dump($bien1);
echo "<br>";
var_dump($bien2);
echo "<br>";
var_dump($bien3);
echo "<br>";
var_dump($bien4);
echo "<br>";
?>
