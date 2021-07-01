<html>
  <head>
    
  </head>

<body>

<form id="autenticar" method="POST" action="/webtur/src/php/cadastra.php">

<div class="Screen_1 MatcSreen">

  <div class="Headline_1">Autenticação</div>

  <div class="Box"> 
    <div class="Label_8">E-mail</div>
    <input type="text" placeholder="Enter an email" name="email" class="Text_Box_(Email)" />
     
    <div class="Label">Senha</div>
    <input type="password" placeholder="Enter password" name="pass" class="Password_(Hide_&_Show)" />

    <input type="submit" class="Button_2" name="entrar" value="Entrar"/>

    <input type="submit" class="Button_2" name="cadastrar" value="Administrar"/>

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
    @import url("../css/Screen_1.css");
</style>


<script>
export default {
    name: "Screen 1",
    mixins: [],
    props: [],
    data: function() {
        return {

        };
    },
    components: {},
    methods: {
        navigateTo (screen) {
            this.$router.push(screen + '.html')
        }
    },
    mounted() {}
};

</script>

</form>

</body>

</html>