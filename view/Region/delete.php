<?php
//button supprimer
if (isset($_GET['delete']))
{
$id = $_GET['delete'];
$sql = "DELETE FROM gestion WHERE id='$id'";
$query = 'mysql_query'($sql);
if ($query)
{
    echo "supprimer sucess!";
}
}
?>