<?php


$n = 5;

for($i=0;$i<10;$i++){
    echo '<b><p>'.$i.'</p></b>';
}


for($i=5;$i<10;$i++){
    echo '<b><p>'.$i*$n.'</p></b>';
}
$word ='H';
for($i=5;$i<10;$i++){
    $word.=$word;
    echo '<b><p>'.$word.'</p></b>';
}

$count = 0;

while(true){
    if($count>5){
        break;
    }else{
        $count++;
    }
    echo $count;
}

do{
    echo "This run at least one time";
}while(false);

?>