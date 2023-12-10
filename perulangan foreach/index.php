<?php
//Perulangan Foreach
$books = [
    "Panduan Belajar PHP untuk Pemula", 
    "Membangun Aplikasi Web dengan PHP", 
    "Tutorial PHP dan MySQL", 
    "Membuat Chat Bot dengan PHP" 
];

    echo "<h5>Judul Buku PHP:</h5>"; 
    echo "<ul>"; 
    foreach($books as $buku){ 
        echo "<li>$buku</li>";
    } 
    echo "\n";

//Perulangan Bersarang
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
    echo "Ini perulangan ke ($i, $j)<br>";
}
$i++;
}
?>