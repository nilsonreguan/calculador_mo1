<?php
require('mpdf/mpdf.php');


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

$sql = "SELECT * FROM proyecto WHERE id='" . $idd . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
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
if ($proyecto1 = "choacorral") {
    $proyecto = '<img src="images/villas.png" style="width: 35%; margin-left: 33%;">';
}


$html = '<!DOCTYPE HTML>';
$html .= '<head>';
$html .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//TODO crear llamade de titulo desde base de datos
$html .= '<title>Palo Viejo App 2.0</title>';
$html .= '</head>';
$html .= '<body>';
//    <!-- Page Content-->
$html .= '<div id="content" class="snap-content">';
$html .= '<div class="content">';
$html .= '<div id="pages_maincontent">';
$html .= '<br/><br/>';
$html .= $proyecto;
$html .= '<div class="page-header"><h1>'.$casa.'</h1></div>';
$html .= '<p>' . $descripcion . '</p>';
$html .= '<h3>PRECIO SOLICITADO</h3>';
$html .= '<table class="table table-striped">';
$html .= '<tr><td>Valor de la casa</td><td>Q.' . $ValorDeCasa . '.-</td></tr>';
$html .= '<tr><td>Enganche</td><td>Q.' . $enganche . '.-</td></tr>';
$html .= '<tr><td>Plazo</td><td>' . $plazoDelPrestamo . ' Años</td></tr>';
$html .= '</table>';
$html .= '<p>' . $precio . '</p>';
$html .= '<p>' . $observaciones . '</p>';
$html .= '</div>'; // end #pages_maincontent
$html .= '</div>'; // end .container
$html .= '</div>'; // end #content . snap-content
$html .= '</body>';


$mpdf = new mPDF();
$mpdf->useDefaultCSS2 = false;
$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>


