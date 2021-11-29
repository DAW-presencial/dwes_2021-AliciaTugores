<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ejercicio 6</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="file1">
            <input type="file" name="file2">
            <input type="submit" name="submit">
        </form>
    </body>

    <?php
        foreach($_FILES as $file){
            echo "<br>";
            echo "Características: ";
            echo "<br>";
            print_r("Name: ".$file['name']);
            echo "<br>";
            print_r("Type: " .$file['type']);
            echo "<br>";
            print_r("Size: ".$file['size']);
            echo "<br>";
            print_r("Tmp_name: ".$file['tmp_name']);
            echo "<br>";
            print_r("Error: ".$file['error']);
            echo "<br>";
        }
    ?>

</html>