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
                    <h1 class="box-title">Escala Salarial </h1>
                       <div class="box-header with-border">
                       
                   
                    
                         
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    
                   
                    <!-- centro -->
                    <div class="table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>N° Encomienda</th>
                            <th>Remitente</th>
                            <th>Consignatario</th>
                            <th>Cedula Identidad</th>
                            <th>Celular Consignatario</th>
                            <th>Fecha</th>
                            <th>Fecha Recojo</th>
                            <th>Liquido Pagable</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        
                        </table>
                    </div>
                     <div class="panel-body" id="formularioregistros">
<form name="formulario" id="formulario" action="" method="POST">    
            <div class="box box-danger">
            <div class="box-header with-border">               
              <h3 class="box-title">Datos Personales Remitente</h3>
           <hr>
             
              
          
              
              <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Nombres Completo:</label>
              <input type="hidden" name="guia" id="guia">
                <input type="text" class="form-control" name="nombre_completo" id="nombre_completo"placeholder="Nombres">
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
                    <option value="">Elige origen</option>
                    <option value="Parada Chapare">Parada Chapare</option>
                    <option value="Bueltadero">Bueltadero</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    
                  </select>
                </div>
    
               
               
             
                
                 <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Destino:</label>
                <select class="form-control" name="destino" id="destino" placeholder="Destino ">
                   <option value="">Elige un destino</option>
                    <option value="Parada Chapare">Parada Chapare</option>
                    <option value="Bueltadero">Bueltadero</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    
                  </select>
                </div>
    
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Descripcion:</label>
                <input type="text" style="width : 240px; heigth :100%"class="form-control" name="detalle" id="detalle"placeholder="Descripcion">
                </div>
                
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Precio:</label>
                <input type="num" class="form-control" name="precio" id="precio"placeholder="Precio">
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Chofer:</label>
                <input type="text" class="form-control" name="chofer" id="chofer"placeholder="Chofer">
                </div>
                
                
                 <h3 class="box-title">Datos Personales Consignatario</h3>
                <hr>
                
                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <label>Nombres Completo:</label>
              <input type="hidden" name="guia" id="guia">
                <input type="text" class="form-control" name="nombre_re" id="nombre_re"placeholder="Nombres">
                </div>
                
             
                
                
                 <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <label>Celular:</label>
                  <input type="text" class="form-control" name="celular2" id="celular2" placeholder="Celular">
                </div>
            </div>
            </div>
            
                

            </div>

             


                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
<script type="text/javascript" src="scripts/rEntrega.js"></script>
<script type="text/javascript" src="scripts/encomienda0s.js"></script>
<?php 
}
ob_end_flush();
?>


