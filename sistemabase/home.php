<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 
?>
<!-- Font Awesome -->
<link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">

<div class="row">
    <div class="col-sm-12" >
        <div align="center">
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 25px;">SISTEMA DE GESTIÓN DE VENTAS E INVENTARIOS CON FACTURACIÓN ELECTRÓNICA EN LINEA</b></h4>
            <br/>
            <br/>
            <img src="assets/img/logos/logouvg.jpg" width="25%" height="20%">
            <br/>
            <br/>
            <br/>
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 20px;">BIENVENIDO</b></h4>
            <h4 class="m-t-0 m-b-40 header-title text-center"><b
                    style="font-size: 20px;">

      
                    <?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                    ?></b></h4>
        </div>
    </div>
   
</div>


