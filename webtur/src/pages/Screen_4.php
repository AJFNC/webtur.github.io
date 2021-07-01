<html>
  <head>
    
  </head>

<body>

<form method="post" id="form_pesq" action="/webtur/src/pages/Screen_4.php">

<div class="Screen_4 MatcSreen">
  <div class="Box"> 
    <div class="Row_12">
      <div class="Headline_1"><a href="/webtur/webtur.php">WebTur</a></div>
      <div class="Headline_3">(87) 9 9988 7766</div>
    </div>
    <div class="Headline_2">Informações turísticas das principais cidades do Brasil</div>
  </div>

  <div class="Row_11">
    <img src="" class="Image" id="fotoHotel" />
    <div class="Paragraph" id="parag">Digite o nome de um hotel no campo de texto e clique em Pesquisar para obter informações sobre ela!</div>

    <div class="Label_5">Hotel</div>
    <input type="text" placeholder="Entre nome hotel" class="Text_Box_1" id="campo_pesq" name="campo_n"/>
    
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
    @import url("../css/Screen_4.css");
</style>


<script>

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

  $query = "select * from hotel where nome like '%".$pesq_oqC."%'";
  $i = 0;

  $id = new mysqli($local,$user,$passwd);

  if($id){
    mysqli_select_db($id,$db);
    $sql = mysqli_query($id,$query) or die ('Erro na pesquisa!');
    while($dados = mysqli_fetch_array($sql)){
    
        $categoria[$i] = $dados['categoria'];
        $codigo[$i] = $dados['codigo'];
        $codigoCidade[$i] = $dados['codigoCidade'];
        $nome[$i] = $dados['nome'];
        $foto[$i] = $dados['foto'];
        $endereco[$i] = $dados['endereco'];
        $telefone[$i] = $dados['telefone'];


        $frag = "/".$pesq_oqC."/";

        if (preg_match($frag, $nome[$i])) {

          $hotel = $nome[$i];
          $cat = $categoria[$i];
          $foto = $foto[$i];
          $endH = $endereco[$i];
          $fone = $telefone[$i];

          echo "<script>document.getElementById('campo_pesq').value = '".$hotel."';</script>";

          echo "<script>document.getElementById('fotoHotel').src = '".$foto."';</script>";

          echo "<script>document.getElementById('parag').innerHTML ='".$endH."<br>".$cat." Estrelas<br>".$fone."';</script>";


        }


        $i++;
    }

  }
}
?>

</form>
</body>