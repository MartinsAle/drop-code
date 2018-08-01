<?php 
	date_default_timezone_set('America/Sao_Paulo');
	header('Content-Type: text/html; charset=ISO-8859-1');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nova mensagem de contato atráves do site</title>
</head>
<body>
	<h1>Uma mensagem foi enviada</h1>
	<h3>Dados da mensagem</h3>
	<ul>
		<li><strong>Nome</strong>: <?php echo $_POST['nome']; ?></li>
		<li><strong>E-mail</strong>: <?php echo $_POST['email']; ?></li>
		<li><strong>Telefone</strong>: <?php echo (isset($_POST['telefone']) ? $_POST['telefone'] : 'Não foi informado'); ?></li>
		<li><strong>Celular</strong>: <?php echo $_POST['celular']; ?></li>
		li><strong>Serviço Médico</strong>: <?php echo $_POST['servico_medico']; ?></li>
		<li><strong>Assunto</strong>: <?php echo $_POST['assunto']; ?></li>
		<li><strong>Mensagem</strong>: <br> <?php echo $_POST['mensagem']; ?></li>
	</ul>
	<?php echo $data = date('d/m/Y H:i:s'); ?>
</body>
</html>
