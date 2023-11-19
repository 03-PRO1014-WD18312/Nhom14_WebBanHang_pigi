<?php

function insert_loaiga($name, $price, $image)
{
    $sql = "INSERT INTO loaiga(name, price, imgname) VALUES ('$name', '$price', '$image')";
    pdo_execute($sql);
}
function update_loaiga($id, $name, $price, $image)
{
    $sql = "UPDATE loaiga SET name='$name',price='$price', image='$image' WHERE id='$id'";
    pdo_execute($sql);
}
function delete_loaiga($id)
{
    $sql = "DELETE FROM loaiga WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_loaiga()
{
    $sql = "SELECT * FROM loaiga";
    return pdo_query($sql);
}
function loadOne_loaiga($id)
{
    $sql = "SELECT * FROM loaiga WHERE id='$id'";
    return pdo_query_one($sql);

}
