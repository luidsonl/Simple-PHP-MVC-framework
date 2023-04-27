<?php  use \app\core\Application; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MVC-Framework</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container d-flex flex-wrap">
      <div class="navbar-brand"></div>
      <ul class="navbar-nav me-auto" id="navDropdown">
        <li class="nav-item"><a href="/" class="nav-link px-3">Home</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link px-3">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-3">About</a></li>
      </ul>
      <ul class="navbar-nav" id="navDropdown">
        <li class="nav-item"><a href="/login" class="nav-link px-3">Login</a></li>
        <li class="nav-item"><a href="/register" class="nav-link px-3">Sign up</a></li>
      </ul>
    </div>
  </nav>
  <div class="container mt-4">

    <?php if(Application::$app->session->getFlash('success')){ ?>
    <div class="alert alert-success">
      <?php echo Application::$app->session->getFlash('success'); ?>
    </div>
    <?php } ?>
    
    {{content}}
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>