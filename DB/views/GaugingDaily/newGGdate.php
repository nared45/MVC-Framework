
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
  <h5 class="card-header" align = "center">เพิ่มวันที่และค่าระดับน้ำที่วัดได้</h5>
            <div class="card-body">
                <div class="mb-3">

<form method = "get"action="">
    <br>
    <label>วันที่ตรวจวัด<input type="date" class="form-control" name="gauging_date"/></label><br>
    <label>ระดับความสูงที่วัดได้ (m)<input type="text" class="form-control" name="gauging_level"/></label><br>
    </select></label>
    <input type = "hidden" name = "controller" value="gaugingDaily"/>
    <input type = "hidden" name = "gaugingstation_id" value="<?php echo $id->gaugingstation_id?>"/>
    <div class="col-sm">
    <button type="submit" name="action"value="addGGdate" class="btn btn-outline-danger btn-lg btn-block" role="button">Submit</button> 
    </div>
    <br>
    <div class="col-sm">
    <button type="submit" name="action"value="index" class="btn btn-outline-danger btn-lg btn-block" role="button">Back</button>
    </div>
    <!-- <button type="submit" name="action"value="index">Back</button>
    <button type="submit" name="action"value="addGGdate">Submit</button> -->
    </from>