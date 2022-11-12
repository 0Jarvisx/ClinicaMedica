<?php

session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
} 

?>
<link rel="preload" href="https://cdn.jotfor.ms/fonts/circular/fonts/Circular-Book.woff2" as="font" crossorigin="anonymous" />
    <link rel="preload" href="https://cdn.jotfor.ms/fonts/circular/fonts/Circular-Light.woff2" as="font" crossorigin="anonymous" />
    <link rel="preload" href="https://cdn.jotfor.ms/fonts/circular/fonts/Circular-Medium.woff2" as="font" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jotfor.ms/fonts/?family=Circular"/>
    <link rel="stylesheet" type="text/css" href="//moodular.jotform.com/dist/moodular4/moodular.css?2.7.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">window.branding21 = true;</script>

    <link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-light.png">
   
                          <link rel="stylesheet" type="text/css" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?2.7.0">
        <!-- All theme css files for theme switch -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jotfor.ms/css/styles/form.css?2.7.0" >
        <link rel="stylesheet" type="text/css" href="https://cdn.jotfor.ms/css/styles/nova.css?2.7.0" >
        <link rel="stylesheet" type="text/css" href="https://cdn.jotfor.ms/css/styles/buttons.css?2.7.0" >
        <link rel="stylesheet" type="text/css" href="https://cdn.jotfor.ms/themes/CSS/defaultV2.css?2.7.0" disabled>

   

       
<link rel="stylesheet" href="assets/css/StyleCitas/citas.css">
<body>

<div role="main"  class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="headerfondo" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Left">
            <div class="header-logo">
              <img src="assets/img/logos/logouvg.jpg" alt="" width="309" class="rounded-circle">
            </div>
            <div class="header-text httal htvam">
              <h2 id="header_1" class="titulo" data-component="header">
               CLÍNICA MÉDICA 
               <BR>UNIVERSIDAD DEL VALLE CAMPUS SUR</BR>
              </h2>
            </div>
          </div>
        </div>
      </li>
      
      <div class="card">
            <div class="card-body py-5 px-md-5">
    <div class="datos"><label id="inDoctor" name="inDoctor" for="selectDoctor"> <h3>DOCTOR ASIGNADO:</h3></label>
    <select id="seleccion">
    <option value="0">Selecciona:</option>
    </select></div>
    </div>
    </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="card" id="invoice">
            <div class="card-body py-5 px-md-5">
            <div class="datos"><h5>DATOS PERSONALES</h5></div>
              <BR></BR>
              <form >
                <!-- 2 column grid layout with text inputs for the first and last names -->
               <div  class="col-md-4 mb-4">
                    <div class="form-outline">
                      <input type="date" id="inFecha" name="inFecha" class="form-control" />
                      <label class="form-label" for="fecha">FECHA:</label>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="inNombres" name="inNombres" class="form-control" />
                      <label class="form-label" for="nombres">NOMBRES:</label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="form-outline">
                      <input type="text" id="inNit" name="inNit" class="form-control" />
                      <label class="form-label" for="nit">NIT:</label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4">
                    <div class="form-outline">
                      <input type="number" id="inTelef" name="inTelef" class="form-control" />
                      <label class="form-label" for="telefono">TELÉFONO:</label>
                    </div>
                  </div>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="inDireccion" name="inDireccion" class="form-control" />
                  <label class="form-label" for="direccion">DIRECCIÓN</label>
                </div>
                <div class="sintomas"><label class="form-label" id="sintomas" name="sintomas" for="sintomas">SÍNTOMAS</label></div>
                <!-- Sintomas input -->
                <div class="form-outline mb-4">
                  <input type="text" id="inSintomas" class="form-control" />
                </div>

               
                
                <div class="d-flex justify-content-center mt-3 login_container">
                <button type="button" class="btn btn-primary" id="btnAgregarCita">CREAR CITA</button>
                        </div>
        </div>
            
              </form>
        

