<?php $db = new mysqli("localhost", "root", "", "mysqlevidence"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Manufacturer Entry</h3>
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        $db->query("CALL manufacturer_insert_procedure('$name', '$address', '$contact')");
        if ($db->affected_rows) {
            echo "Success";
        }
    }
    ?>


    <form action="" method="post">
        <input type="text" name="name" placeholder="enter name"><br>
        <textarea name="address" placeholder="enter address"></textarea><br>
        <input type="text" name="contact" placeholder="enter contact"><br>
        <input type="submit" name="submit" value="CREATE">
    </form>

</body>

</html>