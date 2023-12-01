<?php

function insert_chitietdonhang($id_donhang, $id_sanpham, $soluong, $price, $image, $name_sanpham, $id_ga, $id_nuoc, $id_mi, $id_khoai)
{
    $sql = "INSERT INTO chitietdonhang(id_donhang, id_sanpham, soluong, price, image, name_sanpham, id_ga ,id_nuoc, id_mi,id_khoai) VALUES ('$id_donhang', '$id_sanpham', '$soluong', '$price', '$image', '$name_sanpham', '$id_ga ','$id_nuoc', '$id_mi','$id_khoai')";
    pdo_execute($sql);
}
function load_chitietdonhang($id)
{
    $sql = "SELECT * FROM chitietdonhang WHERE id_donhang='$id'";
    return pdo_query($sql);
}
