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
    $strProductid = null;
    
    if(isset($_GET["id"])):
        $strProductid = $_GET["id"];
        $sql = "SELECT * FROM personal_information WHERE Member_id = '".$strProductid."';";
        $sql_run = mysqli_query($con,$sql);
        $result = mysqli_fetch_assoc($sql_run);
    endif;
?>

<?php
        $sql1 = "SELECT * FROM current_address WHERE Member_id = '".$strProductid."';";
        $sql_run1 = mysqli_query($con,$sql1);
        $result1 = mysqli_fetch_assoc($sql_run1);
?>

<?php
        $sql2 = "SELECT * FROM work_address WHERE Member_id = '".$strProductid."';";
        $sql_run2 = mysqli_query($con,$sql2);
        $result2 = mysqli_fetch_assoc($sql_run2);
?>

<div class="container mt-3">
<form class="border border p-5" action="register_p.php" method="POST">

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
</div>
<center>
</div>
</div>
<br>
<h4>1.ข้อมูลส่วนตัว</h4>
<div class="row">
    <div class="col-2">
    <input type="text" class="form-control" name="Prefix" placeholder="<?php echo $result['Prefix']; ?>" disabled="disabled">
    </div>
    <div class="col-1">
    <label class="form-label ml-3">ชื่อ</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Fname" placeholder="<?php echo $result['F_name']; ?>" disabled="disabled">
    </div>
    <div class="col-1">
    <label class="form-label">นามสกุล</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Lname" placeholder="<?php echo $result['L_name']; ?>" disabled="disabled">
    </div>
</div>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">เพศ</label>
    </div>
    <div class="col-2">
    <input type="text" class="form-control" name="Sex" placeholder="<?php echo $result['Sex']; ?>" disabled="disabled">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-2">
        <input type="text" class="form-control" name="Dateofbirth" placeholder="<?php echo $result['Date_of_birth']; ?>" disabled="disabled">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">รหัสนักศึกษา</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Studentcode" placeholder="<?php echo $result['Studentcode']; ?>" disabled="disabled">
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <label>ที่อยู่ปัจจุบัน</label>
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">บ้านเลขที่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Housenumber" placeholder="<?php echo $result1['House_number']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine" placeholder="<?php echo $result1['Swine']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District" placeholder="<?php echo $result1['District']; ?>" disabled="disabled">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton" placeholder="<?php echo $result1['Canton']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province" placeholder="<?php echo $result1['Province']; ?>" disabled="disabled">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode" placeholder="<?php echo $result1['Postal_code']; ?>" disabled="disabled">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">เบอร์โทรศัพท์</label>
        </div>
        <div class="col">
            <input type="number" class="form-control" name="Phone" placeholder="<?php echo $result['Phone']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">Email</label>
        </div>
        <div class="col">
            <input type="email" class="form-control" name="Email" placeholder="<?php echo $result['Email']; ?>" disabled="disabled">
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
        <input type="text" class="form-control" name="Highesteducation" placeholder="<?php echo $result['Highest_education']; ?>" disabled="disabled"> 
    </div>
    <div class="col-1 ml-3">
    <label class="form-label">สาขา</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="Subject" placeholder="<?php echo $result['Subject']; ?>" disabled="disabled">
    </div>
</div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">สถาบันที่ทำการศึกษาต่อ</label>
        </div>
        <div class="col-3">
            <input type="text" class="form-control" name="Instituteforfurtherstudy" placeholder="<?php echo $result['Institute_for_further_study']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label">ประเทศ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Country" placeholder="<?php echo $result['Country']; ?>" disabled="disabled">
        </div>
        <div class="col-2">
            <label class="form-label ml-3">ปีที่จบการศึกษา</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Graduationyear" placeholder="<?php echo $result['Graduation_year']; ?>" disabled="disabled">
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
            <input type="text" class="form-control" name="Companyname" placeholder="<?php echo $result['Company_name']; ?>" disabled="disabled">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">ตำแหน่งงานปัจจุบัน</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Jobposition" placeholder="<?php echo $result['Job_position']; ?>" disabled="disabled">
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
            <input type="text" class="form-control" name="Housenumber2" placeholder="<?php echo $result2['House_number']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine2" placeholder="<?php echo $result2['Swine']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District2" placeholder="<?php echo $result2['District']; ?>" disabled="disabled">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton2" placeholder="<?php echo $result2['Canton']; ?>" disabled="disabled">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province2" placeholder="<?php echo $result2['Province']; ?>" disabled="disabled">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode2" placeholder="<?php echo $result2['Postal_code']; ?>" disabled="disabled">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-3">เงินเดือนที่ได้รับ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Salary" placeholder="<?php echo $result['Salary']; ?>" disabled="disabled">
        </div>
    </div>
</div>
</form>
</div>
</body>
</html>