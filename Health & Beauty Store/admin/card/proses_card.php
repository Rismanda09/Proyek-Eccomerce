<?php 
// Include file koneksi database
require_once '../../dbkoneksi.php';

// Ambil data dari form
$_code= $_POST['code'];
$_name = $_POST['name'];
$_discount = $_POST['discount'];
$_member_fee = $_POST['member_fee'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_code;
$ar_data[]=$_name;
$ar_data[]=$_discount;
$ar_data[]= $_member_fee;


if($_proses == "Update"){

    $sql = "INSERT INTO card (code,name,discount,member_fee) VALUES (?,?,?,?)";
}else if($_proses == "Update"){
   
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE card SET code=?,name=?,discount=?,member_fee=?,
    WHERE id=?";
}


if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar orders
header('location:card.php');
?>