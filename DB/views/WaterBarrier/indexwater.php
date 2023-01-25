<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
<br>
<h2 align = "center">ตารางแสดงรายชื่อแนวคันกั้นน้ำ</h2>
<body>
  <div class="container">
   <div><br></div>
   <form method="get" action="">
     <div class=" shadow input-group mb-3 " >
      <input type="text" name="key"class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
      <input type="hidden" name="controller" value="waterbarrier" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
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
  <h5 class="card-header" align = "center"> <a href=?controller=waterbarrier&action=newwater> เพิ่มแนวคันกั้นน้ำ </a> </h5>
            <div class="card-body">
                <div class="mb-3">

                <table class="shadow table table-hover">
     <thead class="thead-dark">
       <tr align='center' >
         <th scope="col">ID</th>
         <th scope="col">ชื่อแนวคันกั้นน้ำ</th>
        <th scope="col">หน่วยงาน</th>
        <th scope="col">พื้นที่</th>
       <th scope="col">ความยาว</th>
                 <th scope="col">ความสูงแนวคันกั้นน้ำ</th>
      <th scope="col">UPDATE</th>
     <th scope="col">DELETE</th>
         </tr>
     </thead></tr>
   <tbody style="background-color: #EFEFEF">
<?php foreach($water_list as $wb)
{
 echo"<tr align='center' > 
 <td data-lable='ID'>{$wb->waterbarrier_id}</td>
 <td data-lable='ชื่อแนวคันกั้นน้ำ'>{$wb->waterbarrier_name}</td> 
 <td data-lable='หน่วยงาน'>{$wb->agency_name}</td>
 <td data-lable='พื้นที่'>{$wb->sub_area_name}</td> 
 <td data-lable='ความยาว'>{$wb->distance}</td>
 <td data-lable='ความสูงแนวคันกั้นน้ำ'>{$wb->waterbarrier_height}</td>
    <td data-lable='UPDATE'><a href=?controller=waterbarrier&action=updateForm&waterbarrier_id=$wb->waterbarrier_id class='btn btn-outline-warning' role='button' ata-placement='right' title='UPDATE'><i class='fas fa-folder-open'></i> UPDATE</a></td>
    <td data-lable='DELETE'><a href=?controller=waterbarrier&action=deleteConfirm&waterbarrier_id=$wb->waterbarrier_id class='btn btn-outline-warning' role='button' ata-placement='right' title='DELETE'><i class='fas fa-folder-open'></i> DELETE</a></td>
 ";
}
echo "</table>";
?>
