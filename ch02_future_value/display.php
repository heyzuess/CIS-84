<?php
    $first_name = "";
    $last_name = "";

    if (isset($_GET['first_name'])) {
        $first_name  = $_GET['first_name'];
    }

    if (isset($_GET['last_name'])) {
        $last_name = $_GET['last_name'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Name Test </title>
    </head>
    <body>
        <h2>Welcome</h2>
        <p>FirstName: <?php echo $first_name ?></p>
        <p>LastName: <?php echo $last_name ?></p>
    </body>
</html>