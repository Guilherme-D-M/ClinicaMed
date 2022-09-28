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
      </a>

      <ul class="nav nav-tabs">
        <li class="nav-item"><a href="<?php echo site_url('home') ?>" class="nav-link active text-white bg-dark" aria-current="page">Home</a></li>
        <li class="nav-item "><a href="<?php echo site_url('especialidades') ?>" class="nav-link text-dark">Especialidades</a></li>
        <li class="nav-item"><a href="<?php echo site_url('consultas') ?>" class="nav-link text-dark">Consultas</a></li>
        <li class="nav-item"><a href="<?php echo site_url('usuarios') ?>" class="nav-link text-dark">Usuários</a></li>
        <li class="nav-item"><a href="<?php echo site_url('pacientes') ?>" class="nav-link text-dark">Pacientes</a></li>
        <li class="nav-item"><a href="<?php echo site_url('medicos') ?>" class="nav-link text-dark">Médicos</a></li>

      </ul>
    </header>
  </div>

  <div class="d-flex flex-wrap justify-content-center">
  
  <?php $siteLink = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAllBMVEX///8AF0MAFUIAADsAADIAADAAAC4AADYAADQAADgAADUAE0EAEUAAACwADj8AACoACD3j5enBxMxyeIvu7/L19vjY2t/Jy9GRlqReZXtscoaorLd+g5Tm6OwtOFlka4C2ucKcoK1bYnlASWVSWnLR09nb3eI5Q2CJjp2tsbsLHkgYJ04iL1NMVG4zPV2Kj54eK1AAACVQOLmMAAASFElEQVR4nO1dZ3fqOrMOkuWCm8C0UILpAUKS/f//3IV4JJtmq5nkvJfnw1nr7BWsNl0zo5eXJ5544oknnnjiiSee+P+E7mS96mdYrSfd356OOXR66SBZvlE7tm1iZSD28f+it2UyS3ud356gDjrtwbzRJK6HaYAal0ABxZ5LnMZ80P4vLrM1mu5Cy6P+1cou4VPPCvfTUeu3pyyBbppEtiOwuBwBbtqNpP2f4M7J7OBaWGZ1/DCx5SxHf5xgO6PP2KEKqwMg6sSL7d89yfar04zuzR0FEaU4A6VRgK5lT4bI9ab9317KLXQGDUJvzNqPsNckIfHfDstpMj4hmS4Xb/7x35oejm7QM8L2fvbXDnKSuM7VXFGEXUI3ySDtT279pn/UlBtKXBxd7YzvOOO/xJHraYwvJxk5hCzGabUOaKXjjU28S/JGXpj8FQWyntv4ksws5zBbSXxjNVs0rYtdOhLr9C+scTINz9nPxwSraLZOOvTIuZo5rjH5bVrtji/Oj5Jdoi4J+4lP6PkayZfB6cpjRL3ifALv31xX0LeXsVc8SOTsUhNTVULvwyrOJbJ2AxM0NfnyraC4b/bml9hxbBflH7XfUmOf3n6cESv9FVLt75yCgKHx0qwd0j6ExTU2P3pGPy+AcVggpMhemp/AalGkkcgeGB+hDOudc8YnMqpPHO03UuBz9+2WYVQTZnZ+gKi5b9c20BYVZDW10toGusCUFBmwXiEwjnNSReG41rEYWt/5viJ7WbcgX2+sgsDZPMDlaLv5plJrW/+AL7OwMCKtXabO4pz5yeExRuPk083FWpzWO9g4zOV3OKt3rAK+4ly0xbUOO895wvl4pCm12uUGfp3y5pBrQXtY3zC30F3mm0uSukbZcCEa2KO6BrmLQcytRHdezxAbTigUP9xKPKJNODM6tSwxXyD++B3He92gdS7xky/QOZj/uhi6b7i+JR44D1pT09+WmQaXda5hcTPnXyaPsQ3vYerWM5ExF9X27waGXl6GfCqhQXk+45bMg/3QW+BLRKGxsEKfa6JfJtEM0ybMxrcNmVUtlxnb1l9Y4FEoMKkX7cw4UzvmvDR/U4oWwVUzXpj43JJ9zlua+JwRfDDV777rf2zAQhb0U/9jptCNmAEXaweJekyMBtFfurNc2yD8kKdrQTZgs5C9NjI1U2jHjLQ0WXHIxJb9iIiMDN6ZcUO0fP42o1FH3wrsttqj92T6Ok3eR20DimzBJKCOVuyyC8voTXM6vcGG2pbjYUop9hzLpouBJtl3WUqSjghMgEYR0QqodwbfoXeRjeBHXvgx05ISfcaKljKd9hmN2qnGRFavxAkatxA4ZKoTLHgH8w05qju1g4nhV/VZTOYxvrk8+HT8qkEeb2BtYUVbZMC2yFPXhF9xVQ4YDtXdlRZzCUIlvd9xtX5+wvqjWeA+nx5FDCHkKHDO8hatT2VhOACVEexVfj3FujQ6+pdfOASeHR0Go3Zv1WuPBgdqF9IRon/KyvYDRnAVhA0z1xBRZePEZktA2P4enMuU3mBfyFOxVd2yFchT5Mhz0gEYSFkUH5ij2sD28JbI7E3zq3pLlVCGsE2e9B714QCCD8WhF8zeC+zXe3zWmvPLZEdRHHY84HRpUvsEAleNhfDoo7cr+0I7YKTqKJ4ik/hY0q5sg1dIFaO/CSNRUnGD031lgSXVEEnDVzrEBRyhrWZzzJiQEbjs4zcuYao01tZS4cQVCFKqRjorNmkhc28E3iwK1fTid8bLyJIRp68g5GI1+5+Ze4I30iMQ+YoeTAoc5UhI/RbJdhWrBdfGcAVgiw45sLQ000e2ob4vMUUQhKESFzJr0RO/JoZ4HiJKFjDjRImMIgvpCNI5laa5LtC1rMgHQMJ/tBH9wRbsWVtJF/ZAjsYyBMDCJZaSLzVzJMUGqIpAjfGXVOU42K+UlGIXEkFFf92CQ2gq3V61MsEo63eDcEOxEicmGR/7DbE/H4CcISpjvbx7aocBCspR2lbmCBExvgIzSI1gmC6MZRlqZUtKizOAwsBC4pvth62UFssmKh+J3v9sLLKVZM2IqWCRPwYyU3SbvrJfN+W99oHyL4/oMJUoEnGBA/fUAkSbHzmMFKT+ikgQ2hWYLBb49RqINFYyg7tEnQCy8BSiKuO+bDN3DQXVfwraU5FIe0TdNsnUsGJcqBsLS4+MzBqeWlYJbKWMmc8xzpQaUUv8P4jOuwtuheI4IC6EGP4SQD1qoobTXqUh1s6EEpLwRIpINM4hddXP/2QUZRO3q4icmSSKaRfgVxAVt6ufba6nmHywD8TIB6xuRVLhK1Q5w5WGlHrh5FO1QV3QnNJGF8DAChVjQ4zIq6wpGEXtpuOFX3ZYKp4lUKkqg0zAqfHK/wwkkqJhwUlFichB06hS6csu8xgqAqBwDaDmw7xws1TJ5Bto/PaEKRXZXYg9KmpDbuMr8dJcx0N8yemv1Ovrwj2Hwl1VBlCn/k7ht+CXKvFwYexyUdPSFDTsAw0ib7ev2U9VL/YnWYgQRWV/lFpaAvsIiAkpkBoQGcLKY4Nz4pZZNTCKotl9AvhpCj4+mPzKYpx/odSgYsI+VR6Fhy5lyXQN7o+rPjbMvvQLSw2TJANzoKXjWDA9+bvcHKBuSk13iGCEGtlY8IlybrjGhF3JaiQig91WurnQP8VRH4VHWyVNE5bbolOv3a82bCEUoK4sjuj8awAnynhQLGvEr7AqSwHB+qjkQqmlHOwsAEyTRiQT6QHnruHoVKx0Mxngf9//E4gj6fBCfvfUcMSFDUtF9rFWMnnGZGUata8VsmRgh9gQLjSdsXqApl4Vc+ZdoJILF+ah6ZXGtFhmq2jO3zaExIZAxZwt4A3uTO4TAtiuyv4L4J2V8iGhaog03xHNUi0IwZQoO71oV45vlpOISDWh8twb/XR5iJmWpLbDGWqvcJ33JQirZv1KWAqqlPC9CTDJSrx8RqXaVZQjfi4N561ML/b3vPoWudr9Z6aV0VozkuaEJO8PEMXDe3zRmhe6QRiol0wq42BshQaKiF8LTYiwNb7FGeuEFJLcYwNFOeIrNNERYtnMZ49weNie02BrtAmLSfyxiaLeYfUKwaYxUklZ7ER0/GaT7IaDbXu1XrW3X9OIOMVWaMhMTxaItpXkK7Cos5lq/vf4okwGe02L2MRqeheNTqly9Okc1RF3MCn17NIcaVOo4S5yPw11oWDa4n5qlBHfooDOwr5dD3R2gLGxCnhm09xXO8w/1Fa9HO29Vd4WGtkLc518vrOxyvKqsmxdXy1Z4DbSfdkS0bfJZm8QorBK/iRrDo/K/kQOq8Gyca/p889QjeXAXMO+TFCWBtw/gypClkA3nWJyWXd4tcTII/7YzCInmTlcmjimc8F5gf7UsgQbz/vY3g8McKNAJEoopiqC7mxHysoOrxB44UGbI1O4gCwzq1lUX09+d8bOnarRE+Pdo1pK9pqmKYsIlxmAIjHVKnSSf1fNvRGi2DnaM6FtOdbxv8RyML3qOx9YkdYameFdRgwQbIs0qqO/3Mvm3tQjFp2PR+3+utM9obPut2fjOSXk0nzzLZ22yBCmIWXZ3h3dG64tds7m7B+l6XLWv22Vdfqz5WULb99eKFexA+mUF/XCPaziLWVrQYrrQ/ioCKps6v44IGdUTW3FlCGx612wXZXy0l5mdtHSjiwnEdM6/aTpFn0pZ6+krdpC17sauRSdRaGV6vEkNqnEj9PP4u4EocoxiuVysH2Q95/auDBFGs9lj2F1KBS2I3cj71AdhOgPDB95UfNVcHcDtebXq4OdCx0qzygg46ouP1likaRAK/TeRO5eOV+kkdfvI1lKBfe90vVTKuyYFPqnYq148sDNSdWSC6aMBBPWVJKa1phLQmTP9SISnWWucBypWMNSKOmLWzUyTvAq75weGWgOPSJ8v/CH+HViF5RqdT8eLJvn3c/jFI6RxvCFhuFUfIngOvnV5QgQ+xfWiKuQU5Wx3sL5bQ3diy6RpW9Xx+uhvDIouQwvYs0fQUIGu18P+OUVFi2C3AmmeR9ZHfZPLKmp4zFHMFCrOL2DlKtXwcaBUI8m1AEEgo5iZMrb+wWGmyevOHeLtZMAIhUyxoRLM444MD0YOKb7l/e4gWOJqH5I/RVKv+6wCqLqQ+GtaQNsvkF7j3O4wMXbipVXCwkmlgZZGcrg/er8Zh0tB7mURtX5uBDAEPQYRlDoVhUX7jRhk5FauWkl+A5GlYKdFbunQh/uuGJ/vmBSRr/D5h2MeFPDCnoCFYdEU6rmQnm+PJHJqq978phdJMflqkg2v5i13ylti8G6gzRwTW38f8DoJCitpWNyJhTmlgDq1ctuu/nYhroV30aHReK8MmsMiE7iVnAAQcWy9CmWMaPYhUgUvHdjfP98WvA3rrhTy9rtlTQmYr1pa2TCDKzZTcmNEusZIRN6qUwrH7Bx62+fzJJrSXrnDyagN6VSuVgC5b1D7DIa/Vd/d2HWpvSu58eOo7I+9gwsC/bOIbImRPKd7hQwhxXc6Y04gd2WzORalf6M8Smij+iA3YEA3J3eLOCyI9l2wqxt4s22PeCqNKzHvKfz5ZQM1wMili495R3bbtmycIRaVQsywCXjgV6WPsKcE2+47mCa35dupjFjA14bwMz+UsinbIV3Nw4Kf0RDOQYAls0NgkJQhKRSLsVaXTcvdfpK3oTQBVyJXbfnYfaAUiUKb1d+6X+C/qkqCzeJDlPqFwvpQctFxTKGEcQoLnvzY60+UmqA65RLxmDtrhXbZvLfn7czhCvG8oQA04CI9oWd/wW+umqXVU4D53QKqcYPsEiLQP41mbIKK5WeTQBu1xcdLyBS5bJ5NYCRcbavrImoel/9vINtIU7C/enHvi7HuzHmw7KCN62HG7j/mbMy5AModo5TB1xO5yl3vGpF7/UURqd5yJIF/R/3CGkG0FHcduEP4OjQ6Al7kKcsZNmVvl80hPT8TqzLggy678y8rBkt4EwiAz8gnWJoJbA7MStjRPaola/8tgUHD4u6P9KG3fM//nWrsz5QU1Z0ZKIU5ZXdOf+8xpdIXhGbA4z8k+oxON92XbB6SXTqzg2CRi3xTQuFbJItZx0zlSETllCJ4j5zRh+sDU/o89zXNiv5N/V2Xt5i3XdX0GHHZEWGIDpwcN7KYjtu6v3Dwh0QAgn2cH1/AmSII+bVIfXnYa7xXkysbGi16FHHJjqfhMl3SItvyWYcbuDZQWkszyvhTL8Ymr8HzEX2ozE+S5F3jT99vil+/8GuU4ZBcZPreLa6uETVxpFamBU4pVnz0+O/s8KtU/MCj0vMuwN4aT1DlCD1eIqgZG6tBPJ3v1H46KeBx3kOJDH86HgR81wvuotHGm6dBX9xvKFUqiCMcd7wgmp0dZNFmqd/I4Hnh7Qwy6sOfGMZs1UY2nzQQDX4K462lRtPHn6EE9XGuSLEwQPi0K284UrDD6d13wJ3p2FeZ+IuHvPs8muh4wWu+QZqZOVa2I8fJsBnhVYJiGzqyxlabSzOgQ3qpLUNdIXermAjRvHd5//00JrHBYfJUij20kESFmqZsZ0YqeA/wyQpPHLZiOyHx77aqHCMCIeJ2XNsDcNCZSmy3n7j4fOzYzyuUbrk8D76y+L6GrT27Lk7WH2fNS6h9qcZl2P7dlZuG4SHevhcBCPsFba6Ebm2YOnvfaySsHnWYMndPz42W0B3HJ6X32P7411de6zev+3z73kqL/2aRes1PI8QBZ6NKmvUb6DbHke2d95tApPxY4yYcvSWF/t+6jOA5zOZo+zN5vii98Dx/EgNSkgNvderB9QRdWxn+ZVWy4hW+n44/u1F/4iG79njv7K+E1pDy7lqRoOoZxH6NvxK++trYuv2+tuv6Qcm7mV3jBOpu/j98Vcj5egMKLnVvAwFpzZtdoh3n4f56zAZJ8PX5eFzh0Pbano4uNHMxcfhx+gv8N8V2nPrbl+aBvKDiFJ8AqVR4N9trkQtrK1y6kNn9BY70b25VwPRZnxI/+Tx5WjNFpZ71YJHBD8SePvXuO8mOukQE0ewDVaGALv2ftz/46d3hvVojkLrhpS8Xhx1rPBjuP1LqkEUk/bXMnDJUWLSa5GJUESx4xJnN539p87uCp3VdjBcvuEwtG1iZSB2GBP0OU9m6Q1F+Z9Ft9Vb9TOs1pP/oYU98cQTTzzxxBNPPPGEAP4Ps9cIWLssA4YAAAAASUVORK5CYII="; ?>     
  <img src="<?php echo $siteLink; ?>" widht = 150 height = 150>
 
     </div>
     <div class="d-flex flex-wrap justify-content-center">
     <h3> Acessar </h3>
     </div>

  <?php
  defined('BASEPATH') or exit('No direct script access allowed');
  ?>
  <div class="container">
    <div class="row">
      <div class="card p-4">
        <h3> Login </h3>

        <form action="<?php echo site_url('usuarios/verificarlogin'); ?>" method="post">

          <div class="form-group">
            <input type="text" name="text_usuario" class="form-control" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input type="password" name="text_senha" class="form-control" placeholder="Senha" required>
          </div>

          <hr class="my-4">

          <button class="btn btn-dark position-relative bottom-0 start-50 " type="submit">Entrar</button>
          <div class="position-absolute top-0 end-0">
            <a href="<?php echo site_url('insertView') ?>" class="nav-link text-danger">Criar conta</a>
          </div>
        </form>


      </div>
    </div>
  </div>
  </div>