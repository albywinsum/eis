<?php

$conn = new mysqli("localhost", "root", "00001994", "eis");

require_once('../includes/tcpdf/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
//Main Header
$header1 = <<<"EOD"
<h1><br>Environmental Evaluation System<a href="../home.php" style="text-decoration:none;background-color:teal;color:black;">&nbsp;<span style="color:white;">EE</span><span style="color:orange;">S </span></a></h1>
EOD;
//Report Title
$limit=1;
$validation="Prepared By.........................................(Date).......................";
$validation2="Signature....................... Official Stamp..................";
$header2 = <<<"EOD"
<h3>List Of System Users and Their Respective Details</h3>
EOD;
$report="Report No:........................";
 $sql = "SELECT * FROM user order by userid asc";
 $result = $conn->query($sql);

$html = '<table width="570px" border="1px">';
$html .= '<tr>	<th><b>UserID</b></th>
				<th><b>Name</b></th>
				<th><b>Region</b></th>
				<th><b>District</b></th>
 				<th><b>Location</b></th>
 				<th><b>Email</b></th>
 				<th><b>Mobile</b></th></tr>';
while($row = $result->fetch_array()) {
$id = $row["userid"];
$fname = $row["fname"];
$lname = $row["lname"];
$mname = $row["mname"];
$covarage = $row["covarage"];
$population = $row["population"];
$activity = $row["activity"];
// -----------------------------------------------------------------------------

 $html .= '<tr><td>'.$id.'</td>
  				<td>'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>
 				<td>'.$row['rname']. '</td>
				<td>'.$row['dname']. '</td>
				<td>'.$row['location'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['mobile'].'</td></tr>';
}
$html .= '</table>';
$pdf->writeHTMLCell(0, 17, '55', '', $header1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 15, '60', '', $header2, 0, 1, 0, true, '', true);
//$pdf->writeHTML($report);
$pdf->writeHTML($html);
// $pdf->writeHTMLCell(0, 20, '10', '100', $validation, 0, 1, 0, true, '', true);
// $pdf->writeHTMLCell(0, 0, '20', '', $validation2, 0, 1, 0, true, '', true);
$pdf->Output('user_pdf.pdf', 'I');

?>
<th>Region</th>
                                        <th>District</th>
                                        <th>Location</th>
                                        <th>Email</th>
                                        <th>Mobile</th>