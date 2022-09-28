<div class="container">
  <main>
    <div class="d-flex flex-wrap justify-content-center py-1 mb-2">
      <div class="col-md-8 col-lg-8">
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('alterCONSULTAS') ?>" method="post" class="row g-3">


          <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Formulário - Consultas</h4>
            <div class="row g-3">

              <div class="col-sm-6">
                <label class="form-label">Data</label>
                <input type="date" name="data" id="data" class="form-control" value="<?= $data["data"] ?>">
              </div>

              <div class="col-sm-6">
                <label class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" value="<?= $data["hora"] ?>">
              </div>
              <div class="col-sm-6">
                <label class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" value="<?= $data["valor"] ?>">
              </div>
              <div class="col-sm-6">
                <select name="medico_id" id="medico_id" class="custom-select mt-4" required>
                  <option value="">Medicos</option>

                  <?php foreach ($medicos as $valor) : ?>

                    <option value=" <?= $valor['id'] ?> "> <?= $valor['nome'] ?> </option>

                  <?php endforeach; ?>
              </div>
              </select>

              <select name="paciente_id" id="paciente_id" class="custom-select mt-4" required>
                <option value="">Pacientes</option>

                <?php foreach ($pacientes as $valor) : ?>

                  <option value=" <?= $valor['id'] ?> "> <?= $valor['nome'] ?> </option>

                <?php endforeach; ?>
            </div>
            </select>

          </div>
          <input type="text" class="visually-hidden" name="id" id="id" placeholder="" value="<?= $data["id"] ?>">
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
          </label>
        </div>
      </div>

      <hr class="my-4">
      <div class="position-relative">
        <div class="position-absolute top-0 start-100 translate-middle"><a href="<?php echo site_url('consultas') ?>" class="nav-link text-danger">Voltar</a></div>
      </div>
      <div class="col-5">
        <button class="btn btn-dark" type="submit"> Alterar Cadastro</button>
      </div>
      </form>
    </div>
</div>
</main>
</div>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>