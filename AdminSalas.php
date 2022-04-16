<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jossue Valverde N"> 
    <meta name="keywords" content="Desarrollo, Web, HTML5">
    <meta name="description" content="Esta es mi página de la clase">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a CinEverest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/PrincipalAdmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/Principal.css">
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grechen+Fuemen&family=Road+Rage&display=swap" rel="stylesheet">
</head>
<body>

    <!--Barra Navegación-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #385466;">
        <a class="navbar-brand" href="indexCine.php" >
        <img id="imgLogo" src="img/logoCineEverest.png" alt="Logo" width="60" height="50" style="margin: 20px;">
           <h3>CinEverest </h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="InicioAdmin.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminBanners.php">Admin. Banners</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="AdminSalas.php">Admin. Salas<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminPeliculas.php">Admin. Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminHorarios.php">Admin. Horarios</a>
            </li>
          </ul>
          <a class="btn btn-dark" href="indexCine.php">Cerrar Sesión</a>
        </div>
      </nav>
      <!--End barra Navegación-->

      <!--Main-->
      <main>

        <!--TOP-->
        <section>
          <br>
          <h1> Administrar Salas</h1>
        </section>
        <!--END TOP-->

        <!--MID-->
       
        
        <section class="mid">
          <br>
          <div class="container">
          <div class="row">
              
              <div class="col">
                  <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="dato1">Dato1</label>
                          <input type="text" class="form-control" id="dato1" placeholder="dato1">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dato2">Dato2</label>
                          <input type="text" class="form-control" id="dato2" placeholder="dato2">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="dato3">Dato3</label>
                            <input type="text" class="form-control" id="dato3" placeholder="dato3">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dato4">Dato4</label>
                            <input type="text" class="form-control" id="dato4" placeholder="dato4">
                        </div>
                      </div>
                      
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="dato5">Dato5</label>
                            <input type="text" class="form-control" id="dato5" placeholder="dato5">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="dato6">Dato6</label>
                            <input type="text" class="form-control" id="dato6" placeholder="dato6">
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-dark">Actualizar</button>
                    </form>
              </div>
          </div>
        </div>
          
      </section>
      <!--END MID-->


      <!--BOT-->
      <section class="container">
        <h2>Salas</h2>
        <div class="css-grid-table">

          <div class="css-grid-table-header">
          <div>Dato1</div>
          <div>Dato2</div>
          <div>Dato3</div>
          <div>Dato4</div>
          </div>
          
          <div class="css-grid-table-body">
          <div>dato1</div>
          <div>dato2</div>
          <div>dato3</div>
          <div>dato4</div>
          
          <div>dato11</div>
          <div>dato12</div>
          <div>dato13</div>
          <div>dato14</div>
          
          <div>dato21</div>
          <div>dato22</div>
          <div>dato23</div>
          <div>dato24</div>
          </div>
          </div>
      </section>
    <!--END BOT-->

        

      </main>
    

      <?php include "shared/footer.php" ?>