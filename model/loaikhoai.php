<?php

function insert_loaikhoai($name, $price, $image)
{
    $sql = "INSERT INTO loaikhoai(name, price, image) VALUES ('$name', '$price', '$image')";
    pdo_execute($sql);
}
function update_loaikhoai($id, $name, $price, $imgname)
{
    $sql = "UPDATE loaikhoai SET name='$name', price='$price', image='$imgname' WHERE id='$id'";
    pdo_execute($sql);
}
function delete_loaikhoai($id)
{
    $sql = "DELETE FROM loaikhoai WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_loaikhoai()
{
    $sql = "SELECT * FROM loaikhoai";
    return pdo_query($sql);
}
function loadOne_loaikhoai($id)
{
    $sql = "SELECT * FROM loaikhoai WHERE id='$id'";
    return pdo_query_one($sql);
}
