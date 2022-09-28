<div class="container">
  <main>
    <div class="col-md-8 col-lg-8">
      <form action="<?php echo site_url('insertMEDICOS') ?>" method="post" class="row g-3">

        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">Formulário - MÉDICOS</h4>
          <div class="row g-3">
            <div class="col-sm-6">

              <label class="form-label">CRM</label>
              <input type="text" name="crm" class="form-control" placeholder="CRM">
            </div>

            <div class="col-md-6 mt-4">
              <div class="form-group mt-4">
                <select name="especialidade_id" id="especialidade_id" class="custom-select" required>
                  <option value="">Especialidades</option>

                  <?php foreach ($especialidades as $valor) : ?>

                    <option value=" <?= $valor['id'] ?> "> <?= $valor['nome'] ?> </option>

                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="col-sm-6">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
            </div>

            <div class="col-sm-6">
              <label class="form-label">Telefone</label>
              <input type="text" class="form-control" name="telefone" placeholder="Num. de telefone">
            </div>
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
          <div class="col-5">
            <button class="btn btn-dark" type="submit">Inserir Cadastro</button>
          </div>
      </form>
    </div>

  </main>
</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>