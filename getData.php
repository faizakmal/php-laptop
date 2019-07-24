<?php  
 $sumber = 'input.json';
 $konten = file_get_contents($sumber);
 $datas = json_decode($konten, true);

 //echo count($datas['data']);

 //echo "<h1 align='center'>Jumlah Laptop ".count($datas['data'])."</h1>";
 //echo "<br/>";

 	for($a=0; $a < count($datas['data']); $a++){
 		$nomor [] = $datas['data'][$a]['i'];
 		$nama [] = $datas['data'][$a]['title'];
 		$harga [] = $datas['data'][$a]['prices'];

    		print "<tr>";
    		print "<td>".$nomor[$a]."</td>";
    		print "<td>".$nama[$a]."</td>";
    		print "<td> Rp. ".$harga[$a]."</td>";
    		print "</tr>";	

   	}


?>
