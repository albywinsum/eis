<?php

$conn = new mysqli("localhost", "root", "00001994", "test");
//include_once "../includes/connect.php";
require_once('../includes/tcpdf/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
//Main Header
$header1 = <<<"EOD"
<h1><br>Well Come to TCPDF</h1>
EOD;
//Report Title
$limit=1;
$validation="Prepared By.........................................(Date).......................";
$validation2="Signature....................... Official Stamp..................";

$header2 = <<<"EOD"
<h3>List Of District and Their Respective Details</h3>
EOD;

$report="Report No:........................";
 $sql = "SELECT * FROM city";
 $result = $conn->query($sql);

$html = '<table align="center" width="550px" border="1px">';
$html .= '<tr>	<th><b>CITY ID</b></th>
				<th><b>CITY NAME</b></th>
 				<th><b>Country ID</b></th></tr>';
 				$name="Tonny";

 				$html2="<h3>My Name is".$name."</h3>";
while($row = $result->fetch_array()) {
$id = $row["city_id"];
$dname = $row["city_name"];
$rname = $row["country_id"];
// -----------------------------------------------------------------------------

 $html .= '<tr><td>'.$id.'</td>
  				<td>'.$dname.'</td>
 				<td>'.$rname.'</td></tr>';
}
$html .= '</table>';
$pdf->writeHTML($html2);
$pdf->writeHTMLCell(0, 17, '55', '', $header1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 15, '60', '', $header2, 0, 1, 0, true, '', true);
//$pdf->writeHTML($report);
$pdf->writeHTML($html); 
$pdf->writeHTMLCell(0, 20, '10', '', $validation, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '20', '', $validation2, 0, 1, 0, true, '', true);
$pdf->Output('tonny.pdf', 'I');

?>