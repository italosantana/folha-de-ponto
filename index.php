<!DOCTYPE html>
<html>
<meta lang="en">
<head>
	<title>Folha de ponto WEB</title>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		body {
			width: 100% 100%;
			position: relative;
			text-align: center;
		}
		h1 {
			position: center;
			font-family: monospace;
			font: center;
		}

		h2 {
			position: center;
			font-family: monospace;
			font-size: 20px;
		}

		#txt {
		font-size: 40px;
		font-family: monospace;
		}
	</style>	
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Horário de Brasília</h1></br>
			<h2>O horário do seu ponto está de acordo com o horário de Brasília, a hora oficial do Brasil</h2>

		</div>
<hr>
		<div id="content-script-date">
			<script language=javascript type="text/javascript">

				dayName = new Array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
monName = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro")
now = new Date

document.write ("<h1> Hoje é " + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + ". </h1>")

</script>

	<div id="content-script-hours">
		<script type="text/javascript">
function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
setTimeout('time()',500);
}
</script>
</head>
<body onload="time()">
<div id="txt">
</script>
	</div>	
		</div>	
	</div>

<hr>
<div id="menu-main">
	<div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Bater o ponto WEB</a>
    <a href="#" class="btn btn-primary">Relatório de pontos WEB</a>
    <a href="#" class="btn btn-primary">Verificar o saldo de BH</a>
  </div>
</div>

</body>
</html>