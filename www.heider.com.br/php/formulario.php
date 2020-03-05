
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="../css/freelancer.min.css" rel="stylesheet">
</head>
<body>
    
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Formulario de Mensagem</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome:</label>  
  <div class="col-md-5">
    <input id="textinput" name="textinput" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
    <span class="help-block">Coloque seu Nome</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-5">
    <input id="email" name="email" type="text" placeholder="Digite seu Email" class="form-control input-md" required="">
    <span class="help-block">Email precisa ser valido</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
  <div class="col-md-5">
    <input id="telefone" name="telefone" type="text" placeholder="Digite seu Telefone" class="form-control input-md" required="">
    <span class="help-block">Coloque seu Email</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="mensagem" name="mensagem">Digite sua Mensagem</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>
  <script src="../js/formulario.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/freelancer.min.js"></script>

</body>
</html>