<?php
$local = 'localhost';
$user = 'root';
$passwd = '';
$db = 'webtur';

$pesq_oq = $_POST['campo_n'];


//echo $pesq_oq;
// $query = "select * from cidade where nome='".$pesq_oq."'";

$query = "select * from cidade where nome='".$pesq_oq."'";
$i = 0;

$id = new mysqli($local,$user,$passwd);

if($id){
	mysqli_select_db($id,$db);
	$sql = mysqli_query($id,$query) or die ('Erro na pesquisa!');
	while($dados = mysqli_fetch_array($sql)){
		
        $codigo[$i] = $dados['codigo'];
        $nome[$i] = $dados['nome'];
        $estado[$i] = $dados['estado'];
       
	    $i++;
	}
	$linhas = $i;
	for($i=$linhas-1;$i>=0;$i--){
		echo "<h2>Código: ".$codigo[$i]."</h2>";
		echo "<h3>Cidade: ".$nome[$i]."</h3>";
		echo "<p><small>Estado: ".$estado[$i]."</small></p>";
		echo "<hr>";
		if($nome[$i] == $pesq_oq){

			echo "<script>window.location.href = '/webtur/src/pages/Screen_8.php';</script>";
			
			//$codigo[$i];
			//$this->load->view("/webtur/src/pages/Screen_8.php",$codigo[$i]);
			//include("/webtur/src/pages/Screen_8.php");
			//return $codigo[$i];
		}

	}
}else{
	echo "Deu ruim!";
}



?>