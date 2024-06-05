<?php
/*
include ("../../connection/connect.php");
    $product_name=$_POST['namepro'];
    $product_quantity=$_POST['countpro'];
    $product_giaban=$_POST['giabanpro'];
    $product_giavon=$_POST['giabanpro'];
    $product_category=$_POST['danhmucAddpro'];
    $product_state=$_POST['tinhtrangAddpro'];   
    //xulyhinhanh
    $hinhanh=$_FILES['imagepro']['name'];
    $hinhanh_tmp=$_FILES['imagepro']['tmp_name'];
    $hinhanh=time().'_'.$hinhanh;
    $dateAdd=date("d-m-y");
    if(isset($_POST['addproduct'])){
        $addproduct='INSERT INTO product(namePro, soluong, giaban, giavon, danhmuc, tinhtrang, hinhanh, timeadd) VALUES ("'.$product_name.'","'.$product_quantity.'","'.$product_giaban.'","'.$product_giavon.'","'.$product_category.'","'.$product_state.'","'.$hinhanh.'","'.$dateAdd.'")';
        $conn->exec($addproduct);
        move_uploaded_file($hinhanh_tmp,"../assets/img-add-pro/".$hinhanh);
        header('Location:../index.php?controller=addsanpham');
}
*/
