<html>
	<head>
		<title> Site em PHP </title>
		<link rel= "stylesheet" type="text/css" href="css/formato.css">
			
		</style>
			
	</head>
	<body>
		<div id = "geral">
			<div id="topo">
				<?php include "topo.php";?>
			</div>
			
			<div id="menu">
			 <?php include "menu.php";?>
			</div>
			
			<div id="conteudo">
			<br><br>
				<form action="cad_contato.php" method= "POST">
				<label class="legenda"> nome:</label><br>
				<input type="text" name="nome" class="campos" placeholder="preencha este campo com seu nome completo" required><br>
				
				<label class="legenda"> email:</label><br>
				<input type="email" name="email" class="campos" placeholder="digite seu email" required><br>
				
				<label class="legenda"> assunto</label><br>
				<input type="text" name="assunto" class="campos" placeholder="sobre oque" required><br>
				
				<label class="legenda"> conteudo</label><br>
				<textarea name="conteudo"  class="campo2"placeholder="Digite em no maximo 140 caracteres o conteudo" maxlength="140"></textarea><br>
				<input type="submit" value="Enviar" class="bt_enviar">
			</div>
			
			<div id="rodape">
			  <?php include "rodape.php";?>
			</div>
			
		</div> <!-- fim da geral-->	
	</body>
</html>