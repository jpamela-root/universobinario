<!DOCTYPE html>
<html>
<head>
		<title>Universo Digital</title>
		<style>
			body {
	margin: 0px;
	padding: 0px;
	height: 100%;
	background-image: url("imagens/bg.jpg");
}

* html #container {
	height: 100%; /* hack para IE6 que trata height como min-height */
}

#container {
	height: 100%;
	
	/*background-color: #f00;*/
}

#left {
	position: relative;
	width: 20%;
	min-height: 100%;
	float: left;
	
	/*background-color: #0f0;*/
	text-align: center;
}

#left h1 {
	width: 100%;
	height: 296px;
	
	background-image: url("imagens/logo.png");
}

#left h1 span {
	display: none;
}

#left nav {
	font-family: sans-serif;
	color: #fff;
}

#left nav a {
	text-decoration: none;
	font-family: sans-serif;
	color: #fff;
}

#left nav a:hover {
	text-decoration: underline;
}

#left section {
	padding-bottom: 30px;
}

#left footer {
	width: 100%;
	position: absolute;
	bottom: 0;
	
	font-family: sans-serif;
	font-size: 10px;
	color: #fff;
}

#right {
	width: 80%;
	min-height: 100%;
	float: right;
	
	background-color: #fff;
	opacity: 0.8;
}

#right section, #right h2 {
	margin: 20px;
}

.clear {
	clear: bolt;
}

h2, p, form, input, select, textarea, td {
	color: #4B0082;
	font-family: sans-serif;
}

h2 {
	text-transform: uppercase;
	font-size: 40px;
}

input, select, textarea {
	width: 100%;
	padding: 5px;
}

textarea {
	height: 50px;
}

table {
	width: 100%;
}

th {
	padding: 5px;
	
	background-color: #4B0082;
	color: #ffffff;
}

td {
	border-bottom: 1px solid #4B0082;
}
		</style>

</head>
	<body>
	  <div id="container">
	  
		<div id="left">
			<header><h1><span>Universo Digital<span></h1></header>
			<section>
				<nav>
					<a href="#">planetas</a> | 
					<a href="#">estrelas</a> | 
					<a href="#">sistemas</a>
				</nav>
				<div class="clear"></div>
			<section>
			<footer><em>Produzido para Projeto EAD</em></footer>
		</div>
		
		<div id="right">
			<header><h2><span>Planetas<span></h2></header>
			<section>
				<p>Um planeta é um corpo celeste que orbita uma estrela ou um remanescente de estrela, com massa suficiente para se tornar esférico pela sua propria gravidade, mas não ao ponto de causar fusão termonuclear, e que tenha limpo de planetesimais a sua região vizinha (dominancia orbital).</p>
				<p>Fonte: <a href="https://pt.wikipedia.org/wiki/Planeta">https://pt.wikipedia.org/wiki/Planeta</a></p>
				
				<form action="" method="">
					<p><strong>Insira um novo planeta no sistema: </strong></p>
					Nome: <input type="text" name="nome" /><br />
					Tipo: 
					<select name="tipo">
						<option value="terrestre">Terrestre</option>
						<option value="gasoso">Gigante Gasoso</option>
						<option value="anio">Planeta Anio</option>
					</select><br />
					Diãmetro Equatorial: <input type="text" name="tamanho" /><br />
					Descrição:
					<textarea name="descricao"></textarea>
					<input type="submit" value="enviar" />
				</form>
				
				<p><strong>Planetas</strong></p>
				<table>
					<tr>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Diametro Equatorial</th>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
					<tr>
						<td>Terra</td>
						<td>terrestre</td>
						<td>1,0</td>
					</tr>
				</table>
			</section>
			<footer></footer>
		</div>
		
		<div class="clear"></div>
	  </div>
	</body>
</html>