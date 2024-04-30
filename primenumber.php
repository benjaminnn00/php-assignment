<?php
$i = 17;
$count = 0;
for($j=1;$j<=$i;$j++){
    if($i%$j==0){
        $count++;
    }
}

if($count==2){
    echo "Prime Number.";
}else{
    echo "Not Prime Number.";
}
?>