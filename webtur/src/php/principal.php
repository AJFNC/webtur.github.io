<?php
session_start();
if(isset($_SESSION['email'])){


	echo "<meta http-equiv=\"refresh\" content=\"0;url='/webtur/src/pages/Screen_6.php'\">";

}else{
	echo "<P>TENTATIVA DE ACESSO INDEVIDO!</P><P><A HREF=\"/webtur/src/pages/Screen_1.php\">Voltar</A></P>";
}
?>