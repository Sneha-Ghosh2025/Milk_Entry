<?php
    function addMilkEntery($data) 
    {
        $date=$data['date'];
        $quantity=$data['quantity'];

        $conn=mysqli_connect("localhost", "root", "", "reg");

        $sql="INSERT INTO form4(date, quantity) VALUES('$date', '$quantity')";

        $res=mysqli_query($conn, $sql);

        if($res==1)
        {
            return "SUCCESS";
        }
        else
        {
            return "FAILURE";
        }
    }
    function updateMilk($data)
    {
        $id=$_POST['id'];
        $date=$_POST['date'];
        $quantity=$_POST['quantity'];

        $conn=mysqli_connect("localhost", "root", "", "reg");

        $sql="UPDATE form4 set date='$date', quantity='$quantity' where id='$id'";

        $res=mysqli_query($conn, $sql);

        if($res==1)
        {
            return "SUCCESS";
        }
        else
        {
            return "FAILURE";
        }
    }
    
function deleteMilk($id)
{
       $conn=mysqli_connect("localhost", "root", "", "reg");

        $sql="DELETE FROM form4 where id='$id'";

        $res=mysqli_query($conn, $sql);

        return $res;
}

    function display()
    {
        $conn=mysqli_connect("localhost", "root", "", "reg");
        $sql="SELECT * FROM form4";
        $res=mysqli_query($conn, $sql);
        return $res;

    }
    function getData($id)
    {
            $conn=mysqli_connect("localhost","root","","reg");
            $sql="SELECT * FROM form4  where id = '$id'";
            $res=mysqli_query($conn ,$sql);
            return $res;
    }        
?>