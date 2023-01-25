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
            <h5 class="card-header" align = "center">เพิ่มเติมแนวคันกั้นน้ำ</h5>
            <div class="card-body">
            <div class="mb-3">
                    <form method="get" action="">
             <label>ชื่อแนวคันกั้นน้ำ<input type="text" name="waterbarrier_name" class="form-control" value="<?php echo $water->waterbarrier_name;?>" /> </label>



    <label>หน่วยงาน<select name="agency_id"  class="form-control" required>
        <?php 
        foreach ($agency as $ac) 
        {
            echo "<option value = $ac->agency_id>$ac->agency_id $ac->agency_name";
            if ($ac->agency_id==$water->agency_id)
            echo"</option>";
        }?>
    </select></label><br>

        <br>
    <label>ชื่อพื้นที่ย่อย<select name="sub_area_id"  class="form-control" required>
        <?php 
        foreach ($subarea as $sb) 
        {
            echo "<option value = $sb->sub_area_id>$sb->sub_area_id $sb->sub_area_name";
            if ($sb->sub_area_id==$water->sub_area_id)
            echo"</option>";
        }?>
    </select></label><br>

    <br>
    <label>ความยาวของแนวคันกั้นน้ำ<input type="text" name="distance" class="form-control" value="<?php echo $water->distance;?>"/> </label>
    <br>

    <br>
    <label>ความสูงของแนวคันกั้นน้ำ<input type="text" name="waterbarrier_height" class="form-control" value="<?php echo $water->waterbarrier_height;?>"/> </label>
    <br>

    <br>
    <!-- <?php //echo $water->waterbarrier_id ?> -->
    <input type = "hidden" name = "controller" value="waterbarrier"/>
    <input type = "hidden" name = "waterbarrier_id" value="<?php echo $water->waterbarrier_id?>"/>
    <div class="col-sm">
    <button type="submit" name="action"value="update" class="btn btn-outline-danger btn-lg btn-block" role="button">Submit</button> 
    </div>
    <br>
    <div class="col-sm">
    <button type="submit" name="action"value="index" class="btn btn-outline-danger btn-lg btn-block" role="button">Back</button>
    </div>
</form>