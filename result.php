<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- result -->
    <h3 class="text-center mt-5">la tua pass è:
        <?php echo $_SESSION["password"]; ?>
    </h3>

    <a href="./logout.php">logout</a>
</body>

</html>