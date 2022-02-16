<?php 

    if($_POST){
        print_r($_FILES['img']);
        move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
    }
    print_r($_POST);


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
    <form action="files.php" method="post" enctype="multipart/form-data">
        Select a file: <input type="file" name="img" id=""><br/>
        <input type="submit" name="send" value="Upload">

    </form>
</body>
</html>