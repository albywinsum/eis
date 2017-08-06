<?php 
require_once "../includes/Classes/PHPExcel.php";

$objPHPExcel=new PHPExcel();

//Fill Vlue in Excel Sheet
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'User ID');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'District');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'District');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Region');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Mobile');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Email');

$objPHPExcel->getActiveSheet()->setTitle('My');

header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="MyExcel.xlsx"');
header('Cache-Control:max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

?>



