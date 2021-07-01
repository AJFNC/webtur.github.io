<html>
  <head>
    
  </head>

<body>

<form method="post" id="form_cad_hot" action="/webtur/src/pages/Screen_14.php">

<div class="Screen_5 MatcSreen">
  <div class="Headline_1">Cadastrar Igreja</div>
  
  <div class="Row_15">
    <div class="Box_1">
        <div class="Label_3"><a href="/webtur/src/pages/Screen_6.php">Cidade</a></div>
    </div>
    <div class="Box_2">
        <div class="Label"><a href="/webtur/src/pages/Screen_5.php">Hotel</a></div>
    </div>
    <div class="Box_3">
        <div class="Label_1"><a href="/webtur/src/pages/Screen_10.php">Restaurante</a></div>
    </div>
    <div class="Box_5">
        <div class="Label_2"><a href="/webtur/src/pages/Screen_9.php">Ponto Turístico</a></div>
    </div>
  </div>

  <div class="Row_16">
    <div class="Label_4">Religião</div>
    <input type="text" placeholder="Enter a value" class="Text_Box" id="id_tb_reli" name="name_tb_reli" />

    <div class="Label_9">Código do Ponto</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_5" id="id_tb_codPT" name="name_tb_codPT" />

    <input type="submit" class="Button_1" name="name_b1_inse" value="Inserir" id="id_b1_inse" />
    
  </div>

  <div class="Row_17">
    <div class="Label_5">Estilo da Construção</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_1" id="id_tb_estC" name="name_tb_estC" />

    <div class="Label_8">Data da Construção</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_4" id="id_tb_dataC" name="name_tb_dataC" />

    <input type="submit" class="Button_2" name="name_b2_apag" value="Apagar" id="id_b2_apag" />
    
  </div>

  <div class="Row_18">
    <div class="Label_5">URL da Foto</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_1" id="id_tb_foto" name="name_tb_foto"/>

    <input type="submit" class="Button_3" name="name_b3_edit" value="Editar" id="id_b3_edit"/>
  </div>

  <div class="Button" onclick="navigateTo('webtur')">Sair</div>

  <div class="Box_6">
    <div class="Headline">WebTur</div>
    <div class="Headline_4">
      Av. Mons. Ângelo Sampaio, 2000
      Petrolina - PE
      CEP: 56.300-000
    </div>
  </div>

  <input type="hidden" name="name_tbh_b3v" value="Editar" id="id_tbh_b3v">
  <input type="hidden" name="iG" value="" id="id_iG">
  <input type="hidden" name="codG" value="" id="id_codG">

</div>

<style lang="css" scoped>
    @import url("../css/normalize.css");
    @import url("../css/Screen_5.css");
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

// Testa todos os campos de texto antes


if (isset($_POST["name_b1_inse"])) {
  # code...
  echo "Inserir";


  if (empty($_POST["name_tb_codPT"]) || $_POST["name_tb_codPT"] == 'Preencha um nome')  {
    # code...

    echo "<script>document.getElementById('id_tb_codPT').value ='Preencha um código'</script>";
    echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";
  }
  else{

    if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_reli"]) && isset($_POST["name_tb_estC"]) && isset($_POST["name_tb_dataC"]) && isset($_POST["name_tb_foto"])){ 

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';

      $cod = $_POST['name_tb_codPT'];
      $reli = strtoupper($_POST['name_tb_reli']);
      $estilo = strtoupper($_POST['name_tb_estC']);

      $query = "INSERT INTO igreja VALUES ('".$_POST['name_tb_codPT']."','".$reli."','".$estilo."','".$_POST['name_tb_dataC']."','".$_POST['name_tb_foto']."')";

      $i = 0;

      $id = new mysqli($local,$user,$passwd);

      if($id){
        mysqli_select_db($id,$db);
        $sql = mysqli_query($id,$query) or die ($id->error);
  
  
        if($sql){
          echo "Cadastro realizado com sucesso!";
          echo "<script>document.getElementById('id_tb_codPT').value ='Incluída!'</script>";
          echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='lightgreen'</script>";

        } 
      }
    }

  }



}
elseif (isset($_POST["name_b2_apag"])) {
  # code...
  echo "Apagar";

// "DELETE FROM `cidade` WHERE `cidade`.`codigo` = 7"

  if (empty($_POST["name_tb_codPT"])) {
    # code...

    echo "<script>document.getElementById('id_tb_codPT').value ='Preencha um código'</script>";
    echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";
  }
  else{

    if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_reli"]) && isset($_POST["name_tb_estC"]) && isset($_POST["name_tb_dataC"]) && isset($_POST["name_tb_foto"])){

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';
      $cod = '';

      $pesq_oq = $_POST['name_tb_codPT'];

      //$pesq_oqC = strtoupper($pesq_oq);

      $query = "select * from igreja where codigoPT='".$pesq_oq."'";


      $i = 0;

      $id = new mysqli($local,$user,$passwd);

      if($id){
        mysqli_select_db($id,$db);
        $sql = mysqli_query($id,$query) or die ($id->error);
        ////////////

        // Pega o código do registro selecionado

        while($dados = mysqli_fetch_array($sql)){
    
              $codigoPT[$i] = $dados['codigoPT'];
              //$tipo[$i] = $dados['tipo'];

              //$frag = "/".$pesq_oqC."/";

              //if (preg_match($frag, $tipo[$i])) {

              if ($pesq_oq == $codigoPT[$i]){
                # code...
                $cod = $codigoPT[$i];
                break;
              }

              $i++;
         }
         
        /////////////
         
        if($cod != ''){
          echo "<br>Pesquisa realizado com sucesso: ".$cod[$i];

          $query = "delete from igreja where codigoPT='".$cod."'";
          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
                echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";
                echo "<script>document.getElementById('id_tb_codPT').value = '".$cod." apagado'</script>";
                
            } 

          }

        } 
        else{
          echo "<script>document.getElementById('id_tb_codPT').value ='Código não encontrado!'</script>";
          echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";

        }
        
      }
    }

  }


}

elseif (isset($_POST["name_b3_edit"])) {
  # code...


   $valorbtn = $_POST['name_tbh_b3v'];
   echo $valorbtn;

  if ($valorbtn == "Editar") {
    # code... 
  

    if (empty($_POST["name_tb_codPT"])) {
      # code...
  
      // É para aparecer no textbox Nome";
      echo "<script>document.getElementById('id_tb_cod').value ='Preencha um código'</script>";
      echo "<script>document.getElementById('id_tb_cod').style.backgroundColor ='yellow'</script>";
    }
    else{

      if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_reli"]) && isset($_POST["name_tb_estC"]) && isset($_POST["name_tb_dataC"]) && isset($_POST["name_tb_foto"])){

        $local = 'localhost';
        $user = 'root';
        $passwd = '';
        $db = 'webtur';
        $cod = '';

        $pesq_oq = $_POST['name_tb_codPT'];

        //$pesq_oqC = strtoupper($pesq_oq);

        $query = "select * from igreja where codigoPT='".$pesq_oq."'";


        $i = 0;

        $id = new mysqli($local,$user,$passwd);

        if($id){
          mysqli_select_db($id,$db);
          $sql = mysqli_query($id,$query) or die ($id->error);
          ////////////

          while($dados = mysqli_fetch_array($sql)){
    
              $codigoPT[$i] = $dados['codigoPT'];
              echo "<script>document.getElementById('id_tb_codPT').value ='".$codigoPT[$i]."'</script>";
              $religiao[$i] = $dados['religiao'];
              echo "<script>document.getElementById('id_tb_reli').value ='".$religiao[$i]."'</script>";
              $estiloConstrucao[$i] = $dados['estiloConstrucao'];
              echo "<script>document.getElementById('id_tb_estC').value ='".$estiloConstrucao[$i]."'</script>";
              $dataConstrucao[$i] = $dados['dataConstrucao'];
              echo "<script>document.getElementById('id_tb_dataC').value ='".$dataConstrucao[$i]."'</script>";
              $foto[$i] = $dados['foto'];
              echo "<script>document.getElementById('id_tb_foto').value ='".$foto[$i]."'</script>";


              if ($pesq_oq == $codigoPT[$i]){
                # code...
                $cod = $codigoPT[$i];
                echo "<script>document.getElementById('id_b3_edit').value ='Alterar'</script>";
                
                // $valorbtn = "Alterar";
                echo "<script>document.getElementById('id_b3_edit').style.backgroundColor ='orange'</script>";

                ///////////////////////////////////////////////////////////////////////
                //
                // Na realidade só vai ser precisar das variáveis: $cod e $i
                //
                //echo "<script>document.getElementById('id_cidnameG').value ='".$nome[$i]."'</script>";
                //echo "<script>document.getElementById('id_estadoG').value ='".$estado[$i]."'</script>";
                //echo "<script>document.getElementById('id_fotoG').value ='".$foto[$i]."'</script>";
                echo "<script>document.getElementById('id_iG').value ='".$i."'</script>";
                echo "<script>document.getElementById('id_codG').value ='".$cod."'</script>";
                //echo "<script>document.getElementById('id_textoG').value ='".$texto[$i]."'</script>";

                ///////////////////////////////////////////////////////////////////////

              

                break;
              }

              $i++;
          }
          /////////////

          // Tem que parar para o usuário fazer a edição depois fazer a alteração no banco de dados
          // Alterar o botão de Editar para Alterar usando snippet de javascript

          ////////////
         
          if($cod != ''){
            echo "<br>Pesquisa realizada com sucesso: ".$cod[$i]." Código: ".$cod."<br>";
            echo "Preparado para Alterar<br>";
            
            echo "<script>document.getElementById('id_tbh_b3v').value ='Alterar'</script>";

            echo $_POST['name_tbh_b3v'];

            echo "<script>document.getElementById('id_codG').value ='".$cod."'</script>";

          } 
          else{
            echo "<script>document.getElementById('id_tb_codPT').value ='Código não encontrado!'</script>";
            echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";

          }
        
        }
      }

    }
  }
  else{
        /////////////////////////////////
        //
        // Colocar o update aqui
        //
        /////////////////////////////////

      echo " Aqui será feito o UPDATE no registro achado<br>";

        $local = 'localhost';
        $user = 'root';
        $passwd = '';
        $db = 'webtur';
       

          // "UPDATE cidade SET nome='".$_POST['']."' WHERE codigo = '".$cod."'

          
          /**
          echo $_POST['cidnameG']."<br>";
          echo $_POST['estadoG']."<br>";
          echo $_POST['fotoG']."<br>";
          echo $_POST['textoG']."<br>";*/
          echo $_POST['codG']."<br>";
          

         $query = "update igreja set codigoPT='".$_POST['name_tb_codPT']."', religiao='".$_POST['name_tb_reli']."', estiloConstrucao='".$_POST['name_tb_estC']."', dataConstrucao='".$_POST['name_tb_dataC']."', foto='".$_POST['name_tb_foto']."' where codigoPT='".$_POST['codG']."'";

          $id = new mysqli($local,$user,$passwd);

          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
                echo "<script>document.getElementById('id_tb_codPT').value ='Igreja alterada!'</script>";
                echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='grey'</script>";


            } 

          }


  }



}

?>

</form>
</body>
</html>