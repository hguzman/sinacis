<html>
  <head>
    <title>SINACIS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>    

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        <div class="col-md-6">
          <h1>citas</h1>
          <hr>
          <div class="well">
            
          <form class="form-horizontal" action="guardarcitas.php" method="post">
              <div class="form-group">
                <label for="inputnombre" class="col-sm-2 control-label">NOMBRE</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputnombre" placeholder="nombre" 
                  name="nom">
                </div>
              </div>

              <div class="form-group">
                <label for="inputcedula" class="col-sm-2 control-label">CEDULA</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputcedula" placeholder="cedula"
                   name="ced">
                </div>
              </div>


             

             <div class="form-group">
               <label for="inputplaca" class="col-sm-2 control-label">PLACA</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputplaca" placeholder="placa" 
                name="placa">

              </div>
              </div>

             
              <div class="form-group">
               <label for="inputdescripcion" class="col-sm-2 control-label">DESCRIPCION</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputdescripcion" 
                placeholder="descripcion"name="desc">
              </div>
              </div>

                <div class="form-group">
               <label for="inputfecha" class="col-sm-2 control-label">FECHA</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputfecha" 
                placeholder="fecha"name="fecha">
              </div>
              </div>

              

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">guardar</button>
              </div>
            </div>
          </form>   
          </div>

        </div>

        <div class="col-md-6">
          <h1>PIDE TU CITA AQUI</h1>
          <p>
            aqui se guardan los datos de los clientes para pedir su cita.
          
          <p>
            Es muy facil utilizar este sistema solo deben escribir su nombre , su numero de cedula , la placa de su moto y una descripcion del servicio que necesita .
          </p>
        </div>
      </div>
    </div>
    <script>
        $('.dropdown-toggle').dropdown();
    </script>

  </body>
</html>