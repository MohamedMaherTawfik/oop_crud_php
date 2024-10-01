<?php 
$numbers=array(1,2,3,4,7,8,9,10);

for($i=1;$i<11;$i++){
    if($i==$numbers[$i]){
        continue;
    }
    else{
        echo $numbers[$i];
    }
}



?>