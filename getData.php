<?php  
 $sumber = 'input.json';
 $konten = file_get_contents($sumber);
 $datas = json_decode($konten, true);

 //echo count($datas['data']);

 //echo "<h1 align='center'>Jumlah Laptop ".count($datas['data'])."</h1>";
 //echo "<br/>";

 	for($a=0; $a < count($datas['data']); $a++){
    	print "<tr>";
    	print "<td>".$datas['data'][$a]['i']."</td>";
    	print "<td>".$datas['data'][$a]['title']."</td>";
    	print "<td> Rp. ".$datas['data'][$a]['prices']."</td>";
    	print "</tr>";
   	}
?>
