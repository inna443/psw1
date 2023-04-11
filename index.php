<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>bootstrap</title>
</head>
<body>
<div class="jumbotron text-center">
  <h1>CADASTRE-SE</h1>
  <p>Realize o seu cadastro e fique por dentro de tudo que acontece por aqui!</p>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<form>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
  </div>
  <div class="form-group">
    <label for="sobrenome">Sobrenome:</label>
    <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome" required>
  </div>
  <div class="form-inline">
    <div class="form-group">
    <label for="tel">Telefone:</label>
    <input type="tel" class="form-control" id="tel" placeholder="(xx)x xxxx-xxxx" required>
  </div>
  <div class="form-group">
    <label for="date">Nascimento:</label>
    <input type="date" class="form-control" id="tel" required >
  </div>
  <div class="form-group">
    <label for="end">Endereço:</label>
    <input type="text" class="form-control" id="end" placeholder="Digite seu endereço" required >
  </div>
  <div class="form-group">
  <label for="CEP">CEP:
  <input name="CEP" class="form-control" id="CEP" required pattern="\d{5}-\d{3}"/></label>
  </div>
    </div>
    <br>
    <div class="form-group">
    <label for="crie-pwd">Senha:</label>
    <input type="password" class="form-control" id="pwd"placeholder="Crie uma senha de acesso">
  </div>
  <div class="checkbox">
    <label><input type="checkbox">Lembrar-me</label>
  </div>
  <button type="submit" class="btn btn-default">ENVIAR</button>
</form>
</div>

    
    
    
</body>
</html>