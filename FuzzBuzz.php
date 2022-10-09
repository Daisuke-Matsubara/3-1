<?php
//FuzzBuzz問題

$num = 1;
while($num<101) {
    echo $num;
    $num++;
    echo '<br>';
}

if($num %3 === 0 ) {
    echo 'Fuzz!';
}

?>