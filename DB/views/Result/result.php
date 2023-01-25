<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
<br>
<h2 align = "center">ตารางแสดงระดับน้ำเฉลี่ยของแม่น้ำในแต่ละวัน</h2>

<div class="container">

                <table class="shadow table table-hover">
     <thead class="thead-dark">
       <tr align='center' >
         <th scope="col">วันที่</th>
         <th scope="col">ชื่อแม่น้ำ</th>
        <th scope="col">ความสูงระดับน้ำโดยเฉลี่ย (m)</th>
         </tr>
     </thead></tr>
   <tbody style="background-color: #EFEFEF">
<?php foreach($AVG as $A)
{
 echo"<tr align='center' > 
 <td data-lable='วันที่'>{$A->gauging_date}</td>
 <td data-lable='ชื่อแม่น้ำ'>{$A->river_name}</td> 
 <td data-lable='ความสูงระดับน้ำโดยเฉลี่ย'>{$A->gauging_level}</td>
 ";
}
echo "</table>";
?>
