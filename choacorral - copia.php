<?php
//require('mpdf/mpdf.php');



$ValorDeCasa = $_GET['ValorDeCasa'];
$enganche = $_GET['enganche'];
$plazoDelPrestamo = $_GET['plazoDelPrestamo'];
$idd = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "destino7_pv";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM proyecto WHERE id='".$idd."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $id = $row["id"];
		$proyecto1 = $row["proyecto"];
		$casa = $row["casa"];
		$descripcion = $row["descripcion"];
		$precio = $row["precio"];
		$observaciones = $row["observaciones"];
    }
} else {
    echo "0 results";
}
$conn->close();
if ($proyecto1 = "choacorral"){
	$proyecto = '<img src="images/villas.png" style="width: 35%; margin-left: 33%;">';
}

echo '
<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Palo Viejo App 2.0</title>
<link href="css/bootstrap.css" 		 rel="stylesheet" type="text/css">
</head>
<body>  
    <!-- Page Content-->
    <div id="content" class="snap-content">         
           
        <div class="content">
            
			
			
		<div id="pages_maincontent">
		
		
		<br>
		<br>
		'.$proyecto.'
		
		<h2>'.$casa.'</h2>
		<br>
		'.$descripcion.'
		<br>
<h3>PRECIO SOLICITADO</h3>
<table class="table table-striped">
<tr><td>Valor de la casa</td><td>Q.'.$ValorDeCasa.'.-</td></tr>
<tr><td>Enganche</td><td>Q.'.$enganche.'.-</td></tr>
<tr><td>Plazo</td><td>'.$plazoDelPrestamo.' Años</td></tr>
</table>
<br>
'.$precio.'           
<br>
'.$observaciones.'      
      </div>	
			
			
			
			
        </div>     
        
    </div>
        
</div>
</body>';

//$mpdf=new mPDF();
//$stylesheet = file_get_contents('css/bootstrap.css');
//$mpdf->WriteHTML($html);
//$mpdf->WriteHTML($stylesheet,1);
//$mpdf->Output();
//exit;
?>

