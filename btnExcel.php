<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
if ($_SESSION['personal']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title"> ALAMCEN   DE ENCOMIENDAS RECIBIDAS Y ENTREGADAS  </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            
                            <th>Guia</th>
                            <th>Nombre Remitente</th>
                            <th>Nombre Consignatario</th>
                            <th>Carnet</th>
                            <th>Fecha</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Detalle de Encomienda</th>
                            <th>Costo Encomienda</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                       
                        </table>
                    </div>




            <div class="panel-body" id="formularioregistros">
            <form name="formulario" id="formulario" action="" method="POST">    
            <div class="box box-danger">
            <div class="box-header with-border">               
              <h3 class="box-title">Datos Personales</h3>
           <hr>
              <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Nombres Completo:</label>
              <input type="hidden" name="guia" id="guia">
                <input type="text" class="form-control" name="nombre_completo" id="nombre_completo"placeholder="Nombres">
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Carnet de Identidad:</label>
                  <input type="text" class="form-control" name="carnet" id="carnet" placeholder="Carnet de Identidad">
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Expedido:</label>
                <select class="form-control" name="expedido" id="expedido">
                    <option value="Pando">Pando</option>
                    <option value="Beni">Beni</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Chuquisaca">Chuquisaca</option>
                    <option value="Potosi">Potosi</option>
                    <option value="Tarija">Tarija</option>
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Celular:</label>
                  <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
                </div>
                
                

               <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Fecha </label>
              <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha ">
              </div>
             
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Origen:</label>
                <select class="form-control" name="origen" id="origen">
                    <option value="Parada Chapare">Parada Chapare</option>
                    <option value="Bueltadero">Bueltadero</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    
                  </select>
                </div>
    
               
               
             
                
                 <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Destino:</label>
                <select class="form-control" name="destino" id="destino">
                    <option value="Parada Chapare">Parada Chapare</option>
                    <option value="Bueltadero">Bueltadero</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    
                  </select>
                </div>
    
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio"placeholder="Precio">
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Chofer:</label>
                <input type="text" class="form-control" name="chofer" id="chofer"placeholder="Chofer">
                </div>

            </div>
            </div>
           
               
            </div>
            </div>

            
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}
require 'footer.php';
?>

<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="scripts/almacen.js"></script>


<script type="text/javascript" src="unid.js"></script>
<script type="text/javascript" src="get_programa.js"></script>

<script src="../public/js/jquery-3.1.1.min.js"></script>





<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   





<?php 
}
ob_end_flush();
?>