<?php 
include '../db_connection/dbconnection.php';
$id=$_GET['id'];
$select_loan="SELECT Bill_No FROM `loan` WHERE Loan_No='".$id."'";
$result = $conn->query($select_loan);
$row = $result -> fetch_assoc();
$update_payment_status="UPDATE bill SET Payment_Status='Paid' WHERE Bill_NO='".$row['Bill_No']."'";
$conn->query($update_payment_status);
$select_bill="SELECT b.Total_Amount,b.Income_No,i.Daily_Income FROM bill b INNER JOIN income i ON b.Income_No=i.Income_No WHERE Bill_NO='".$row['Bill_No']."'";
$result = $conn->query($select_bill);
$row = $result -> fetch_assoc();
$daily_income=$row['Total_Amount']+$row['Daily_Income'];
$update_daily_amount="UPDATE income SET Daily_Income='$daily_income' WHERE Income_No='".$row['Income_No']."'";
$conn->query($update_daily_amount);
$delete="DELETE FROM loan WHERE Loan_No=$id";
$conn->query($delete);
header('location:../../loan_record.php');
?>