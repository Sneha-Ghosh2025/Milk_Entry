<?php
include('method.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>enter date:</td>
                <td><input type="date" name="date" id=""></td>
            </tr>
            <tr>
                <td>enter milk quantity</td>
                <td><input type="text" name="quantity" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
                <td><input type="reset" value="reset" name="cancel"></td>
            </tr>
            <?php
                if(isset($_POST['submit']))
                {
                    $responce=addMilkEntery($_POST);
                    echo $responce;
                }
            ?>
        </table>
    </form>
    <table border="5px" width="50%">
        <tr align="center">
            <th>Date</th>
            <th>Quantity</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            $res=display();
            $records=mysqli_num_rows($res);
            if($records > 0)
            {
                while($row= mysqli_fetch_assoc($res))
                {
                    echo '
                    <tr align="center">
                        <td>'.$row["date"].'</td>
                        <td>'.$row["quantity"].'</td>
                        <td><a href="edit.php?id='.$row["id"].'">EDIT</a></td>
                        <td><a href="delete.php?id='.$row["id"].'">DELETE</a></td>
                    </tr>
                    ';
                }
            }
            else
            {
                echo "there is no data";
            }
        ?>
    </table>
</body>
</html>