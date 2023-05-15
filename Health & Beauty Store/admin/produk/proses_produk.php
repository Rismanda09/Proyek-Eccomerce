<?php 
// Include file koneksi database
require_once '../../dbkoneksi.php';

// Ambil data dari form
$_sku = $_POST['sku'];
$_name = $_POST['name'];
$_purchase_price = $_POST['purchase_price'];
$_sell_price = $_POST['sell_price'];
$_stock = $_POST['stock'];
$_min_stock = $_POST['min_stock'];
$_product_type_id = $_POST['type'];
$_restock_id = $_POST['restock'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_sku;
$ar_data[]=$_name;
$ar_data[]=$_purchase_price;
$ar_data[]= $_sell_price;
$ar_data[]=$_stock;
$ar_data[]=$_min_stock;
$ar_data[]=$_product_type_id;
$ar_data[]=$_restock_id;

if($_proses == "Update"){

    $sql = "INSERT INTO product (sku,name,purchase_price,sell_price,stock,
    min_stock,product_type_id,restock_id) VALUES (?,?,?,?,?,?,?,?,?)";
}else if($_proses == "Update"){


    $ar_data[]=$_POST['id'];
    $sql = "UPDATE product SET sku=?,name=?,purchase_price=?,sell_price=?,
    stock=?,min_stock=?,product_type_id=?,restock_id=?";
}

if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

header('location:produk.php');
?>