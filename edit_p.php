<?php 
session_start();
?>
<?php
require 'condb.php';
$sql = "UPDATE `personal_information` SET Member_id = :memberid, `img` = :img, `Prefix` = :prefix, `F_name` = :fname, `L_name` = :lname,
        `Sex`= :sex, `Date_of_birth` = :dateofbirth', `Studentcode` = :studentcode, `Phone`= :phone, `Email` = :email,
        `Highest_education` = :highesteducation, `Subject` = :subjectz, `Institute_for_further_study` = :instituteforfurtherstudy,
        `Country` = :country, `Graduation_year` = :graduationyear, `Company_name` = :companyname, `Job_position` = :jobposition,
        `Salary` = :salary WHERE Member_id = :memberid";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':memberid',$_SESSION['Member_id']);
$stmt->bindParam(':img', $_POST['Img']);
$stmt->bindParam(':prefix', $_POST['Prefix']);
$stmt->bindParam(':fname', $_POST['Fname']);
$stmt->bindParam(':lname', $_POST['Lname']);
$stmt->bindParam(':sex', $_POST['Sex']);
$stmt->bindParam(':dateofbirth', $_POST['Dateofbirth']);
$stmt->bindParam(':studentcode', $_POST['Studentcode']);
$stmt->bindParam(':phone', $_POST['Phone']);
$stmt->bindParam(':email', $_POST['Email']);
$stmt->bindParam(':highesteducation', $_POST['Highesteducation']);
$stmt->bindParam(':subjectz', $_POST['Subject']);
$stmt->bindParam(':instituteforfurtherstudy', $_POST['Instituteforfurtherstudy']);
$stmt->bindParam(':country', $_POST['Country']);
$stmt->bindParam(':graduationyear', $_POST['Graduationyear']);
$stmt->bindParam(':companyname', $_POST['Companyname']);
$stmt->bindParam(':jobposition', $_POST['Jobposition']);
$stmt->bindParam(':salary', $_POST['Salary']);


?>