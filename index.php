<!DOCTYPE html>
<html>
	<head>
		<title>Eduardo Soares</title>

		<!--Links de importação do Bootstrap (JS e CSS)-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!--Importação do meu JS e CSS-->
		<link rel="stylesheet" type="text/css" href="estilo_v2.css">
		<script type="text/javascript" src="script.js"></script>

	</head>
	<body>
		<div class="container-fluid">
			<!--
				Só para lembrar, o Bootstrap trabalha com linhas class="row" e colunas class="col" dentro de cada linha, total de 12 colunas na grid.
			-->
			<!--Linha 1-->
			<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
				<!--Coluna 1-->
				<div class="col-2">
					<img id="imgPerfilPrincipal" src="https://pbs.twimg.com/profile_images/1245413673025314816/yc5KKmC1_400x400.jpg">
				</div>
				<!--Coluna 2-->
				<div class="col-10">
					<h1>Eduardo Soares</h1>
					<p>Estudante de Análise e Desenvolvimento de Sistemas no Centro Universitário Módulo</p>
					<p>Auxiliar de Vendas na Imaruí Leste Distribuição e Logística Ltda (Ambev)</p>
					<a href="https://www.linkedin.com/in/edu-soares-pinheiro"><img id="imgLinkedin" src="img_logo_linkedin.jpg">&nbsp;linkedin.com/in/edu-soares-pinheiro</a>
				</div>
			</div>

			<!--Linha 2-->
			<div class="row">
				<!--Coluna 1-->
				<div class="col">
					<h2>Experiência</h2>
					<ol id="listaExperiencia">
						<li>Imaruí Leste Distribuição e Logística Ltda (Ambev)
							<ul>
								<li>Auxiliar de Vendas<br>(jan/2017 - até o momento)</li>
								<li>Aprendiz<br>(mai/2016 - dez/2016)</li>
							</ul>
						</li>
						<li>Prefeitura Municipal da Estância Balneária de Caraguatatuba-SP
							<ul>
								<li>Monitor de Sala de Informática<br>(jul/2015 - dez/2015)
									<p>Responsável pela sala de informática em escola pública, garantindo a limpeza do ambiente, o bom funcionamento dos equipamentos e desenvolvendo aulas lúdicas.</p>
								</li>
							</ul>
						</li>
					</ol>
				</div>
				<!--Coluna 2-->
				<div class="col">
					<h2>Formação Acadêmica</h2>
					<ol id="listaFormacaoAcademica">
						<li>Alura Cursos Online
							<ul>
								<li>Aprenda a Programar - QuarentenaDev<br>(2020 - 2020)
									<p>Foram abordados conteúdos de HTML, CSS e JS, onde praticamos o desenvolvimento de páginas web que interagem com o usuário.</p>
								</li>
							</ul>
						</li>
						<li>Centro Universitário Módulo
							<ul>
								<li>Tecnólogo em Análise e Desenvolvimento de Sistemas<br>(2019 - 2020)</li>
							</ul>
						</li>
						<li>ETEC - Escola Técnica Estadual de São Paulo
							<ul>
								<li>Técnico em Logística<br>(2016 - 2017)</li>
							</ul>
						</li>
						<li>Senai São Paulo
							<ul>
								<li>Lógica de Programação<br>(2015 - 2015)</li>
							</ul>
						</li>
					</ol>
				</div>
			</div>

			<!--Linha 3-->
			<div class="row">
				<!--Coluna 1-->
				<div class="col">
					<h2>Idiomas</h2>
					<ul id="listaIdiomas" class="anularLista">
						<li>Português: Nativo</li>
						<li>Inglês: Básico</li>
						<li>Espanhol: Básico</li>
					</ul>
				</div>
				<!--Coluna 2-->
				<div class="col">
					<h2>Linguagens</h2>
					<p>As linguagens de programação que tive contato por meio curso superior de Análise e Desenvolvimento de Sistemas que estou cursando:</p>
					<p id="listaLinguagens1">
						HTML / CSS /JavaScript<br>
						MySQL / C / PHP / Python
					</p><br>
					<p>As linguagens com melhor desempenho:</p>
					<p id="listaLinguagens2">
						HTML / CSS /JavaScript / MySQL / Python
					</p><br>
				</div>
				<!--Coluna 3-->
				<div class="col">
					<h2>Extra</h2>
					<ul id="listaExtra">
						<li>Participação no Curso #QuarentenaDev promovido pela Alura.</li>
					</ul>
				</div>
			</div>

			<!--Linha 4-->
			<div class="row" style="text-align: center;">
				<div class="col">
					<p>Developed by Eduardo Soares Pinheiro &copy;.
				</div>
			</div>
		</div>
	</body>
</html>