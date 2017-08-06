<?php 
session_start();
require_once "../includes/Classes/PHPExcel.php";

$servername = "localhost";
$username = "root";
$password = "00001994";
$dbname = "eis";
$get=$_GET['agent'];


if ($_SESSION['role']!='ADMIN') {
    $user=$_SESSION['agent'];
    header("Location: test2.php"); }
    else {

 echo $_GET['agent'];

  exit();



//$option=$_POST['agent']
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Create your database query
$sql = "SELECT * FROM event ". $_GET['agent']." ";   

// Execute the database query
 
                                    
                                $result = $conn->query($sql);
                                // }
                                // else {

                                //    $result = $conn->query($sql2); 
                                 } 

// Instantiate a new PHPExcel object
$objPHPExcel = new PHPExcel(); 
$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setSize(10);
//$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFont()->setItalic(true);
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'S/N');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Category');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Agent');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Location');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'District');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Area Covered');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Time Exposure');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Reporter');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Remarks');
// Initialise the Excel row number
$rowCount = 2;
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = $result->fetch_array(MYSQLI_ASSOC)){ 


    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['id']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['category']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['agent']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['location']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['dname']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['covarage']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['period']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $row['reporter']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $row['remarks']); 
    $objRichText = new PHPExcel_RichText();
    // Increment the Excel row counter
    $rowCount++; 
} 
header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="event.xlsx"');
header('Cache-Control:max-age=0');

// Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>