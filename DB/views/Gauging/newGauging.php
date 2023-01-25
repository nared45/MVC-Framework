
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
  <h5 class="card-header" align = "center">เพิ่มสถานีวัดระดับน้ำ</h5>
            <div class="card-body">
                <div class="mb-3">
<form method = "get"action="">
    <br>
    <label>ชื่อสถานีตรวจ<input type="text" name="gauging_name" class="form-control" /></label><br>
    <label>ชื่อแม่น้ำ<select name="river_id" class="form-control" required>>
        <?php foreach ($river as $rv) 
        {echo "<option value = $rv->river_id> $rv->river_id $rv->river_name</option>";
        }?>
    </select></label> <br>

    <br>
    <input type = "hidden" name = "controller" value="gauging"/>
    <div class="col-sm">
    <button type="submit" name="action"value="addGuaging" class="btn btn-outline-danger btn-lg btn-block" role="button">Submit</button> 
    </div>
    <br>
    <div class="col-sm">
    <button type="submit" name="action"value="index" class="btn btn-outline-danger btn-lg btn-block" role="button">Back</button>
    </div>
    <!-- <button type="submit" name="action"value="index">Back</button>
    <button type="submit" name="action"value="addGuaging">Submit</button> -->
    </from>