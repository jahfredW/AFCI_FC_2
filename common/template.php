<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
    
    <title>template</title>
</head>
<?php $equipes = ["France", "Pays-bas", "Italie"] ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../../image/Logo.png" style="height : 10vh; margin-left: 1.8vw;" alt="..." >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/afci/common/index.php">Menu principal
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Equipe</a>
          <div class="dropdown-menu">
            
            <?php for( $index = 1; $index <= count($equipes); $index ++): ?>
              <a class="dropdown-item" href="/afci/common/equipes/equipe_<?php echo $index ?>.php"><?php echo $equipes[$index - 1] ?></a>
            <?php endfor; ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="background-image : url('../../image/Background.png');" >
<?php echo $content ?>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>