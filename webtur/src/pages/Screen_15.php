<html>
  <head>
    
  </head>

<body>

<form method="post" id="form_cad_hot" action="/webtur/src/pages/Screen_15.php">

<div class="Screen_5 MatcSreen">
  <div class="Headline_1">Cadastrar Museu</div>
  
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
    <div class="Label_4">Código do Ponto</div>
    <input type="text" placeholder="Enter a value" class="Text_Box" id="id_tb_codPT" name="name_tb_codPT" />

    <div class="Label_9">Data da Fundação</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_5" id="id_tb_dataF" name="name_tb_dataF" />

    <input type="submit" class="Button_1" name="name_b1_inse" value="Inserir" id="id_b1_inse" />
    
  </div>

  <div class="Row_17">
    <div class="Label_5">Número de Salas</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_1" id="id_tb_numSalas" name="name_tb_numSalas" />

    <div class="Label_8">Fundador</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_4" id="id_tb_fund" name="name_tb_fund" />

    <input type="submit" class="Button_2" name="name_b2_apag" value="Apagar" id="id_b2_apag" />
    
  </div>

  <div class="Row_18">
    <div class="Label_5">URL da Foto do Fundador</div>
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
  <input type="hidden" name="iGM" value="" id="id_iGM">
  <input type="hidden" name="codGM" value="" id="id_codGM">
  <input type="hidden" name="iGF" value="" id="id_iGF">
  <input type="hidden" name="codGF" value="" id="id_codGF">  


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


//  $query = "INSERT INTO museu VALUES ('','".$_POST['name_tb_codPT']."','".$_POST['name_tb_dataF']."','".$_POST['name_tb_numSalas']."','".$_POST['name_tb_foto']."')";


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

    if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_dataF"]) && isset($_POST["name_tb_numSalas"]) && isset($_POST["name_tb_fund"]) && isset($_POST["name_tb_foto"])){ 

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';

      $cod = $_POST['name_tb_codPT'];
      $fundador = strtoupper($_POST['name_tb_fund']);

      //  $query = "INSERT INTO museu VALUES ('','".$_POST['name_tb_codPT']."','".$_POST['name_tb_dataF']."','".$_POST['name_tb_numSalas']."','".$_POST['name_tb_foto']."')";

      $query = "INSERT INTO museu VALUES ('".$_POST['name_tb_codPT']."','".$_POST['name_tb_dataF']."','".$_POST['name_tb_numSalas']."')";

      $i = 0;

      $id = new mysqli($local,$user,$passwd);

      if($id){
        mysqli_select_db($id,$db);
        $sql = mysqli_query($id,$query) or die ($id->error);
  
  
       // if($sql){
       //   echo "Cadastro realizado com sucesso!";
        //  echo "<script>document.getElementById('id_tb_codPT').value ='Incluída!'</script>";
        //  echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='lightgreen'</script>";

        //} 
      }
      // Incluir na tabela de fundador

      $query = "INSERT INTO museufundador VALUES ('".$_POST['name_tb_codPT']."','".$_POST['name_tb_fund']."','".$_POST['name_tb_foto']."')";

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

      // Duplo INSERT: um na tabela museu e outro na tabela museufundador
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

    if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_dataF"]) && isset($_POST["name_tb_numSalas"]) && isset($_POST["name_tb_fund"]) && isset($_POST["name_tb_foto"])){ 

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';
      $cod = '';

      $pesq_oq = $_POST['name_tb_codPT'];

      //$pesq_oqC = strtoupper($pesq_oq);

      $query = "select * from museu where codigoPT='".$pesq_oq."'";


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

          $query = "delete from museu where codigoPT='".$cod."'";
          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            //if($sql){
            //    echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='yellow'</script>";
           //     echo "<script>document.getElementById('id_tb_codPT').value = '".$cod." apagado'</script>";
                
           // } 

          }
          // Apaga o fundador também
          $query = "delete from museufundador where codigoPT='".$cod."'";
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

      if (isset($_POST["name_tb_codPT"]) && isset($_POST["name_tb_dataF"]) && isset($_POST["name_tb_numSalas"]) && isset($_POST["name_tb_fund"]) && isset($_POST["name_tb_foto"])){ 

        $local = 'localhost';
        $user = 'root';
        $passwd = '';
        $db = 'webtur';
        $cod = '';

        $pesq_oq = $_POST['name_tb_codPT'];

        //$pesq_oqC = strtoupper($pesq_oq);

        $query = "select * from museu where codigoPT='".$pesq_oq."'";


        $i = 0;

        $id = new mysqli($local,$user,$passwd);

        if($id){
          mysqli_select_db($id,$db);
          $sql = mysqli_query($id,$query) or die ($id->error);
          ////////////

          while($dados = mysqli_fetch_array($sql)){
    
              $codigoPT[$i] = $dados['codigoPT'];
              echo "<script>document.getElementById('id_tb_codPT').value ='".$codigoPT[$i]."'</script>";
              $dataFundacao[$i] = $dados['dataFundacao'];
              echo "<script>document.getElementById('id_tb_dataF').value ='".$dataFundacao[$i]."'</script>";
              $numeroSalas[$i] = $dados['numeroSalas'];
              echo "<script>document.getElementById('id_tb_numSalas').value ='".$numeroSalas[$i]."'</script>";
              

              if ($pesq_oq == $codigoPT[$i]){
                # code...
                $codM = $codigoPT[$i];
                //echo "<script>document.getElementById('id_b3_edit').value ='Alterar'</script>";
                
                // $valorbtn = "Alterar";
                //echo "<script>document.getElementById('id_b3_edit').style.backgroundColor ='orange'</script>";

                echo "<script>document.getElementById('id_iGM').value ='".$i."'</script>";
                echo "<script>document.getElementById('id_codGM').value ='".$codM."'</script>";            

                break;
              }

              $i++;
          }

          $query = "select * from museufundador where codigoPT='".$pesq_oq."'";


          $i = 0;

          $id = new mysqli($local,$user,$passwd);

          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
            ////////////

            ////////////////
            // Tem que fazer aquioutro WHILE para o fundador
            ///////////////
            while($dados = mysqli_fetch_array($sql)){
    
              $codigoPT[$i] = $dados['codigoPT'];
              echo "<script>document.getElementById('id_tb_codPT').value ='".$codigoPT[$i]."'</script>";
              $fundador[$i] = $dados['fundador'];
              echo "<script>document.getElementById('id_tb_fund').value ='".$fundador[$i]."'</script>";
              $foto[$i] = $dados['foto'];
              echo "<script>document.getElementById('id_tb_foto').value ='".$foto[$i]."'</script>";


              if ($pesq_oq == $codigoPT[$i]){
                # code...
                $codF = $codigoPT[$i];
                echo "<script>document.getElementById('id_b3_edit').value ='Alterar'</script>";
                
                // $valorbtn = "Alterar";
                echo "<script>document.getElementById('id_b3_edit').style.backgroundColor ='orange'</script>";

                echo "<script>document.getElementById('id_iGF').value ='".$i."'</script>";
                echo "<script>document.getElementById('id_codGF').value ='".$codF."'</script>";            

                break;
              }

              $i++;
            }

          // O IF MAIS INTERNO TEM QUE TERMINAR AQUI
          }
          ////////////////

          /////////////

          // Tem que parar para o usuário fazer a edição depois fazer a alteração no banco de dados
          // Alterar o botão de Editar para Alterar usando snippet de javascript

          ////////////
         
          if($codM != '' && $codF != ''){
            echo "<br>Pesquisa realizada com sucesso: Código: ".$codM."<br>";
            echo "Preparado para Alterar<br>";
            
            echo "<script>document.getElementById('id_tbh_b3v').value ='Alterar'</script>";

            echo $_POST['name_tbh_b3v'];

            echo "<script>document.getElementById('id_codGM').value ='".$codM."'</script>";

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
          //echo $_POST['id_codGM']."<br>";
          //echo $_POST['id_codGF']."<br>";

         $query = "update museu set codigoPT='".$_POST['name_tb_codPT']."', dataFundacao='".$_POST['name_tb_dataF']."', numeroSalas='".$_POST['name_tb_numSalas']."' where codigoPT='".$_POST['codGM']."'";

          $id = new mysqli($local,$user,$passwd);

          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
               // echo "<script>document.getElementById('id_tb_codPT').value ='Museu alterado!'</script>";
                //echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='grey'</script>";
              echo "Museu alterado";

            } 

          }

          // o UPDATE do fundador vem aqui

         $query = "update museufundador set codigoPT='".$_POST['name_tb_codPT']."', fundador='".$_POST['name_tb_fund']."', foto='".$_POST['name_tb_foto']."' where codigoPT='".$_POST['codGF']."'";

          $id = new mysqli($local,$user,$passwd);

          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
                echo "<script>document.getElementById('id_tb_codPT').value ='Museu alterado!'</script>";
                echo "<script>document.getElementById('id_tb_codPT').style.backgroundColor ='grey'</script>";


            } 

          }


  }



}

?>

</form>
</body>
</html>