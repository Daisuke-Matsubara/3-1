<?php
//FuzzBuzz問題

$num = 1;
while($num<101) {
    if($num %3 === 0 ) {
        echo 'Fuzz!';
    } elseif ($num %5 === 0) {
        echo 'Buzz!';
    } elseif ($num %3 === 0 && $num %5 === 0) {
        echo 'FuzzBuzz!!';
    } else {
        echo $num;
    }
        $num++;
        echo '<br>';
}

for($num = 1 ; $num < 101 ; $num++) {
    if($num %3 === 0 ) {
        echo 'Fuzz!';
    } elseif ($num %5 === 0) {
        echo 'Buzz!';
    } elseif ($num %3 === 0 && $num %5 === 0) {
        echo 'FuzzBuzz!!';
    } else {
        echo $num;
    }
    echo '<br>';
}

?>