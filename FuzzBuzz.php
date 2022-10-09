<?php
//FuzzBuzz問題

//while
$num = 1;
while($num<101) {
    if($num %3 === 0 && $num %5 === 0 ) {
        echo 'FuzzBuzz!!';
    } elseif ($num %3 === 0) {
        echo 'Fuzz!';
    } elseif ($num %5 === 0) {
        echo 'Buzz!';
    } else {
        echo $num;
    }
        $num++;
        echo '<br>';
}

//for
for($num = 1 ; $num < 101 ; $num++) {
    if($num %3 === 0 && $num %5 === 0) {
        echo 'FuzzBuzz!!';
    } elseif ($num %3 === 0) {
        echo 'Fuzz!';
    } elseif ($num %5 === 0) {
        echo 'Buzz!';
    } else {
        echo $num;
    }
    echo '<br>';
}

//do while
$num = 1;
do {
    if($num %3 === 0 && $num %5=== 0) {
        echo 'FuzzBuzz!!';
    } elseif ($num %3 === 0) {
        echo 'Fuzz!';
    } elseif ($num %5 === 0) {
        echo 'Buzz!';
    } else {
        echo $num;
    }
    $num++;
    echo '<br>';
} while($num < 101);

?>