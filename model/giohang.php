<?php
function insert_giohang($id_user,$id_pro, $id_ga, $id_nuoc, $id_mi,$id_khoai,$soluong,$last_price){
    $sql = "INSERT INTO giohang(id_user, id_sanpham, id_ga, id_nuoc, id_mi, id_khoai, so_luong,last_price) VALUES ('$id_user','$id_pro', '$id_ga', '$id_nuoc', '$id_mi','$id_khoai','$soluong','$last_price')";
    pdo_execute($sql);
}
function loadAll_giohang_vsID($id)
{
    $sql = "SELECT giohang.* ,sanpham.name,sanpham.image,sanpham.soluong_ga,sanpham.soluong_nuoc,sanpham.soluong_mi,sanpham.soluong_khoai FROM giohang
    INNER JOIN sanpham ON giohang.id_sanpham = sanpham.id
    where id_user = '$id'";
    return pdo_query($sql);
}
function delete_giohang($id)
{
    $sql = "DELETE FROM giohang where id='$id'";
    return pdo_query($sql);
}
