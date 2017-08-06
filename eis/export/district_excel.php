<?php 
require_once "../includes/Classes/PHPExcel.php";
$servername = "localhost";
$username = "root";
$password = "00001994";
$dbname = "eis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Create your database query
$sql = "SELECT * FROM district";  

// Execute the database query
  $result = $conn->query($sql); 

// Instantiate a new PHPExcel object
$objPHPExcel = new PHPExcel(); 
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'S/N');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'District Name');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Region Name');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Population');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Human Activity');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Remarks');
// Initialise the Excel row number
$rowCount = 2;
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['did']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['dname']); 
     $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['rname']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['population']); 
     $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['activity']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['remarks']); 
     
    // Increment the Excel row counter
    $rowCount++; 
} 
header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="MyExcel.xlsx"');
header('Cache-Control:max-age=0');

// Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>