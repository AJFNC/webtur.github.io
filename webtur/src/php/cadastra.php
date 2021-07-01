<?php
$local = "localhost";
$user = "root";
$passwd = "";
$db = "webtur";
$q = "select * from usuario where email = '".$_POST['email']."' AND senha = '".$_POST['pass']."'";
$id = new mysqli($local,$user,$passwd);
$i=0;
if($id){
	mysqli_select_db($id,$db);
	$sql = mysqli_query($id,$q) or die ($id->error);
	$dados = mysqli_fetch_array($sql);
	session_start();
		$_SESSION['codigo'] = $dados['codigo'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['email'] = $dados['email'];
		$_SESSION['categoria'] = $dados['categoria'];

		if($_POST['entrar'] == "Entrar"){
			echo "<meta http-equiv=\"refresh\" content=\"0;url='/webtur/src/php/principal.php'\">";
		}
		elseif ($_SESSION['categoria']) {
			# code...
			if ($_POST['cadastrar'] == "Administrar") {
				# code...
				echo "<meta http-equiv=\"refresh\" content=\"0;url='/webtur/src/php/principal7.php'\">";
			}
			
		}

		else{
			echo "<meta http-equiv=\"refresh\" content=\"0;url='/webtur/src/pages/Screen_1.php'\">";

		}
	}
else{
	echo "<meta http-equiv=\"refresh\" content=\"0;url='/webtur/src/pages/Screen_1.php'\">";
}



?>