<?php

$result = '';
$name= 'No name';
session_start();

if(isset($_GET['form'])){
    if($_GET['form']=='start'){
        echo 'Se ha creado, se debe ver';
        $_SESSION['admin'] = 'admin';
        $_SESSION['password'] = 'password';
        $result = $_GET['form'];
    }elseif($_GET['form']=='end'){
        echo 'Se ha destruido, no se debe ver';
        $result = $_GET['form'];
        session_destroy();
    }
}
    $name= isset($_POST['name'])?$_POST['name']:'No name';
    

    echo isset($_SESSION['admin'])?$_SESSION['admin']:'No user'.'<br/>';

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
    
    <form action="session.php?form=start" method="post">
        <input type="submit" value="Start session">
    </form>
    <form action="session.php?form=end" method="post">
        <input type="submit" value="Close session">
    </form>
    <form action="session.php" method="post">
        <input type="text" name="name" id="" placeholder="name">
        <input type="submit" value="Insert">
    </form>
    <h2>
        <?php echo $name;?>
    </h2>
    <?php if($name == 'if'){ ?>
        <p> If condicionado</p>
    <?php }else{ ?>
        <p>Else condicionado </p>
    <?php }?>

</body>
</html>