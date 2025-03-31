<?php
    include('method.php');
    $id=$_GET['id'];
    $res=deleteMilk($id);
    if($res==1)
    {
        header('location: milk_display.php');
    }
?>