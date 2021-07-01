<html>
  <head>
    
  </head>

<body>

<form method="post" id="form_cad_cid" action="/webtur/src/pages/Screen_6.php">

<div class="Screen_6 MatcSreen">

  <div class="Headline_1">Cadastrar Cidades</div>

  <div class="Row_36">

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

  <div class="Row_37">
    <div class="Label_4">Nome</div>
    <input type="text" placeholder="Enter a value" class="Text_Box" id="id_tb_nome" name="name_tb_nome" />  
    <div class="Label_6">Descrição</div>
    <input type="textarea" placeholder="Enter a value" class="Text_Box_2" id="id_tb_desc" name="name_tb_desc"/>     
    <input type="submit" class="Button_1" name="name_b1_inse" value="Inserir" id="id_b1_inse" />
   
  </div>

  <div class="Row_38">
    <div class="Label_5">Estado</div>
    <input type="text" placeholder="Enter a value" class="Text_Box_1" id="id_tb_esta" name="name_tb_esta"/>
    
    <input type="submit" class="Button_2" name="name_b2_apag" value="Apagar" id="id_b2_apag" />

  </div>

  <div class="Row_39">
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

  <input type="hidden" name="cidnameG" value="" id="id_cidnameG">
  <input type="hidden" name="estadoG" value="" id="id_estadoG">
  <input type="hidden" name="fotoG" value="" id="id_fotoG">
  <input type="hidden" name="textoG" value="" id="id_textoG">


</div>

<style lang="css" scoped>
    @import url("../css/normalize.css");
    @import url("../css/Screen_6.css");
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


  function btnvalue(btn){

    var vbtn = document.getElementById(btn).value;
    document.getElementById(btn).style.backgroundColor = "blue";
    return vbtn;

  }


</script>

<?php


// Testa todos os campos de texto antes


if (isset($_POST["name_b1_inse"])) {
  # code...
  echo "Inserir";


  if (empty($_POST["name_tb_nome"]) || $_POST["name_tb_nome"] == 'Preencha um nome')  {
    # code...

    echo "<script>document.getElementById('id_tb_nome').value ='Preencha um nome'</script>";
    echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";
  }
  else{

    if (isset($_POST["name_tb_nome"]) && isset($_POST["name_tb_esta"]) && isset($_POST["name_tb_desc"]) && isset($_POST["name_tb_foto"])){ 

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';

      $nomeC = strtoupper($_POST['name_tb_nome']);
      $estadoC = strtoupper($_POST['name_tb_esta']);


      $query = "INSERT INTO cidade VALUES ('','".$nomeC."','".$estadoC."','".$_POST['name_tb_foto']."','".$_POST['name_tb_desc']."')";

      $i = 0;

      $id = new mysqli($local,$user,$passwd);

      if($id){
        mysqli_select_db($id,$db);
        $sql = mysqli_query($id,$query) or die ($id->error);
  
  
        if($sql){
          echo "Cadastro realizado com sucesso!";
          echo "<script>document.getElementById('id_tb_nome').value ='Incluída!'</script>";
          echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='lightgreen'</script>";

        } 
      }
    }

  }



}
elseif (isset($_POST["name_b2_apag"])) {
  # code...
  echo "Apagar";

// "DELETE FROM `cidade` WHERE `cidade`.`codigo` = 7"

  if (empty($_POST["name_tb_nome"])) {
    # code...

    echo "<script>document.getElementById('id_tb_nome').value ='Preencha um nome'</script>";
    echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";
  }
  else{

    if (isset($_POST["name_tb_nome"]) && isset($_POST["name_tb_esta"]) && isset($_POST["name_tb_desc"]) && isset($_POST["name_tb_foto"])){ 

      $local = 'localhost';
      $user = 'root';
      $passwd = '';
      $db = 'webtur';
      $cod = '';

      $pesq_oq = $_POST['name_tb_nome'];

      $pesq_oqC = strtoupper($pesq_oq);

      $query = "select * from cidade where nome like '%".$pesq_oqC."%'";


      $i = 0;

      $id = new mysqli($local,$user,$passwd);

      if($id){
        mysqli_select_db($id,$db);
        $sql = mysqli_query($id,$query) or die ($id->error);
        ////////////

        while($dados = mysqli_fetch_array($sql)){
    
              $codigo[$i] = $dados['codigo'];
              $nome[$i] = $dados['nome'];

              $frag = "/".$pesq_oqC."/";

              if (preg_match($frag, $nome[$i])) {
                # code...
                $cod = $codigo[$i];
                break;
              }

              $i++;
         }
        /////////////
         
        if($cod != ''){
          echo "<br>Pesquisa realizado com sucesso: ".$nome[$i];

          $query = "delete from cidade where codigo='".$cod."'";
          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
                echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";
                echo "<script>document.getElementById('id_tb_nome').value = '".$nome[$i]." apagada'</script>";
                
            } 

          }

        } 
        else{
          echo "<script>document.getElementById('id_tb_nome').value ='Cidade não encontrada!'</script>";
          echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";

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
  

    if (empty($_POST["name_tb_nome"])) {
      # code...
  
      //echo "<br>Era para aparecer no textbox Nome";
      echo "<script>document.getElementById('id_tb_nome').value ='Preencha um nome'</script>";
      echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";
    }
    else{

      if (isset($_POST["name_tb_nome"]) && isset($_POST["name_tb_esta"]) && isset($_POST["name_tb_desc"]) && isset($_POST["name_tb_foto"])){ 

        $local = 'localhost';
        $user = 'root';
        $passwd = '';
        $db = 'webtur';
        $cod = '';

        $pesq_oq = $_POST['name_tb_nome'];

        $pesq_oqC = strtoupper($pesq_oq);

        $query = "select * from cidade where nome like '%".$pesq_oqC."%'";


        $i = 0;

        $id = new mysqli($local,$user,$passwd);

        if($id){
          mysqli_select_db($id,$db);
          $sql = mysqli_query($id,$query) or die ($id->error);
          ////////////

          while($dados = mysqli_fetch_array($sql)){
    
              $codigo[$i] = $dados['codigo'];
              $nome[$i] = $dados['nome'];
              echo "<script>document.getElementById('id_tb_nome').value ='".$nome[$i]."'</script>";
              $estado[$i] = $dados['estado'];
              echo "<script>document.getElementById('id_tb_esta').value ='".$estado[$i]."'</script>";
              $foto[$i] = $dados['foto'];
              echo "<script>document.getElementById('id_tb_foto').value ='".$foto[$i]."'</script>";
              $texto[$i] = $dados['texto'];
              echo "<script>document.getElementById('id_tb_desc').value ='".$texto[$i]."'</script>";

              $frag = "/".$pesq_oqC."/";  

              if (preg_match($frag, $nome[$i])) {
                # code...
                $cod = $codigo[$i];
                echo "<script>document.getElementById('id_b3_edit').value ='Alterar'</script>";
                
                // $valorbtn = "Alterar";
                echo "<script>document.getElementById('id_b3_edit').style.backgroundColor ='orange'</script>";

                ///////////////////////////////////////////////////////////////////////
                //
                // Na realidade só vai ser precisar das variáveis: $cod e $i
                //
                echo "<script>document.getElementById('id_cidnameG').value ='".$nome[$i]."'</script>";
                echo "<script>document.getElementById('id_estadoG').value ='".$estado[$i]."'</script>";
                echo "<script>document.getElementById('id_fotoG').value ='".$foto[$i]."'</script>";
                echo "<script>document.getElementById('id_iG').value ='".$i."'</script>";
                echo "<script>document.getElementById('id_codG').value ='".$cod."'</script>";
                echo "<script>document.getElementById('id_textoG').value ='".$texto[$i]."'</script>";

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
            echo "<br>Pesquisa realizada com sucesso: ".$nome[$i]." Código: ".$cod."<br>";
            echo "Preparado para Alterar<br>";
            
            echo "<script>document.getElementById('id_tbh_b3v').value ='Alterar'</script>";

            echo $_POST['name_tbh_b3v'];

            echo "<script>document.getElementById('id_codG').value ='".$cod."'</script>";

          } 
          else{
            echo "<script>document.getElementById('id_tb_nome').value ='Cidade não encontrada!'</script>";
            echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='yellow'</script>";

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
          

         $query = "update cidade set nome='".$_POST['name_tb_nome']."', estado='".$_POST['name_tb_esta']."', foto='".$_POST['name_tb_foto']."', texto='".$_POST['name_tb_desc']."' where codigo='".$_POST['codG']."'";

       

          $id = new mysqli($local,$user,$passwd);

          if($id){
            mysqli_select_db($id,$db);
            $sql = mysqli_query($id,$query) or die ($id->error);
        
            if($sql){
                echo "<script>document.getElementById('id_tb_nome').value ='Cidade alterada!'</script>";
                echo "<script>document.getElementById('id_tb_nome').style.backgroundColor ='grey'</script>";


            } 

          }




  }



}




?>

</form>

</body>

</html>