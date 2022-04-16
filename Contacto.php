
<?php include "shared/header.php" ?>

    <!-- codigo para mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    


</head>



    <main>
        <!---Mapacodigo-->
        <div id="miMapa">


            
    
    
    
    
        </div>
        
        <section class ="containerpreg" >
            <h2>Contactenos</h2>
            <h3>¿Tienes algo que quieras decirnos?	</h3>
        <div class="col align-content-start">


            <div class="input-group">
                    <span class="input-group-text">Nombre y apellido </span>
                    <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                    <input type="text" aria-label="Last name" class="form-control" placeholder="Apellido">
                
                </div>
            
            
            <div class="input-group">
                    <span class="input-group-text">Correo Electronico </span>
                    <input type="text" aria-label="email" class="form-control" placeholder="Tu correo">
                
            </div>

                

            <div class="input-group">
                
                    
                        <input type="text mb-3" aria-label="subject" class="form-control" placeholder="Escribe tu titulo">
                    
            </div>

            <div class="input-group">

                    <textarea type="text" aria-label="Como podemos ayudarte" class="form-control" placeholder="Como podemos ayudarte?" cols="30" rows="10"></textarea>
                    </div>
                
            
            
            <div class="input-group">
            <button type="button" class="btn btn-dark">Enviar tu pregunta</button></> 


              </div>
            </div>
        </div>




        </section>

    </div>

    

   

    </main>

        
       



            <!--End Copyright -->
          </footer>
          <?php include "shared/footer.php" ?>
    <!--codigo de archivo js para leaflet-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/CodigoMapaCine.js"></script>
    </footer>


    
    
</body>
</html>