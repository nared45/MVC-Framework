<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
<br>
<h2 align = "center">ตารางแสดงรายชื่อสถานีตรวจวัดระดับน้ำ</h2>
<body>
  <div class="container">
   <div><br></div>
   <form method="get" action="">
     <div class=" shadow input-group mb-3 " >
      <input type="text" name="gaugingstation_id"class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
      <input type="hidden" name="controller" value="gauging" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
      <div class=" input-group-append ">
       <button class="btn btn btn-secondary" type="submit" name="action" value="search" id="button-addon2"><i class="fas fa-search"></i> Search</button>
      </div>
      </div>
      </form>

<div class="container">

        <div class="card shadow" style="width: 100%;
  max-width: 1200px;
  padding: 15px;
  margin: auto;">
  <h5 class="card-header" align = "center"> <a href=?controller=gauging&action=newGauging> เพิ่มสถานีวัดระดับน้ำ </a> </h5>
            <div class="card-body">
                <div class="mb-3">
<table class="shadow table table-hover">
      <thead class="thead-dark">
      <tr align='center' >
      <th scope="col">ID</th>
      <th scope="col">ชื่อสถานี</th>
      <th scope="col">ชื่อแม่น้ำ</th>
      <th scope="col">รายละเอียด</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
         </tr>
     </thead></tr>
   <tbody style="background-color: #EFEFEF">

   <?php foreach($gauging_list as $gg)
{
 echo"<tr align='center' > 
 <td data-lable='ID'>{$gg->gaugingstation_id}</td>
 <td data-lable='ชื่อสถานี'>{$gg->gauging_name}</td> 
 <td data-lable='ชื่อแม่น้ำ'>{$gg->river_name}</td>
 <td data-lable='รายละเอียด'><a href=?controller=gaugingDaily&action=index&gaugingstation_id=$gg->gaugingstation_id class='btn btn-outline-warning' role='button' ata-placement='right' title='รายละเอียด'><i class='fas fa-folder-open'></i> รายละเอียด</a></td>
    <td data-lable='UPDATE'><a href=?controller=gauging&action=updateForm&gaugingstation_id=$gg->gaugingstation_id class='btn btn-outline-warning' role='button' ata-placement='right' title='UPDATE'><i class='fas fa-folder-open'></i> UPDATE</a></td>
    <td data-lable='DELETE'><a href=?controller=gauging&action=deleteConfirm&gaugingstation_id=$gg->gaugingstation_id class='btn btn-outline-warning' role='button' ata-placement='right' title='DELETE'><i class='fas fa-folder-open'></i> DELETE</a></td>
 ";
}
echo "</table>";
?>
<!-- <table border = 1>
<tr> <td>ID<td><td>ชื่อสถานี<td><td>ชื่อแม่น้ำ<td><td>ดูรายละเอียด<td><td>UPDATE<td><td>DELETE<td><tr> -->
<!-- <?php //foreach($gauging_list as $gg)
// {
    
    // echo("<tr><td>$gg->gaugingstation_id<td>
    // <td>$gg->gauging_name<td>
    // <td>$gg->river_name<td>
    // <td><a href=?controller=gaugingDaily&action=index&gaugingstation_id=$gg->gaugingstation_id>รายละเอียด</a><td>
    // <td><a href=?controller=gauging&action=updateForm&gaugingstation_id=$gg->gaugingstation_id>UPDATE</a><td>  
    // <td><a href=?controller=gauging&action=deleteConfirm&gaugingstation_id=$gg->gaugingstation_id>delete</a><td>
    // <tr>");
// }
// echo("</table>");
?> -->