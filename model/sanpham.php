<?php

function insert_sanpham($name, $price, $image, $description, $id_dm, $id_ga, $soluong_ga, $id_nuoc, $soluong_nuoc, $id_mi, $soluong_mi, $id_khoai, $soluong_khoai)
{
    $sql = "INSERT INTO sanpham(name,price,image,description,id_dm,id_ga,soluong_ga,id_nuoc,soluong_nuoc,id_mi,soluong_mi,id_khoai,soluong_khoai) 
    VALUES ('$name','$price','$image','$description','$id_dm','$id_ga','$soluong_ga','$id_nuoc','$soluong_nuoc','$id_mi','$soluong_mi','$id_khoai','$soluong_khoai')";
    pdo_execute($sql);
}
function update_sanpham($id, $name, $price, $image, $description, $id_dm, $id_ga, $soluong_ga, $id_nuoc, $soluong_nuoc, $id_mi, $soluong_mi, $id_khoai, $soluong_khoai)
{
    $sql = "UPDATE sanpham SET name='$name', price='$price',image='$image', description='$description', id_dm='$id_dm', id_ga='$id_ga', soluong_ga='$soluong_ga', id_nuoc='$id_nuoc',soluong_nuoc='$soluong_nuoc', id_mi='$id_mi', soluong_mi='$soluong_mi',id_khoai='$id_khoai',soluong_khoai='$soluong_khoai' WHERE id='$id'";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_sanpham()
{
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}
function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id='$id'";
    return pdo_query_one($sql);
}
function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,9";
    return pdo_query($sql);
}
