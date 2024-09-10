<?php
require "includes/class_autoloader.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Connect</title>
</head>

<body>

    <?php
    $users = new Users();
    $users->getData();
    $users->getDataStmt('mike_jones');

    ?>

</body>

</html>