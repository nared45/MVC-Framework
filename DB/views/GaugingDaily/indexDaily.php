


<?php
    //echo("<h3> ชื่อจุดตรวจ : $id->gauging_name</h3>");
    //echo("เพิ่มวันวัดค่าระดับน้ำ <a href=?controller=gaugingDaily&action=newGGdate&gaugingstation_id=$id->gaugingstation_id> click </a>");

?>
<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
<br>
<h2 align = "center">ตารางแสดงวันที่ตรวจวัดระดับน้ำ</h2>
<body>
  <div class="container">
   <div><br></div>
   <form method="get" action="">
     <div class=" shadow input-group mb-3 " >
      <input type="date" name="gauging_date"class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
      <input type="hidden" name="controller" value="gaugingDaily" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
      <input type = "hidden" name = "gaugingstation_id" value = "<?php echo $id->gaugingstation_id?>"/>
      <div class=" input-group-append ">
       <button class="btn btn btn-secondary" type="submit" name="action" value="search" id="button-addon2"><i class="fas fa-search"></i> Search</button>
       <br>
    </div>
      </div>
      </form>
      <?php
    //echo("<h3> ชื่อจุดตรวจ : $id->gauging_name</h3>");
    
    echo("<a href=?controller=gaugingDaily&action=newGGdate&gaugingstation_id=$id->gaugingstation_id class='btn btn-outline-warning' role='button' ata-placement='right' title='DELETE'><i class='fas fa-folder-open'> เพิ่มวันวัดค่าระดับน้ำ </a>");

?>
<div class="container">

<div class="card shadow" style="width: 100%;
max-width: 1200px;
padding: 15px;
margin: auto;">
<h5 class="card-header" align = "center">ชื่อจุดตรวจ : <?php echo $id->gauging_name ?></h5>
    <div class="card-body">
        <div class="mb-3">
<table class="shadow table table-hover">
     <thead class="thead-dark">
       <tr align='center' >
         <th scope="col">DLID</th>
         <th scope="col">วันที่วัดระดับน้ำ</th>
        <th scope="col">ความสูงของระดับน้ำ (m)</th>
        <th scope="col">UPDATE</th>
       <th scope="col">DELETE</th>
         </tr>
     </thead></tr>
   <tbody style="background-color: #EFEFEF">
<!-- <table border = 1>
<tr>
<td>DDiD<td>
    <td>วันที่วัดระดับน้ำ<td>
        <td>ความสูงของระดับน้ำ (m)<td>
            <td>UPDATE<td>
                <td>DELETE<td><tr> -->
<?php foreach($daily_list as $dl)
{

    echo("<tr align='center'>
    <td data-lable='DLID'>$dl->daily_id</td>
    <td data-lable='วันที่วัดระดับน้ำ'>$dl->gauging_date</td>
    <td data-lable='ความสูงของระดับน้ำ (m)'>$dl->gauging_level</td>
    <td data-lable='UPDATE'><a href=?controller=gaugingDaily&action=updateForm&gaugingstation_id=$key&daily_id=$dl->daily_id class='btn btn-outline-warning' role='button' ata-placement='right' title='UPDATE'><i class='fas fa-folder-open'>UPDATE</a></td>
    <td data-lable='DELETE'><a href=?controller=gaugingDaily&action=deleteConfirm&gaugingstation_id=$key&daily_id=$dl->daily_id class='btn btn-outline-warning' role='button' ata-placement='right' title='DELETE'><i class='fas fa-folder-open'>DELETE</a></td>
    ");
}
echo("</table>");
?>