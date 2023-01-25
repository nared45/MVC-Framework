
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
  <h5 class="card-header" align = "center">เพิ่มวันวันที่ตรวจวัดระดับน้ำและระดับน้ำที่วัดได้</h5>
            <div class="card-body">
            <div class="mb-3">
<form method = "get"action="">
    
    <label>วันที่ตรวจวัด<input type="date" name="gauging_date" class="form-control" value="<?php echo $daily_list->gauging_date;?>"/> </label>
    <br>
</br>
    <label>ระดับความสูงที่วัดได้ (m)<input type="text" name="gauging_level" class="form-control" value="<?php echo $daily_list->gauging_level;?>"/> </label>
    <br>
    <br>
    <input type = "hidden" name = "controller" value="gaugingDaily"/>
    <input type = "hidden" name = "gaugingstation_id" value="<?php echo $daily_list->gaugingstation_id?>" />
    <input type = "hidden" name = "daily_id" value="<?php echo $daily_list->daily_id?>" />
    <div class="col-sm">
    <button type="submit" name="action"value="update" class="btn btn-outline-danger btn-lg btn-block" role="button">Submit</button> 
    </div>
    <br>
    <div class="col-sm">
    <button type="submit" name="action"value="index" class="btn btn-outline-danger btn-lg btn-block" role="button">Back</button>
    </div>
    <!-- <button type="submit" name="action"value="index">Back</button>
    <button type="submit" name="action"value="update">Submit</button> -->
</form>