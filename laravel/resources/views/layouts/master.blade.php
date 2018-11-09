<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
  <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Livraria Global - FAQ</title>
</head>
<body>
<nav class="navbar navbar-inverse menubar" >
  <div id="navfixed">
    <div class="navbar-header   col-md-4 col-xs-12"> <!--Boostrap Responsive 1-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!--Este é o botão minimizado-->
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#"><img src="foto/logo.png" alt="logo" id="logo"></a>
    </div>

    <div class=" col-md-4 col-xs-12"> <!--Boostrap Responsive 1.2-->
      <div class="row">
        <div class="col-xs-12"> <!--Boostrap Responsive xs mobile-->
          <form class="form-inline"> <!--Campo de busca-->
            <div class="form-group">
              <label class="sr-only" for="exampleInputAmount">Amount</label>
              <div class="input-group">
                <input type="text" class="form-control" name="pesquisa" id="exampleInputAmount" maxlength="50" placeholder="Buscar" required >
                <div class="input-group-addon">
                  <button id="lupa" type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"><!--Lupa de busca<span>-->
                    </span>
                    </button>
                 </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse  col-md-4 col-xs-12 text-right" id="myNavbar"> <!--Boostrap Responsive1.3-->
        <ul class="nav navbar-nav">
          <li class="active"><a href="/home">Início</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/cadastro"><span class="glyphicon glyphicon-user"></span> Inscreva-se</a></li>
          <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>