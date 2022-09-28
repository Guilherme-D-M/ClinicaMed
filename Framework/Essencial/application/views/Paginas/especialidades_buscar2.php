<div class="container">
  <main>
    <div class="col-md-8 col-lg-8">


      <form action="<?php echo site_url('especialidades/') ?>" method="post" class="row g-3">


        <div class="col-md-12 col-lg-12">
          <h4 class="mb-3">Formulário - Especialidade</h4>
          <div class="row g-3">


            <div class="col-sm-6">
              <label for="validationDefault03" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" id="validationDefault03" required value="<?= $especialidades[0]->nome ?>">
            </div>

            <div class="col-sm-6">
              <label for="validationDefault03" class="form-label">Valor</label>
              <input type="text" class="form-control" name="valor" id="validationDefault03" required value="<?= $especialidades[0]->valor ?>">
            </div>
          </div>
          <input type="text" class="visually-hidden" name="id" required value="<?= $especialidades[0]->id ?>">
        </div>

        <hr class="my-4">
        <div class="col-5">
          <a href="<?php echo site_url('especialidades') ?>" class="btn btn-dark">Voltar</a>
        </div>
      </form>
    </div>

  </main>
</div>
</div>


<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>