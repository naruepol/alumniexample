<?php 
session_start();
?>
<html>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->

<head>
<title> Software Engineering </title>
</head>
<body>
<?php
    include ('condb1.php');
    $id = $_SESSION['Member_id'];

        $strProductid = $_GET["id"];
        $sql = "SELECT * FROM personal_information WHERE Member_id = '".$id."';";
        $sql_run = mysqli_query($con,$sql);
        $result = mysqli_fetch_assoc($sql_run);
?>

<?php
        $sql1 = "SELECT * FROM current_address WHERE Member_id = '".$id."';";
        $sql_run1 = mysqli_query($con,$sql1);
        $result1 = mysqli_fetch_assoc($sql_run1);
?>

<?php
        $sql2 = "SELECT * FROM work_address WHERE Member_id = '".$tid."';";
        $sql_run2 = mysqli_query($con,$sql2);
        $result2 = mysqli_fetch_assoc($sql_run2);
?>

<div class="container mt-3">
<form class="border border p-5" action="edit_p.php" method="POST">

<div class="container-fluid mt-5">
<center><div class="row">
<div class="col-2 ml-5">
<img src="img/npru-logo.png" width="180" height="200">
</div>
<div class="col-7"><br><br><br>
<h5><strong>แบบฟอร์มลงทะเบียนข้อมูลศิษย์เก่าสาขาวิศวกรรมซอฟต์แวร์<br>มหาลัยราชภัฏนครปฐม</strong></h5>
</div>
<div class="col-2">
<img src="img/img-user/<?php echo $result['img']; ?>" width="150" height="180">
<input type="file" name="Img">
</div>
<center>
</div>
</div>
<br>
<h4>1.ข้อมูลส่วนตัว</h4>
<div class="row">
    <div class="col-2">
    <input type="text" class="form-control" name="Prefix" value="<?php echo $result['Prefix']; ?>">
    </div>
    <div class="col-1">
    <label class="form-label ml-3">ชื่อ</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Fname" value="<?php echo $result['F_name']; ?>">
    </div>
    <div class="col-1">
    <label class="form-label">นามสกุล</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Lname" value="<?php echo $result['L_name']; ?>">
    </div>
</div>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">เพศ</label>
    </div>
    <div class="col-2">
    <input type="text" class="form-control" name="Sex" value="<?php echo $result['Sex']; ?>">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-2">
        <input type="text" class="form-control" name="Dateofbirth" value="<?php echo $result['Date_of_birth']; ?>">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">รหัสนักศึกษา</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Studentcode" value="<?php echo $result['Studentcode']; ?>">
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <label>ที่อยู่ปัจจุบัน</label>
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">บ้านเลขที่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Housenumber" value="<?php echo $result1['House_number']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine" value="<?php echo $result1['Swine']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District" value="<?php echo $result1['District']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton" value="<?php echo $result1['Canton']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province" value="<?php echo $result1['Province']; ?>">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode" value="<?php echo $result1['Postal_code']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">เบอร์โทรศัพท์</label>
        </div>
        <div class="col">
            <input type="number" class="form-control" name="Phone" value="<?php echo $result['Phone']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">Email</label>
        </div>
        <div class="col">
            <input type="email" class="form-control" name="Email" value="<?php echo $result['Email']; ?>">
        </div>
    </div>
</div>
<h4>2.การศึกษาต่อหลังจบการศึกษาจากสาขาวิศวกรรมซอฟต์แวร์</h4>
<div class="form-group mt-4 ml-3">
<div class="row">
    <div class="col-2">
    <label class="form-label ml-3">วุฒิการศึกษาสูงสุด</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="Highesteducation" value="<?php echo $result['Highest_education']; ?>"> 
    </div>
    <div class="col-1 ml-3">
    <label class="form-label">สาขา</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="Subject" value="<?php echo $result['Subject']; ?>">
    </div>
</div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">สถาบันที่ทำการศึกษาต่อ</label>
        </div>
        <div class="col-3">
            <input type="text" class="form-control" name="Instituteforfurtherstudy" value="<?php echo $result['Institute_for_further_study']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label">ประเทศ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Country" value="<?php echo $result['Country']; ?>">
        </div>
        <div class="col-2">
            <label class="form-label ml-3">ปีที่จบการศึกษา</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Graduationyear" value="<?php echo $result['Graduation_year']; ?>">
        </div>
    </div>
</div>
<h4>3.การทำงานในปัจจุบัน</h4>
<div class="form-group mt-4 ml-3">
    <div class="row">
        <div class="col-3">
            <label class="form-label ml-3">ชื่อบริษัท/องค์กร/หน่วยงาน</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Companyname" value="<?php echo $result['Company_name']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">ตำแหน่งงานปัจจุบัน</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Jobposition" value="<?php echo $result['Job_position']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <label>ที่อยู่บริษัท/องค์กร/หน่วยงาน</label>
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">เลขที่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Housenumber2" value="<?php echo $result2['House_number']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine2" value="<?php echo $result2['Swine']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District2" value="<?php echo $result2['District']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton2" value="<?php echo $result2['Canton']; ?>">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province2" value="<?php echo $result2['Province']; ?>">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode2" value="<?php echo $result2['Postal_code']; ?>">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-3">เงินเดือนที่ได้รับ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Salary" value="<?php echo $result['Salary']; ?>" >
        </div>
    </div>
</div>
<center><button type="submit" class="btn btn-primary">ตกลง</button></center>
</form>
</div>
</body>
</html>