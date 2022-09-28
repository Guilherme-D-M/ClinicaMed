<div class="container">
  <main>
    <div class="col-md-8 col-lg-8">


      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th> Nome </th>
            <th> CRM </th>
            <th> Especialidade </th>
            <th> Telefone </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($especialidades as $nome) : ?>
            <tr>
              <td><?= $nome['medicoNome'] ?></td>
              <td><?= $nome['crm'] ?></td>
              <td><?= $nome['especialidadeNome'] ?></td>
              <td><?= $nome['telefone'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>


      <hr class="my-4">
      <div class="col-5">
        <a href="<?php echo site_url('medicos') ?>" class="btn btn-dark">Voltar</a>
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