<?php
session_start();

    if(isset($_POST["alimento"]) && isset($_POST["nome"]) && isset($_POST["carapria"])){
        $alimento = $_POST["alimento"];
        $nome = $_POST["nome"];
        $carapria = $_POST["carapria"];
    }
    if(!(empty($alimento) or empty($nome) or empty($carapria))){
        include("conexao.php");
        $sql = "INSERT INTO tb_aliens (tipo_alimenta, nome_animal, caracte_propria) VALUES ('$alimento', '$nome', '$carapria')";
        $res = mysqli_query($conn, $sql);
    }

   $subaliens = mysqli_query($conn, "SELECT * FROM tb_aliens");
   echo "<table border='1'>";
  
   echo "<tr>";
        echo "<th>Forma de alimentação</th>";
        echo "<th>Nome do animal</th>";
        echo "<th>Característica Própria do animal </th>";
   
        echo "</tr>";
    while($subalien = mysqli_fetch_array($subaliens)){
        echo "<tr>";
            echo "<td>".$subalien['tipo_aliemnta']."</td>";
            echo "<td>".$subalien['nome_animal']."</td>";
            echo "<td>".$subalien['caracte_propria']."</td>";
        echo "</tr>";
    }
    echo "</table>";
     

      

?>