<html>
  <head>
    
  </head>

<body>

<form id="cadastrar" method="POST" action="/webtur/src/pages/Screen_7.php">

<div class="Screen_7 MatcSreen">
  <div class="Headline_1">Cadastro de Usuário</div>

  <div class="Row_43">
    <div class="Label_4">Nome</div>
    <input type="text" placeholder="Enter a value" name="name_tb_nome" class="Text_Box" id="id_tb_nome" />
    <div class="Label_2">E-mail</div>
    <input type="text" placeholder="Enter a value" name="name_tb_email" class="Text_Box_5" />
    
  </div>

  <div class="Row_44">
    <input type="checkbox" name="name_cb_categoria" value="1" class="Check_Box">Administrador<br>
  </div>

  <div class="Row_45">
    <div class="Label_4">Senha</div>
    <input type="password" placeholder="Senha" name="name_tb_senha" class="Text_Box_16" id="id_td_senha" />    
  </div>

  <div class="Row_46">
    <div class="Label_4">Repita a senha</div>
    <input type="password" placeholder="Confirme Senha" name="name_tb_rsenha" class="Text_Box" id="id_tb_rsenha" />

    
  </div>

  <div class="Row_47">
    <input type="submit" class="Button_2" name="name_b2_cad" value="Cadastrar" id="id_b2_cad" />
    <div class="Button_1" onclick="navigateTo('webtur')">Sair</div>
  </div>



  <div class="Box_6">
  </div>
  </div>

<style lang="css" scoped>
    @import url("../css/normalize.css");
    @import url("../css/Screen_7.css");
</style>


<script>

// Colocar a lógica de cadastro e voltar para a pagina de autenticação

  function navigateTo (screen) {

            if(screen == 'webtur'){
              window.location.href = "/webtur/"+screen+".php";
            }
            else{
              window.location.href = "/webtur/src/pages/"+screen+".php";
            }
            
            
  }

</script>

<?php

  if (isset($_POST["name_b2_cad"])) {
  # code...
  echo "Inserir";

    if (isset($_POST["name_tb_nome"]) && isset($_POST["name_tb_email"]) && isset($_POST["name_tb_senha"]) && isset($_POST["name_tb_rsenha"])){ 

      $senha = $_POST['name_tb_senha'];
      echo $senha;
      $rsenha = $_POST['name_tb_rsenha'];
      echo $rsenha;

      if ( $senha == $rsenha ) {
        # code...

        $local = 'localhost';
        $user = 'root';
        $passwd = '';
        $db = 'webtur';


        $nomeC = strtoupper($_POST['name_tb_nome']);
        $emailC = $_POST['name_tb_email'];


        $query = "INSERT INTO usuario VALUES ('','".$nomeC."','".$emailC."','".$_POST['name_tb_senha']."','".$_POST['name_cb_categoria']."')";

        $i = 0;

        $id = new mysqli($local,$user,$passwd);

        if($id){
          mysqli_select_db($id,$db);
          $sql = mysqli_query($id,$query) or die ($id->error);
  
          if($sql){
            echo "Cadastro realizado com sucesso!";
            echo "<script>document.getElementById('id_tb_nome').value ='Incluído!'</script>";
            echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='lightgreen'</script>";

          } 
        }

      }
      else{
            echo "<script>document.getElementById('id_tb_nome').value ='Senhas diferentes!'</script>";
            echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";
      }


    }

  }

?>

</form>

</body>

</html>