<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbnt">
        <i class="fas fa-bars"></i>
        
      </label>
      <label class="logo">PotiCars</label>
      <ul>
        <li><a  href="./">Home</a></li>
        <li><a href="#">Pesquisar</a></li>
        <?php if(isset($_SESSION["login"])){?>
        <li><a href="anunciar">Anunciar</a></li>
        <?php } ?>
<<<<<<< HEAD
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="Perfil.html">Meu Perfil</a></li>
=======
        <li><a href="contato">Contato</a></li>
        <li><a href="sobre">Sobre</a></li>
>>>>>>> 4ea224a8522dc3adfbb5dbbfd5efbff57dac464e
        <?php if(!isset($_SESSION["login"])){ ?>
        <li><a class="active"href="login">Entrar</a></li>
        <?php }?>
      </ul>
</nav>