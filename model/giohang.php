<?php
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
