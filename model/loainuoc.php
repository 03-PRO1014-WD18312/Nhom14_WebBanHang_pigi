<?php

function insert_loainuoc($name, $price, $image)
{
    $sql = "INSERT INTO loainuoc(name, price, image) VALUES ('$name', '$price', '$image')";
    pdo_execute($sql);
}
function update_loainuoc($id, $name, $price, $imgname)
{
    $sql = "UPDATE loainuoc SET name='$name', price='$price', image='$imgname' WHERE id='$id'";
    echo $sql ;
    pdo_execute($sql);
}
function delete_loainuoc($id)
{
    $sql = "DELETE FROM loainuoc WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_loainuoc()
{
    $sql = "SELECT * FROM loainuoc";
    return pdo_query($sql);
}
function loadOne_loainuoc($id)
{
    $sql = "SELECT * FROM loainuoc WHERE id='$id'";
    return pdo_query_one($sql);
}
