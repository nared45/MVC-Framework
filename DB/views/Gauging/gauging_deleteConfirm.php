
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
            <h5 class="card-header" align = "center">ลบข้อมูลสถานีวัดระดับน้ำ</h5>
            <div class="card-body">
            <!-- <br> สถานีวัด = $gauging_list->gauging_name  แม่น้ำ = $gauging_list->river_name</br> -->
                <div class="mb-3">
                <?php echo "<br> สถานีวัด = $gauging_list->gauging_name  แม่น้ำ = $gauging_list->river_name</br>";?>
                <br>
<form method="get" action="">
    <div class="col-sm">
    <input type="hidden" name="controller" value="gauging"/>
    <input type="hidden" name="gaugingstation_id" value="<?php echo $gauging_list->gaugingstation_id?>"/>
                    <a href="index.php?controller=gauging&action=delete&gaugingstation_id=<?php echo $gauging_list->gaugingstation_id?>" class="btn btn-outline-danger btn-lg btn-block" role="button">DELETE</a>
                    </div>
    <!-- <button type="submit" name="action"value="index">Back</button> -->
    <br>
    <div class="col-sm">
                    <a href="index.php?controller=gauging&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">BACK</a>
                    </div>
    <!-- <button type="submit" name="action"value="delete">Submit</button> -->
</form>