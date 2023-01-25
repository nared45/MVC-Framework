<!-- 
<!-- 
<?php //echo "<br>Are you sure to delete this <br>
   // ชื่อแนวคันกั้นน้ำ = $water->waterbarrier_name  หน่วยงาน = $water->agency_name พื้นที่ = $water->sub_area_name";?>
<html> --> -->

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div><br></div>
    <div class="container">

        <div class="card shadow" style="width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: auto;">
  <h5 class="card-header" align = "center">ลบข้อมูลแนวคันกั้นน้ำ</h5>
            <div class="card-body">
            <!-- <br> สถานีวัด = $gauging_list->gauging_name  แม่น้ำ = $gauging_list->river_name</br> -->
                <div class="mb-3">
                <?php echo "<br> ชื่อแนวคันกั้นน้ำ = $water->waterbarrier_name  หน่วยงาน = $water->agency_name พื้นที่ = $water->sub_area_name</br>";?> <br>
<form method="get" action="">
    <input type="hidden" name="controller" value="waterbarrier"/>
    <input type="hidden" name="waterbarrier_id" value="<?php echo $water->waterbarrier_id?>"/>
    <div class="col-sm">
                    <a href="index.php?controller=waterbarrier&action=delete&waterbarrier_id=<?php echo $water->waterbarrier_id?>" class="btn btn-outline-danger btn-lg btn-block" role="button">DELETE</a>
                    </div>
    <!-- <button type="submit" name="action"value="index">Back</button> -->
    <br>
    <div class="col-sm">
                    <a href="index.php?controller=waterbarrier&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">BACK</a>
                    </div>
    <!-- <button type="submit" name="action"value="delete">Submit</button> -->
</form>
<!-- <form method="get" action="">
    <input type="hidden" name="controller" value="waterbarrier"/>
    <input type="hidden" name="waterbarrier_id" value="<?php //echo $water->waterbarrier_id?>"/>
    <button type="submit" name="action"value="index">Back</button>
    <button type="submit" name="action"value="delete">Submit</button>
</form> -->