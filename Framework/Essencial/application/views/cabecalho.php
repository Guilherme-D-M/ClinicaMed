<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Clinica Médica</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap Links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4">Clínica</span>
        <div class="d-flex flex-wrap justify-content-center py-1 mt-1  text-gray">
          <?php $siteLink = "https://media.istockphoto.com/vectors/cross-clinic-symbol-to-healthcare-people-vector-id801587242"; ?>
          <img src="<?php echo $siteLink; ?>" widht=35 height=35>
        </div>
      </a>

      <ul class="nav nav-tabs">
        <li class="nav-item"><a href="<?php echo site_url('Home') ?>" class="nav-link active text-white bg-dark" aria-current="page">Home</a></li>
        <li class="nav-item "><a href="<?php echo site_url('especialidades') ?>" class="nav-link text-dark">Especialidades</a></li>
        <li class="nav-item"><a href="<?php echo site_url('consultas') ?>" class="nav-link text-dark">Consultas</a></li>
        <li class="nav-item"><a href="<?php echo site_url('usuarios') ?>" class="nav-link text-dark">Usuários</a></li>
        <li class="nav-item"><a href="<?php echo site_url('pacientes') ?>" class="nav-link text-dark">Pacientes</a></li>
        <li class="nav-item"><a href="<?php echo site_url('medicos') ?>" class="nav-link text-dark">Médicos</a></li>
        <li class="nav-item"><a href="<?php echo site_url('logOut') ?>" class="nav-link text-danger">Logout</a></li>
      </ul>
    </header>
  </div>