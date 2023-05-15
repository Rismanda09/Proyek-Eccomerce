<?php 
require_once '../../dbkoneksi.php';

$_name = $_POST['name'];

$_proses = $_POST['proses'];

$ar_data[]=$_name;

if($_proses == "Update"){

    $sql = "INSERT INTO product_type (name) VALUES (?)";
    
}else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE product SET name=? WHERE id=?";
}

if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar type produk
header('location:type.php');
?>