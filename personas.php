<html>
  <head>
    <title>SINACIS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>
        <div class="col-md-4">
          <h1>Formulario cliente</h1>
          <hr>
          <div class="well">
            
          <form class="form-horizontal" action="guardar.php">
              <div class="form-group">
                <label for="inputcedula" class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                  <input type="cedula" class="form-control" id="inputcedula" placeholder="cedula" name="ced">
                </div>
              </div>

              <div class="form-group">
                <label for="inputnombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="nombre" class="form-control" id="inputnombre" placeholder="nombre" name="nom">
                </div>
              </div>


              <div class="form-group">
                <label for="inputtelefono" class="col-sm-2 control-label">telefono</label>
                <div class="col-sm-10">
                  <input type="telefono" class="form-control" id="inputtelefono" placeholder="telefono" name="tel">
                </div>
              </div>

             <div class="form-group">
               <label for="inputplaca" class="col-sm-2 control-label">placa</label>
              <div class="col-sm-10">
                <input type="placa" class="form-control" id="inputplaca" placeholder="placa" 
                name="placa">
              </div>

              </div>
               <div class="form-group">
                 <label for="inputmarca" class="col-sm-2 control-label">marca</label>
              <div class="col-sm-10">
                <input type="marca" class="form-control" id="inputmarca" placeholder="marca"
                name="marca">
              </div>

              </div>
              <div class="form-group">
               <label for="inputdescripcion" class="col-sm-2 control-label">descripcion</label>
              <div class="col-sm-10">
                <input type="descripcion" class="form-control" id="inputdescripcion" placeholder="descripcion"name="desc">
              </div>
               <div class="form-group">
               <label for="inputcolor" class="col-sm-2 control-label">color</label>
              <div class="col-sm-10">
                <input type="color" class="form-control" id="inputcolor" placeholder="color"
                name="color">
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
        <div class="col-md-8">
          <h1>Formulario de personas</h1>
          <p>
            aqui se guardan los datos de los clientes que entren a nuestra pagina.
          
          <p>
            Es muy facil utilizar este sistema solo deben escribir su nombre , su numero de cedula , su numero telefonico y su e-mail.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>