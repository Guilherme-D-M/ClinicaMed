<div class="container center">
  <main>

    <h4 class="mb-3 text-center">Buscar - Médicos</h4>
    <hr class="my-4">
    <div class="d-flex flex-wrap justify-content-center py-1 mb-2  text-gray">
      <form action="<?php echo site_url('buscarMEDICOS') ?>" method="post" class="row g-3">

        <div class="col-sm-12">
          <h5 class="mb-3">Especialidade - Médicos</h5>
          <select name="especialidade_id" id="especialidade_id" class="custom-select" required>
            <option value="">Especialidades</option>
            <?php foreach ($especialidades as $valor) : ?>
              <option value=" <?= $valor['id'] ?> "> <?= $valor['nome'] ?> </option>
            <?php endforeach; ?>
          </select>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
          <div class="col-sm-6">
            <input type="text" class="form-control d-none" name="id_especialidade" value=" <?= $valor['id'] ?>">
          </div>
          <button class="btn btn-dark" type="submit">Buscar Especialidade</button>
      </form>
    </div>
</div>
<div class="col-sm-12">

</div>
<div class="d-flex flex-wrap justify-content-center py-1 mb-2  text-gray">
  <form action="<?php echo site_url('buscarNomeMEDICOS') ?>" method="post" class="row g-3">
    <div class="col-sm-12">
      <h5 class="mb-3">Nome - Médicos</h5>
      <input type="text" class="form-control" id="nomeMedico" name="nomeMedico" placeholder="Pesquisar nome">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
      <button class="btn btn-dark" type="submit">Buscar Nome</button>
  </form>
</div>
</div>

<div class="position-relative">
  <div class="position-absolute top-0 start-50 translate-middle"><a href="<?php echo site_url('medicos') ?>" class="nav-link text-danger">Voltar</a></div>
</div>
</div>

</main>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>