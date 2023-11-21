<?php

function insert_loaimi($name, $price, $image)
{
    $sql = "INSERT INTO loaimi(name, price, image) VALUES ('$name', '$price', '$image')";
    pdo_execute($sql);
}
function update_loaimi($id, $name, $price, $imgname)
{
    $sql = "UPDATE loaimi SET name='$name', price='$price', image='$imgname' WHERE id='$id'";
    pdo_execute($sql);
}
function delete_loaimi($id)
{
    $sql = "DELETE FROM loaimi WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_loaimi()
{
    $sql = "SELECT * FROM loaimi";
    return pdo_query($sql);
}
function loadOne_loaimi($id)
{
    $sql = "SELECT * FROM loaimi WHERE id='$id'";
    return pdo_query_one($sql);
    
}
