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
<?php
    $id = $_GET['id'];

    $res = getData($id);

    $row = mysqli_fetch_assoc($res);
?>
    <form action="" method="post">
        <table>
            <tr>
                <td>enter date:</td>
                <td><input type="date" name="date" id="" value="<?php echo $row['date']?>"></td>
            </tr>
            <tr>
                <td>enter milk quantity</td>
                <td><input type="text" name="quantity" id="" value="<?php echo $row['quantity']?>"></td>
                <td><input type="hidden" name="id" placeholder="Enter Quantity" value="<?php echo $row['id']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
                <td><input type="reset" value="reset" name="cancel"></td>
            </tr>
            <?php
                if(isset($_POST['submit']))
                {
                    $responce=updateMilk($_POST);
                    echo $responce;
                }
            ?>
        </table>
    </form>
</body>
</html>