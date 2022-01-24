<?php
/* --------------------------------------------
 * Programa para validar login no site
 * --------------------------------------------
*/
        
    //Recebe os dados do index.html
    echo "<h2>Você digitou:</h2><h3>".$_POST["login"]." - ".$_POST["password"]."</h3>";

    //Faz conexão com o banco de dados
    include("../../config/conecta_db.php");
    echo "<p>Login no banco efetuado com sucesso.</p>";

    //Dependendo do resultado, entra ou sai do sistema

    echo "<p><a href='../'>Volta</a></p>";
?>