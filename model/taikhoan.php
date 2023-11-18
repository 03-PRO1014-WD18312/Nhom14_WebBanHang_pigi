<?php

function loadAll_role()
{
    $sql = "SELECT * FROM role";
    return pdo_query($sql);
}

function insert_taikhoan($user, $pass, $hoten, $image, $email, $address, $tel, $id_role)
{
    $sql = "INSERT INTO taikhoan(user, pass, hoten, image, email, address, tel, id_role) VALUES ('$user', '$pass', '$hoten', '$image', '$email','$address', '$tel', '$id_role')";
    pdo_execute($sql);
}
function update_taikhoan($id, $user, $pass, $hoten, $image, $email, $address, $tel, $id_role)
{
    $sql = "UPDATE taikhoan SET user='$user', pass ='$pass', hoten='$hoten', image='$image', email='$email', address='$address', tel='$tel', id_role='$id_role' WHERE id='$id'";
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_taikhoan()
{
    $sql = "SELECT * FROM taikhoan";
    return pdo_query($sql);
}
function loadOne_taikhoan($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id='$id'";
    return pdo_query_one($sql);
}
// Login
function check_user($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
    return pdo_query_one($sql);
}
function check_user_forgot($user, $email)
{
    $sql = "SELECT * FROM taikhoan WHERE user='$user' and email='$email' and id_role = '2'";
    return pdo_query_one($sql);
}
function update_pass($id, $pass)
{
    $sql = "UPDATE taikhoan SET pass ='$pass' WHERE id='$id'";
    pdo_execute($sql);
}
