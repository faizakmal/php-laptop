<?php  
 $sumber = 'input.json';
 $konten = file_get_contents($sumber);
 $datas = json_decode($konten, true);

 //echo count($datas['data']);

 echo "<h1 align='center'>Jumlah Laptop ".count($datas['data'])."</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
  <input id="myInput" type="text" placeholder="Search..">
<br><br>
 <table border="1">
  <thead>
  <tr>
   <th>No</th>
   <th>Title</th>
   <th>Prices</th>
  </tr>
</thead>
<tbody id="myTable">
  <?php   
   for($a=0; $a < count($datas['data']); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    
    // menayangkan 
    print "<td>".$datas['data'][$a]['i']."</td>";
    print "<td>".$datas['data'][$a]['title']."</td>";
    print "<td>".$datas['data'][$a]['prices']."</td>";
    print "</tr>";
   }
  ?>
  </tbody>
 </table>
</body>

</html>