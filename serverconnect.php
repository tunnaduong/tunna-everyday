<?php 
// File serverconnect.php chứa các thông tin quan trọng cần thiết để kết nối với máy chủ
// Bổ sung dòng `require $_SERVER['DOCUMENT_ROOT'] . '/serverconnect.php';` ở các file cần kết nối với máy chủ
// Chỉnh sửa thông tin máy chủ một lần duy nhất ở 4 dòng này
////////////////////////////////////////////
//$maychu = "42.112.30.39";
//$tendangnhap = "fattiembt6od";
//$matkhau = "fEH4zpD6cR3sxC";
//$tendb = "fattiembt6od_members";
//$maychu = "localhost";
//$tendangnhap = "root";
//$matkhau = "";
//$tendb = "members";
$maychu = "us-cdbr-east-06.cleardb.net";
$tendangnhap = "b3861ad067f78e";
$matkhau = "b5660ec4";
$tendb = "heroku_e6de54bb91c7b51";
////////////////////////////////////////////
	$db = mysqli_connect($maychu, $tendangnhap, $matkhau, $tendb);
	$servername = $maychu;
	$username = $tendangnhap;
	$password = $matkhau;
	$dbname = $tendb;
	$conn = new mysqli($servername, $username, $password, $dbname);
	$DATABASE_HOST = $maychu;
	$DATABASE_USER = $tendangnhap;
	$DATABASE_PASS = $matkhau;
	$DATABASE_NAME = $tendb;
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Mã này giúp cho trang khỏi bị các ký tự Unicode kì lạ
	mysqli_set_charset($conn, 'UTF8');
	mysqli_set_charset($db, 'UTF8');
	mysqli_set_charset($con, 'UTF8');
?>
