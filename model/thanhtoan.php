<?php

function insert_thanhtoan($id_user, $hoTen, $address, $tel, $id_pay, $status)
{
    $sql = "INSERT INTO donhang(id_user,hoTen,address,tel,id_pay,status) VALUES ('$id_user','$hoTen','$address','$tel','$id_pay','$status')";
    pdo_execute($sql);
}
// function update_danhmuc($id, $name, $imgname)
// {
//     $sql = "UPDATE danhmuc SET name='$name', image='$imgname' WHERE id='$id'";
//     pdo_execute($sql);
// }
// function delete_danhmuc($id)
// {
//     $sql = "DELETE FROM danhmuc WHERE id='$id'";
//     pdo_execute($sql);
// }
// function loadAll_danhmuc()
// {
//     $sql = "SELECT * FROM danhmuc";
//     return pdo_query($sql);
// }
// function loadOne_danhmuc($id)
// {
//     $sql = "SELECT * FROM danhmuc WHERE id='$id'";
//     return pdo_query_one($sql);
// }
