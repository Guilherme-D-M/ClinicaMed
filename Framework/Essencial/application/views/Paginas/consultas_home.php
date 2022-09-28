<div class="container text-center">
  <main>
    <div class="col-md-15 col-lg-15">

      <h4 class="mb-3 text-center">HOME - <?php echo $titulo; ?></h4>
      <hr class="my-4">

      <table class="table table-bordered table-hover table-striped">
        <thead>
          <tr>
            <th> Data </th>
            <th> Hora </th>
            <th> Valor </th>
            <th> Paciente </th>
            <th> Médico</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($consultas as $nome) : ?>
            <tr>
              <td><?= $nome['data'] ?></td>
              <td><?= $nome['hora'] ?></td>
              <td><?= $nome['valor'] ?></td>
              <td><?= $nome['nomePac'] ?></td>
              <td><?= $nome['nomeMed'] ?></td>
              <td>
                <a href="<?= site_url('alterviewCONSULTAS/' . $nome['idConsul']) ?>" class="btn btn-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="<?= site_url('excluirCONSULTAS/' . $nome['idConsul']) ?>" class="btn btn-dark"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <a href="<?php echo site_url('insertViewCONSULTAS') ?>" class="btn btn-dark"><i class="bi bi-file-earmark-plus cadastrar"></i></a>
      <a href="<?= site_url('buscarViewCONSULTAS') ?>" class="btn btn-dark"><i class="bi bi-search"></i></a>

      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>