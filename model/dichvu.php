<?php

function insert_dichvu($title,$content,$image)
{

    $sql = "INSERT INTO dichvu(title,content,image) VALUES ('$title','$content','$image')";

    pdo_execute($sql);
}

function update_dichvu($id,$title,$content,$imgname)
{
    $sql = "UPDATE dichvu SET title='$title', content='$content', image='$imgname' WHERE id='$id'";

    pdo_execute($sql);
}
function delete_dichvu($id)
{
    $sql = "DELETE FROM dichvu WHERE id='$id'";
    pdo_execute($sql);
}
function loadAll_dichvu()
{
    $sql = "SELECT * FROM dichvu";
    return pdo_query($sql);
}
function loadOne_dichvu($id)
{
    $sql = "SELECT * FROM dichvu WHERE id='$id'";
    return pdo_query_one($sql);
}
?>
