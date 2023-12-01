<?php

function insert_thanhtoan($id_user, $hoTen, $address, $tel, $id_pay, $status)
{
    $sql = "INSERT INTO donhang(id_user,hoTen,address,tel,id_pay,status) VALUES ('$id_user','$hoTen','$address','$tel','$id_pay','$status')";
    pdo_execute($sql);
}
function update_donhang($id, $id_user, $hoTen, $address, $tel, $id_pay, $status)
{
    $sql = "UPDATE donhang SET id_user='$id_user', hoTen='$hoTen', address='$address', tel='$tel', id_pay='$id_pay', status='$status' WHERE id='$id'";
    pdo_execute($sql);
}
function loadNew_donhang($id_user)
{
    $sql = "SELECT * FROM donhang WHERE id_user = '$id_user' order by id desc limit 0,1";
    return pdo_query($sql);
}
function loadAll_donhang()
{
    $sql = "SELECT * FROM donhang order by id desc";
    return pdo_query($sql);
}
function loadOne_donhang($id)
{
    $sql = "SELECT * FROM donhang WHERE id='$id'";
    return pdo_query_one($sql);
}
