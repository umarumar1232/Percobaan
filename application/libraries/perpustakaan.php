<?php
class Perpustakaan{

    function Total($pinjam, $tersedia, $rusak, $dikembalikan){
        $Total = $pinjam + $tersedia + $rusak + $dikembalikan;
        echo "Total keseluruhan buku = $Total";
    }
    function b($a,$c,$d,$s){
        $Total = $a + $c + $d +$s;
        $b = $Total + 75;
        echo "Total buku setelah buku dikembalikan sebanyak 75 = $b buku";
    }  
    function c($a,$c,$d,$s){
        $Total = $a + $c + $d +$s;
        $n = $d * 0.2;
        $i = $Total - $n;
        echo "Total keseluruhan buku setelah 20% buku yang rusak dibuang = $i";
    }
} 
?>