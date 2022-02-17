<?php
//segitiga siku-siku
for ($i = 1; $i <= 8; $i++) {
	for ($x = 1; $x <= $i ; $x++) {
		echo $x;
	}
	echo '<br>';
}

//segitiga sama kaki
$j=5;
for($a=1; $a<=$j; $a++){
    for($b=$j; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
?>
