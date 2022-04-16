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
            <li class="nav-item active">
              <a class="nav-link" href="InicioAdmin.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminBanners.php">Admin. Banners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminSalas.php">Admin. Salas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminSalas.php">Admin. Salas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminPeliculas.php">Admin. Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AdminHorarios.php">Admin. Horarios</a>
            </li>
          </ul>
          <a class="btn btn-dark" href="PerfilAdmin.php">Perfil Admin.</a>
        </div>
      </nav>
      <!--End barra Navegación-->

      <!--Main-->
      <main>

        <!--TOP-->
        <section>
          <br>
          <h1> Bienvenido al inicio Admin</h1>
          
          
            
        </section>
        <!--END TOP-->

        

      </main>
    

      <?php include "shared/footer.php" ?>