<!DOCTYPE html>
<html lang="es">
<head>
	<title>Traductor</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
	<style type="text/css">
	body {
		padding: 60px;
	}
	textarea {
		height: 60px;
	}
	</style>
	<meta name="author" content="Zerquix18">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta charset="utf-8">
    	<meta name="keywords" content="traductor, translator, subnormal, texto, español">
    	<meta name="title" content="Traductor de Español a Subnormal">
    	<meta name="description" content="Traductor de texto de español a subnormal creado por Luis A. - Zerquix18">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Traductor</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/">Inicio</a></li>
              <li><a target="_blank" href="//github.com/zerquix18/traductor">Colabora en Github</a></li>
              <li><a target="_blank" href="//twitter.com/Zerquix18">Twitter</a></li>
              <li><a target="_blank" href="//fb.com/Zerquix18">Facebook</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="page-header">
  	<h1>Traductor <small>Traduce texto de español a subnormal</small></h1>
</div>
	<div class="row">
	<div class="span6">
	<label class="label label-info">Español</label><br>
	<textarea class="span5" id="texto" placeholder="Texto a traducir" onchange="traducir(this.value)"></textarea>
	</div>
	<div class="span6">
	<label class="label label-info">Subnormal</label><br>
	<textarea class="span5" id="resultado" readonly="readonly" placeholder="El resultado aparecerá aquí..."></textarea>
	</div>
	</div>
	<div id="push"></div>
	</div>
	<hr>
	<input type="submit" class="btn btn-primary" value="Traducir" onclick="traducir( $('#texto').val() ) ">
	<div class="pull-right">
	<div class="fb-like" data-href="https://traductor.zerquix18.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>&nbsp;|&nbsp;<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-via="Zerquix18" data-text="¡Mira el traductor de texto de español a subnormal!" data-count="horizontal" data-related="zerquix18">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</body>
</html>