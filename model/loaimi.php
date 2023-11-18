<?php

// function insert_danhmuc($name,$image)
// {
//     $sql = "INSERT INTO danhmuc(name,image) VALUES ('$name','$image')";
//     pdo_execute($sql);
// }
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
function loadAll_loaimi()
{
    $sql = "SELECT * FROM loaimi";
    return pdo_query($sql);
}
// function loadOne_danhmuc($id)
// {
//     $sql = "SELECT * FROM danhmuc WHERE id='$id'";
//     return pdo_query_one($sql);
    
// }
