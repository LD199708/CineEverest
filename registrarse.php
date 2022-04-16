<?php include "shared/header.php" ?>

      <!--Main-->
      <main style = " background-color:#F7F6EE">

        <!--TOP-->
        <section>
          <br>
          <h1 align = "center"> Registrarse</h1>
          <br>
        </section>


        <!--caja registrarse-->

        <section style = " background-color:#F7F6EE">
            <div class="col d-flex justify-content-center"  >
                <div class="form-group">
                    <div class="card text-black" style="border-radius: 25px;" >
                        <div class="card-body p-md-6" style="width: 30rem; background-color: #6980C5;" >
                            <form style = " background-color: #6980C5;">
                                <div class="form-group" >
                                <label>Nombre</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
                              </div>
                              <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                              </div>
                              <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="password1" placeholder="Digite contraseña">
                              </div>
                              <div class="form-group" >
                                <label>Repetir contraseña</label>
                                <input type="password" class="form-control" id="password1" placeholder="Digite contraseña">
                              </div>
                              
                              <button type="submit" class="btn btn-dark btn-lg float-right" align = "right"  >Aceptar</button>
                            </form>
                        </div>
                              </div> </div>
                
                 
                    </section>
                 
              </div>
          </div>
          
      </section>
        <!--END TOP-->

        

      </main>
    

      <?php include "shared/footer.php" ?>