
<style type="text/css">
    btn{
    width:100%;
    }
    </style>
    <div class="container" style="padding-top:100px">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" >
          <h4 align="center"> สถานีวัดระดับน้ำและคันกั้นน้ำ  </h4>
          <br>
          </div>
          </div>
          </div>



<?php
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else{
        $controller = 'pages';
        $action = 'index1';
    }
?>
<html>

<head>

    <meta http-equiv="Content-Language" content="th">
    <meta http-equiv="content-Type" content="text/html; charset=window-874">
    <meta http-equiv="content-Type" content="text/html; charset=tis-620">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <style>
body  {
 width:100%;
  background-repeat: no-repeat;
  background-attachment: fixed;
 background-size: cover;
 background-position: center;
 
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
    pointer-events: none;
}
  
.table{
 width: 100%;
 border-collapse: collapse; 
  }
.table td,.table th{
 padding: 12px 15px;
 border: 1px solid #ddd;
 text-align: center;
}
@media(max-width: 500px){
 .table thead{
  display: none;
 }
 .table, .table tbody, .table tr, .table td{
  display: block;
  width: 100%;
 }
 .table tr{
  margin-bottom:15px;
 }
 .table td{
  text-align: right;
  padding-left: 50%;
  text-align: right;
  position: relative;
 }
 .table td::before{
  content: attr(data-lable);
  position: absolute;
  left: 0;
  width: 50%;
  padding-left:15px;
  font-size:15px;
  font-weight: bold;
  text-align: left;
 }
}

</style>
</head>

<body>
    <nav class="shadow navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #000F0F;"> 
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="?controller=pages&action=home"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">    
                <a href=?controller=pages&action=index1 class="nav-link px-4 text-white" style="font-size:20px;">[Home]</a> 
                </li>
                <li class="nav-item">    
                <a href=?controller=gauging&action=index class="nav-link px-4 text-white" style="font-size:20px;"> [สถานีวัดระดับน้ำ] </a> 
                </li>
                <li class="nav-item">  
                <a href=?controller=waterbarrier&action=index class="nav-link px-4 text-white" style="font-size:20px;"> [แนวคันกั้นน้ำ] </a>
                </li>
                <li class="nav-item">  
                <a href=?controller=result&action=index class="nav-link px-4 text-white" style="font-size:20px;"> [ผลสรุป] </a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
      </form>
            </div>
        </div>
    </nav>


    <?php require_once("routes.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
</head>
<body>
    <br></br>
    <?php
    // echo ("controller = ".$controller.", action = ".$action);
    ?>
    <?php
        require_once("routes.php");
    ?>
</body>
</html>