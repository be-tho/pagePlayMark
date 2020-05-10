<section  class="row col-12 col-md-8 m-4 p-2" v-if="registros.verForm">
        <div class="col-md-12 text-center">
          <h2 class="col">Contactate con nosotros</h2>
        </div>
        <div class="col-md-12">
            <form id="formulario" action="index.php?s=home" method="POST" class="col">
              <fieldset class="border p-4 my-3">
                <legend class="col-2">Datos</legend>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="apellido">Apellido</label>
                  <input type="text" class="form-control" id="apellido" placeholder="Escriba su apellido" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Correo</label>
                  <input type="email" class="form-control" id="email" placeholder="Escriba su correo" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="edad">Edad</label>
                  <input type="number" class="form-control" id="edad" placeholder="Edad">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fechaNacimiento">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fechaNacimiento">
                </div>
                <div class="form-group col-md-6">
                  <label for="nacionalidad">Nacionalidad</label>
                  <select id="nacionalidad" class="form-control">
                    <option selected>Elegi...</option>
                    <option value="argentina">Argentina</option>
                    <option value="chile">Chile</option>
                    <option value="peru">Perú</option>
                    <option value="colombia">Colombia</option>
                    <option value="bolivia">Bolivia</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-12 row mt-2">
                <div class="form-check col-md-6">
                  <input class="form-radio-input" type="radio" id="masculino" value="masculino" name="sexo">
                  <label class="form-radio-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check col-md-6">
                  <input class="form-radio-input" type="radio" id="femenino" value="femenino" name="sexo">
                  <label class="form-radio-label" for="femenino">Femenino</label>
                </div>
              </div>
              <input type="submit" class="btn btn-outline-success float-right" value="Enviar">
            </fieldset>
            </form>
        </div>
      </section>
