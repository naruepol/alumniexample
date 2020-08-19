<html>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->

<head>
<title> Software Engineering </title>
<?php include 'header.php'; ?>
</head>
<body>
<br><br><br><br><br><br><br><br>
<div class="container mt-3">
<form class="border border p-5" action="register_p.php" method="POST">

<div class="container-fluid mt-5">
<center><div class="row">
<div class="col"><br><br><br>
<h4><strong>แบบฟอร์มลงทะเบียนข้อมูลศิษย์เก่าสาขาวิศวกรรมซอฟต์แวร์<br>มหาลัยราชภัฏนครปฐม</strong></h4>
</div>
<div class="col-3">
<img src="img/img.png" width="150" height="180">
<input type="file" name="Img">
</div>
<center>
</div>
</div>

<h4>1.ข้อมูลส่วนตัว</h4>
<div class="row">
    <div class="col-2">
    <select class="form-control" id="inputPrefix" name="Prefix">
        <option> นาย </option>
        <option> นาง </option>
        <option> นางสาว </option>
    </select>
    </div>
    <div class="col-1">
    <label class="form-label ml-3">ชื่อ</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Fname">
    </div>
    <div class="col-1">
    <label class="form-label">นามสกุล</label>
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="Lname">
    </div>
</div>
<div class="row mt-3">
    <div class="col-1">
        <label class="form-label ml-3">เพศ</label>
    </div>
    <div class="col-2">
    <select class="form-control" id="inputMonth" name="Sex">
        <option> ชาย </option>
        <option> หญิง </option>
    </select>
    </div>
    <div class="col-2">
    <label class="form-label ml-4">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-2">
        <input type="text" class="form-control" name="Dateofbirth">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">รหัสนักศึกษา</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Studentcode">
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <label>ที่อยู่ปัจจุบัน</label>
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">บ้านเลขที่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Housenumber">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">เบอร์โทรศัพท์</label>
        </div>
        <div class="col">
            <input type="number" class="form-control" name="Phone">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">Email</label>
        </div>
        <div class="col">
            <input type="email" class="form-control" name="Email">
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
        <input type="text" class="form-control" name="Highesteducation">
    </div>
    <div class="col-1 ml-3">
    <label class="form-label">สาขา</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="Subject">
    </div>
</div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">สถาบันที่ทำการศึกษาต่อ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Instituteforfurtherstudy">
        </div>
        <div class="col-1">
            <label class="form-label">ประเทศ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Country">
        </div>
        <div class="col-2">
            <label class="form-label ml-3">ปีที่จบการศึกษา</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Graduationyear">
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
            <input type="text" class="form-control" name="Companyname">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-3">
            <label class="form-label ml-3">ตำแหน่งงานปัจจุบัน</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Jobposition">
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
            <input type="text" class="form-control" name="Housenumber2">
        </div>
        <div class="col-1">
            <label class="form-label ml-3">หมู่</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Swine2">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">ตำบล</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="District2">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-5">อำเภอ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Canton2">
        </div>
        <div class="col-1">
            <label class="form-label ml-2">จังหวัด</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Province2">
        </div>
        <div class="col-2">
            <label class="form-label ml-4">รหัสไปษณีย์</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Postalcode2">
        </div>
    </div>
</div>
<div class="form-group mt-4 ml-3">
    <div class="row mt-3">
        <div class="col-2">
            <label class="form-label ml-3">เงินเดือนที่ได้รับ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="Salary">
        </div>
    </div>
</div>
<h4>4.การใช้งานระบบ</h4>
<div class="form-group mt-4 ml-3">
<div class="row">
    <div class="col-2">
    <label class="form-label ml-3">Username</label>
    </div>
    <div class="col">
        <input type="text" class="form-control" name="User">
    </div>
    <div class="col-2">
    <label class="form-label ml-4">Password</label>
    </div>
    <div class="col">
        <input type="password" class="form-control" name="Pass">
    </div>
</div>
</div>
<br><br><center>
<a type="button" class="btn btn-secondary" style="width:100" style="text-align:right" href="index.php">กลับ</a>
<button type="submit" class="btn btn-secondary" style="width:100" style="text-align:right">ยืนยัน</button>
</center><br>
 </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>