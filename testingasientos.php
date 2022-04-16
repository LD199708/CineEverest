<?php include "shared/header.php" ?>




<section class="TicketsBooking">
        <div class="Ticket-container">
          
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
            <script src="js/SeleccionAsientos.js"></script>


      </section>
        

      </main>
   