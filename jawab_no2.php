<?php 
function urutkan($arr) {
    $jmlarr = count($arr)-1;
    for ($i=0; $i<$jmlarr; $i++) {
        for ($j=0; $j<$jmlarr-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr; //kembalikan nilai yang sudah disorting
}
//end bubble sort
 
//Contoh Penggunaan
$arr = array(20,12,35,11,17,9,58,23,69,21); //data angka yang akan disorting
echo "Deret Array sebelum diurutkan : </br>";
print_r($arr);
$arr = urutkan($arr); //gunakan fungsi sorting
 
//tampilkan hasil sorting
echo "</br></br> Deret Array setelah diurutkan : </br>";
print_r($arr); 

 ?>