<html>
<head>

<style lang="css" scoped>
    @import url("/webtur/src/css/normalize.css");
    @import url("/webtur/src/css/Screen.css");
</style>


</head>

<body>



<div class="Screen MatcSreen">
  <div class="Box">
    <div class="Row_4">
      <div class="Headline_1"><a href="/webtur/webtur.php">WebTur</a></div>
      <div class="Headline_3">(87) 9 9988 7766</div>
    </div>
    <div class="Headline_2">Informações turísticas das principais cidades do Brasil</div>
  </div>
  <div class="Row_1">
   
    <div class="Box_1">
      <div class="Hotspot" />
        <div class="Label_1"><a href="/webtur/src/pages/Screen_8.php"> Cidade </a></div>
      </div>
    </div>
      
   
    <div class="Box_2">
      <div class="Hotspot_1" />
        <div class="Label_1"><a href="/webtur/src/pages/Screen_4.php">Hotel</a></div>
      </div>
    </div>
      

    <div class="Box_3">
      <div class="Hotspot_2">
        <div class="Label_1"><a href="/webtur/src/pages/Screen_2.php">Restaurante</a></div>
      </div>
    </div>

    <div class="Box_4">
      <div class="Hotspot_3" />
        <div class="Label_1"><a href="/webtur/src/pages/Screen_3.php">Ponto Turístico</a></div>
      </div>
    </div>
      
    
    <div class="Box_5">
      <div class="Hotspot_4" />
        <div class="Label_1"><a href="/webtur/src/pages/Screen_1.php">Funcionário</a></div>
      </div>
    </div>
      
  </div>
  <div class="Row_2"> <img src="/webtur/src/images/recife.jpg" 
    class="Image" /><img src="/webtur/src/images/rio.png" 
    class="Image_1" /><img src="/webtur/src/images/salvador.png" 
    class="Image_2" /><img src="/webtur/src/images/curitiba.jpg" 
    class="Image_3" /><img src="/webtur/src/images/natal.jpg" 
    class="Image_4" /></div>
  <div class="Row_3">
    <div class="Paragraph" id="p0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    </div>
    <div class="Paragraph_1" id="p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    </div>
    <div class="Paragraph_2" id="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    </div>
    <div class="Paragraph_3" id="p3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    </div>
    <div class="Paragraph_4" id="p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    </div>
  </div>
  <div class="Box_6">
    <div class="Headline">WebTur
    </div>
    <div class="Headline_4">
      Av. Mons. Ângelo Sampaio, 2000
      Petrolina - PE
      CEP: 56.300-000
    </div>
  </div>
</div>




	<script type="text/javascript">


	</script>

	<?php

    $local = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'webtur';

    $query = "select * from cidade";
    $i = 0;
    $j = $i;

    $id = new mysqli($local,$user,$passwd);

    if($id){
      mysqli_select_db($id,$db);
      $sql = mysqli_query($id,$query) or die ('Erro na pesquisa!');
      while($dados = mysqli_fetch_array($sql)){
    
        $nome[$i] = $dados['nome'];
        $texto[$i] = $dados['texto'];

        $textoC = $texto[$i];
        
          if ($textoC != '') {
            # code...
            echo "<script>document.getElementById('p".$j."').innerHTML ='".$textoC."'</script>";
            $j++;
          }
           
        $i++;
    
      }
    }




	?>

</body>
</html>