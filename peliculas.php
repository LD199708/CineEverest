<?php include "shared/header.php" ?>


     

<!--Main-->
  <main class="colorcito">
          
            
      </section>
        <br>
        <section >
          <div class="col d-flex justify-content-center">
            <img src="img/redd.jpeg" class="img-fluid" alt="Responsive image" id = "top_image"> 
          </div>
        </section>
                 
              </div>
          </div>
          
      </section>
      <br><br>


      <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Nombre de la película</h1>
                    <br>

                    <p>Actores : </p>
                    <p>Director : </p>
                    <p>Duración :</p>
                    <p>Género : </p>
                    <p>Idioma : </p>
                    <p>Sinopsis: </p>
                    <p>Estado : </p>
                    <p>Clasificación:  </p>
                    <p>Fecha de publicación : </p>
                </div>
                <div>
                  <br></div>
                <div class="col-lg-6" style="padding: 2px; ">
                  <iframe width="680" height="380" src="https://www.youtube-nocookie.com/embed/upGoAejd7LM?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
      </section>
      
        <!--END TOP-->

      

        
          <section class="Selector" >
            <div class="flex-container">
              <div class="row2">
                    <h3>Selecciona tu cine y sala</h3>
                  <div class="mb-3">
                      <select id="Sede" class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example">
                         <option selected>--Seleccione su sede--</option>
                          <option value="Nepal, Khumjung">"Nepal, Khumjung"</option>
                          <option value="Japón, Shizuoka">"Japón, Shizuoka"</option>
                          <option value="Estados Unidos, Colorado">"Estados Unidos, Colorado"</option>
                          <option value="Costa Rica, San Jose">"Costa Rica, San Jose"</option>
                          <option value="Argentina, Bariloche">"Argentina, Bariloche"</option>
                        </select>
                  </div>

                  <div class="mb-3">
                      <select id="Horario" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          <option selected>--Seleccione su horario--</option>
                          <option value="1">"3:30 PM"</option>
                          <option value="2">"5:30 PM"</option>
                          <option value="3">"7:30 PM"</option>
                          <option value="4">"9:30 PM"</option>
                          
                        </select>
                  </div>

                  <div class="mb-3">
                      <select id="Sala" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                          <option selected>--Seleccione su sala--</option>
                          <option value="Sala 1 "> " Sala 1 "</option>
                          <option value="Sala 2 "> " Sala 2 "</option>
                          <option value="Sala 3 "> " Sala 3 "</option>
                          <option value="Sala 4 "> " Sala 4 "</option>
      
                        </select>

                        <button id= "Seleccion" class= "btn btn-dark"> Seleccionar asientos</button>
                  </div>

              </div>
            </div>

          </section>
        


        <!--Clase de asientos
          el option value es el precio -->
      
          <section class="TicketsBooking">
            <div class=" Ticket-container">
              
              <select name="Peliculas" id="Peliculas">
                        <option selected>--Seleccione su pelicula--</option>
                        <option value="1">Batman</option>
                        <option value="2">RED</option>
                        <option value="3">Sonic</option>
                        <option value="4">Los Secretos de Dumbledore</option>
                        <option value="5">I Care a Lot</option>
                        <option value="6">White Chicks</option>
                        <option value="7">No se aceptan devoluciones</option>
                        <option value="8">Fast & Furious 9</option>
                        <option value="9">Mulan</option>
                        <option value="10">A Star Is Born</option>
                        <option value="11">Don´t breathe</option>

                        </select>
                    </div>

                    <ul class="showcase">
                        <li>
                            <div class="seat"></div>
                            <small>Disponibles</small>
                        </li>

                        <li>
                            <div class="seat selected"></div>
                            <small>Seleccionados</small>
                        </li>

                        <li>
                            <div class="seat occupied"></div>
                            <small>Vendidos</small>
                        </li>
                    </ul>

                    <div class="container1">
                  <div class="screen"></div>

                  <div class="row">
                    <h9>A</h9><div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                  </div>

                  <div class="row">
                  <h9>B</h9><div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                  </div>
                  <div class="row">
                  <h9>C</h9><div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                  </div>
                  <div class="row">
                  <h9>D</h9> <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                  </div>
                  <div class="row">
                  <h9>E</h9>  <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                  </div>
                  <div class="row">
                  <h9>F</h9> <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat"></div>
                  </div>
                </div>

                <p class="textcompra">Tienes seleccionados <span id="count">0</span> asientos por el precio de $.<span id="total">0</span
                  >
                </p>
            


          </section>
        

      </main>

      <script src="js/SeleccionAsientos.js"></script>
    
      <?php include "shared/footer.php" ?>
      