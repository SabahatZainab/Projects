<?php
include "connect.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = "DELETE FROM `savedata` WHERE id = '$id'";
    $output = mysqli_query($connections , $delete) or die("Query Unsuccessful");

    if($output)
    {
        header("location: display.php");
    }else{
        echo "Error";
    }
}
?>