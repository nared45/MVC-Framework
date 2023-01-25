
<html>

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
<h5 class="card-header" align = "center">ลบข้อมูลการวัดระดับน้ำ</h5>
            <div class="card-body">
                <div class="mb-3">
                <?php echo "<br> วันที่ตรวจวัด = $daily_list->gauging_date ระดับความสูงที่วัดได้ = $daily_list->gauging_level</br>";?>
                <br>
<form method="get" action="">
    <div class="col-sm">
    <input type="hidden" name="controller" value="gaugingDaily"/>
    <input type="hidden" name="daily_id" value="<?php echo $daily_list->daily_id?>"/>
    <input type="hidden" name="gaugingstation_id" value="<?php echo $daily_list->gaugingstation_id?>"/>
    <a href="index.php?controller=gaugingDaily&action=delete&daily_id=<?php echo $daily_list->daily_id?>&gaugingstation_id=<?php echo $daily_list->gaugingstation_id?>" class="btn btn-outline-danger btn-lg btn-block" role="button">DELETE</a>
    </div>
    <br>
    <div class="col-sm">
    <a href="index.php?controller=gaugingDaily&action=index&gaugingstation_id=<?php echo $daily_list->gaugingstation_id?>" class="btn btn-outline-danger btn-lg btn-block" role="button">BACK</a>
    </div>
</form>
