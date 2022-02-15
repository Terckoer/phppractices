<?php
    $one = isset($_POST['number'])?$_POST['number']: 'no selected';

    echo $one.'<br/>';

    $checked = $one;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    
    <form action="radio.php" method="post">
        One<input type="radio" name="number" <?php echo ($checked=='one')?'checked':''; ?> id="" value="one"><br/>
        Two<input type="radio" name="number" <?php echo ($checked=='two')?'checked':''; ?> id="" value="two"><br/>
        Three<input type="radio" name="number" <?php echo ($checked=='three')?'checked':''; ?> id="" value="three"><br/>
        <input type="submit" value="Select">
    </form>
</body>
</html>