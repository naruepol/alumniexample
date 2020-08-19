<?php include 'condb.php'; ?>

<?php 
$sql = "INSERT INTO personal_information (`img`, `Prefix`, `F_name`, `L_name`, `Sex`, `Date_of_birth`, `Studentcode`, `Phone`, `Email`, `Highest_education`, `Subject`, `Institute_for_further_study`, `Country`, `Graduation_year`, `Company_name`, `Job_position`, `Salary`)
VALUES (:img, :prefix,:fname, :lname, :sex, :dateofbirth, :studentcode, :phone, :email, :highesteducation, :subject, :instituteforfurtherstudy, :country, :graduationyear, :companyname, :jobposition, :salary);
        INSERT INTO current_address (`House_number`, `Swine`, `District`, `Canton`, `Province`, `Postal_code`) 
VALUES (:housenumber, :swine, :district, :canton, :province, :postalcode);
        INSERT INTO work_address (`House_number`, `Swine`, `District`, `Canton`, `Province`, `Postal_code`) 
VALUES (:housenumber2, :swine2, :district2, :canton2, :province2, :postalcode2);
    INSERT INTO member_se (`Username`, `Password`) 
VALUES (:user, :pass);
";
$stmt = $conn->prepare($sql);
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
$stmt->bindParam(':subject', $_POST['Subject']);
$stmt->bindParam(':instituteforfurtherstudy', $_POST['Instituteforfurtherstudy']);
$stmt->bindParam(':country', $_POST['Country']);
$stmt->bindParam(':graduationyear', $_POST['Graduationyear']);
$stmt->bindParam(':companyname', $_POST['Companyname']);
$stmt->bindParam(':jobposition', $_POST['Jobposition']);
$stmt->bindParam(':salary', $_POST['Salary']);

$stmt->bindParam(':housenumber', $_POST['Housenumber']);
$stmt->bindParam(':swine', $_POST['Swine']);
$stmt->bindParam(':district', $_POST['District']);
$stmt->bindParam(':canton', $_POST['Canton']);
$stmt->bindParam(':province', $_POST['Province']);
$stmt->bindParam(':postalcode', $_POST['Postalcode']);

$stmt->bindParam(':housenumber2', $_POST['Housenumber2']);
$stmt->bindParam(':swine2', $_POST['Swine2']);
$stmt->bindParam(':district2', $_POST['District2']);
$stmt->bindParam(':canton2', $_POST['Canton2']);
$stmt->bindParam(':province2', $_POST['Province2']);
$stmt->bindParam(':postalcode2', $_POST['Postalcode2']);

$stmt->bindParam(':user', $_POST['User']);
$stmt->bindParam(':pass', $_POST['Pass']);

if( $stmt->execute()):
    echo '<script>alert("ลงทะเบียนสำเร็จ")</script>';
    echo '<script>window.location="login.php"</script>';
else:
    echo '<script>alert("ลงทะเบียนไม่สำเร็จ")</script>';
    echo '<script>window.location="register.php"</script>';
endif;
$conn = null;
?>