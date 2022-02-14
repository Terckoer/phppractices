<?php

$result = '';

if(isset($_POST)){
    if(isset($_POST['start'])){
        session_start();
        $_SESSION['admin'] = 'admin';
        $_SESSION['password'] = 'password';
        echo $_SESSION['admin'].'<br/>';
        $result = $_POST['start'];
    }else{
        $result = $_POST['end'];
        session_start();
        session_destroy();
    }
}
echo $result;


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
    <form action="session.php" method="post">
        <input type="hidden" name="start" value="ON">
        <input type="submit" value="Start session">
    </form>
    <form action="session.php" method="post">
        <input type="hidden" name="end" value="OFF">
        <input type="submit" value="Close session">
    </form>
</body>
</html>