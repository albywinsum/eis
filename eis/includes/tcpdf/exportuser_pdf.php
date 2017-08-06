<?php

$conn = new mysqli("localhost", "root", "00001994", "eis");
//include_once "../includes/connect.php";
require_once('examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
//Main Header
$header1 = <<<"EOD"
<h1><br>Environmental Evaluation System<a href="../home.php" style="text-decoration:none;background-color:teal;color:black;">&nbsp;<span style="color:white;">EI</span><span style="color:orange;">S </span></a></h1>
EOD;
//Report Title
$limit=1;
$validation="Released By.........................................(Date).......................";
$validation2="Signature....................... Official Stamp..................";
$header2 = <<<"EOD"
<h3>List Of Approved Experts (Firms and Individual)</h3>
EOD;
$report="Report No:........................";
 $sql = "SELECT @s:=@s+1 sNo, expert.* FROM expert , (select @s:=0) as s order by id asc";
 $result = $conn->query($sql);

$html = '<table align="center" border="1px">';
$html .= '<tr>	<th width="20" align="right"><b>No</b></th>
				<th width="30"><b>Reg No</b></th>
				<th width="100"><b>Name</b></th>
 				<th width="50"><b>Special</b></th>
 				<th width="100"><b>Address</b></th>
 				<th width="125"><b>Email and Phone No</b></th>
 				<th><b>Category</b></th>
 				<th><b>Date Registered</b></th></tr>';
while($row = $result->fetch_array()) {
$sNo = $row["sNo"];
$id = $row["id"];
$name = $row['fname']." ".$row['mname']." ".$row['lname'];
$spec = $row["spec"];
$address = $row["address"];
$cont = $row["email"]."<br>".$row["tele"];
$role = $row["role"];
$appldate = $row["appldate"];
// -----------------------------------------------------------------------------

 $html .= '<tr><td>'.$sNo.'</td>
 				<td>'.$id.'</td>
  				<td>'.$name.'</td>
 				<td>'.$spec.'</td>
 				<td>'.$address.'</td>
 				<td>'.$cont.'</td>
 				<td>'.$role.'</td>
 				<td>'.$appldate.'</td></tr>';
}
$html .= '</table>';
$pdf->writeHTMLCell(0, 17, '55', '', $header1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 15, '60', '', $header2, 0, 1, 0, true, '', true);
//$pdf->writeHTML($report);
$pdf->writeHTML($html); 
$pdf->writeHTMLCell(0, 20, '10', '', $validation, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '20', '', $validation2, 0, 1, 0, true, '', true);
$pdf->Output('expert_pdf.pdf', 'I');

?>