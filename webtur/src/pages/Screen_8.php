<html>
  <head>
    
  </head>

<body>

<form method="post" id="form_pesq" action="/webtur/src/pages/Screen_8.php">

<div class="Screen_8 MatcSreen">
  <div class="Box">
    <div class="Row_8">
      <div class="Headline_1"><a href="/webtur/webtur.php">WebTur</a></div>
      <div class="Headline_3">(87) 9 9988 7766</div>
    </div>
    <div class="Headline_2">Informações turísticas das principais cidades do Brasil</div>
  </div>
  <div class="Row_7">
    <img src="" class="Image" id="fotoCid" />
    <div class="Paragraph" id="parag">Digite o nome de uma cidade no campo de texto e clique em Pesquisar para obter informações sobre ela!</div>

    <div class="Label_5">Cidade</div>
    <input type="text" placeholder="Entre nome cidade" class="Text_Box_1" id="campo_pesq" name="campo_n" /> 
    
    <input type="submit" class="Button" name="pesq" value="Pesquisa" />

  </div>



  <div class="Box_6">
    <div class="Headline">WebTur</div>
    <div class="Headline_4">
      Av. Mons. Ângelo Sampaio, 2000
      Petrolina - PE
      CEP: 56.300-000
    </div>
  </div>

</div>

<style lang="css" scoped>
    @import url("../css/normalize.css");
    @import url("../css/Screen_8.css");
</style>

<script>



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


// Testa o campo_n antes

if (isset($_POST["campo_n"])){ 

  $local = 'localhost';
  $user = 'root';
  $passwd = '';
  $db = 'webtur';

  $pesq_oq = $_POST['campo_n'];

  $pesq_oqC = strtoupper($pesq_oq);

  $query = "select * from cidade where nome like '%".$pesq_oqC."%'";
  $i = 0;

  $id = new mysqli($local,$user,$passwd);

  if($id){
    mysqli_select_db($id,$db);
    $sql = mysqli_query($id,$query) or die ('Erro na pesquisa!');
    while($dados = mysqli_fetch_array($sql)){
    
        $codigo[$i] = $dados['codigo'];
        $nome[$i] = $dados['nome'];
        $estado[$i] = $dados['estado'];
        $foto[$i] = $dados['foto'];
        $texto[$i] = $dados['texto'];
       

        $frag = "/".$pesq_oqC."/";

        if (preg_match($frag, $nome[$i])) {
          # code...
        

          $cid = $nome[$i];
          $code = $codigo[$i];
          $foto = $foto[$i];
          $textoC = $texto[$i];

          echo "<script>document.getElementById('campo_pesq').value = '".$cid."';</script>";

          echo "<script>document.getElementById('fotoCid').src = '".$foto."';</script>";

          echo "<script>document.getElementById('parag').innerHTML ='".$textoC."'</script>";


        }


        $i++;
    }

  }
}
?>



</form>

</body>