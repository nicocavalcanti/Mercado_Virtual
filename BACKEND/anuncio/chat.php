<?php 
    session_start();
    include_once("../connection.php");
    /*$url=$_SESSION["url"];
    $query_str =parse_str(parse_url($url)['query'],$query_params);
    echo $query_params['user'];*/
    //echo "SELECT id_anuncio from anuncio WHERE id_carro={$_SESSION["anuncio"]}";
    $id=$pdo->query("SELECT id_anuncio FROM anuncio WHERE id_carro={$_SESSION["anuncio"]}")->fetch(PDO::FETCH_OBJ);
    
    $sql="SELECT * FROM chat WHERE id_anuncio={$id->id_anuncio} ORDER BY id_chat ASC";
    $query=$pdo->query($sql);
    //echo $sql;
    while($linha=$query->fetch()):   
    ?>
    <div class="dado_chat">
        
        <p id="id" class="<?php echo $linha['de_quem'];?>" ><b><?php echo $linha['de_quem']; ?>: </b><?php echo $linha["mensagem"];?></p>
    </div>
<?php endwhile;?>