<?php 
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

?>



<!-- Font Awesome -->
    <link rel="stylesheet" href="layout/dataTables.bootstrap.css">
    <link rel="stylesheet" href="layout/AdminLTE.min.css">
    <link rel="stylesheet" href="layout/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="layout/_all-skins.min.css">



        <!-- top navigation -->
           <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>
<div class="row">
    <div class="col-sm-12" >
        <div align="center">  
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 25px;">SISTEMA DE GESTIÓN DE VENTAS E INVENTARIOS CON FACTURACIÓN ELECTRÓNICA EN LINEA</b></h4>
            <br/>
           
          
            <h4 class="m-t-0 m-b-40 header-title text-center"><b style="font-size: 20px;">BIENVENIDO AL SISTEMA</b></h4>
            <h4 class="m-t-0 m-b-40 header-title text-center"><b
                    style="font-size: 20px;">

                    <?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                    ?></b></h4>
       
</div>
</div>
</div>
  

  </section>
    <!-- page content -->
    <div class="right_col" role="main">
      <div aling=center>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                 
                </div><!-- /.box-header -->
                <div class="box-body">



                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
     



       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>

      </h4>
              <p>Medico</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/medicos.png">
              <i class=""></i>
            </div>
          </div>
        </div>




     
 

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>



      </h4>
              <p> Paciente</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/paciente.png">
              <i class=""></i>
            </div>
          </div>
        </div>

 

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>

      </h4>
              <p>Mis citas</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/miscitas.png">
              <i class=""></i>
            </div>
          </div>
        </div>
     
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>


      </h4>
              <p> Cita</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/cita.png">
              <i class=""></i>
            </div>
   </div>
        </div>
 

                  
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>


      </h4>
              <p> Preescripcion</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/preescripcion.png">
              <i class=""></i>
            </div>
    </div>
        </div>
  
  

            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>

      </h4>
              <p> Histaria de caso</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/historial.png">
              <i class=""></i>
            </div>
    </div>
        </div>

                      

            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>



      </h4>
              <p>Pago factura</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/factura.png">
              <i class=""></i>
            </div>
       </div>

        </div>
        
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>

      </h4>
              <p>Configuración</p>
            </div>
            <div class="icon"><img height="80" width="80" src="assets/img/inicio/config.png">
              <i class=""></i>
            </div>
 </div>
        </div>
</div>
                     


                  </div><!--row-->
       
   
            </div><!-- /.col (right) -->




                          <div class="box-body">
                  <div class="row">






   
                </div>

            </div>






                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

       
        <!-- /footer content -->
      </div>
    </div>

    </div>

    <!-- /gauge.js -->
    </div>


<section>

</section>
</div>



</html>
   