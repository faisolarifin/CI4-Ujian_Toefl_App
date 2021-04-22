<!doctype html>
<html lang="en" class="h-100">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
      * {
        font-family: Poppins;
      }
      .menu i {
        font-size: 5em;
      }
      .navbar {
        position: static;
        min-height: 10vw;
        z-index: 1;
      }
      .main-container {
        position: relative;
        margin-top: -4.7vw;
        z-index: 2;
      }
      .main-container .col, .main-container .col-10  {
        background: #fff;
      }
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    
    <!-- Begin page content -->
    <main class="flex-shrink-0 mb-5">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class=" mt-auto py-3" style="background:#33485d">
        <div class="container">
            <span class="text-light">Copyright &copy; <?= date('Y') ?></span>
        </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</body>
</html>
