
<?php

//Perulangan For
for ($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i </h2>";
}

//Perulangan While
$ulangi = 0;
while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>"; 
    $ulangi++;
}

//Perulangan Do/While
$ulangi = 10;
do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi ;
} while ($ulangi > 0);
?>