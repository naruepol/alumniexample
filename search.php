<html>

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->

<head>
<title>Sofware Engineering</title>
<?php include 'header-user.php'; ?>
</heade>
<body>
<br><br><br><br><br><br><br><br>
<div class="container mt-2">
<div class="alert alert-info" role="alert" align="center"><h4>ค้นหาข้อมูลศิษย์เก่า</h4></div>
<form class="alert alert-info" action="search-studentcode.php" method="post">
<div class="container mt-2">
<div class="row">
    <div class="col-2">
        <label class="form-label ml-3">รหัสนักศึกษา</label>
    </div>
    <div class="col-8">
        <input type="text" class="form-control" name="Studentcode">
    </div>
    <div class="col-2">
    <button type="submit" class="btn btn-info" style="width:100" style="text-align:right">ค้นหา</button>
    </div>
</div>
</div>
</form>

<form class="alert alert-info" action="search-name.php" method="post">
<div class="container mt-2">
<div class="row">
    <div class="col-2">
        <label class="form-label ml-3">ชื่อ</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Fname">
    </div>
    <div class="col-2">
        <label class="form-label ml-3">นามสกุล</label>
    </div>
    <div class="col-3">
        <input type="text" class="form-control" name="Lname">
    </div>
    <div class="col-2">
    <button type="submit" class="btn btn-info" style="width:100" style="text-align:right">ค้นหา</button>
    </div>
</div>
</div>
</form>

<form class="alert alert-info" action="search-all.php" method="post">
    <center>
    <button type="submit" class="btn btn-info" style="width:200" style="text-align:right">ค้นหาทั้งหมด</button>
    </center>
</div>
</div>
</form>
</div>
<?php include 'footer-user.php'; ?>
</body>
</html>