<?php
# Classe DAO para o model de curso

include_once("util/conexao.php");
include_once("model/aluno.php");
include_once("model/curso.php");


class AlunoDAO{

    public function list(){
        //Função que retorna a conexão PDO com o banco
        $conn = conectar_db();
        $sql = "SELECT * FROM alunos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $reg):
            $curso =
            new Curso($reg['id_curso'], $reg['nome']);
            
            $aluno =
                new Aluno($reg['idAluno'], $reg['nomeAluno'], $reg['idade'], 
                $reg['estrangeiro'], $reg[$curso]);
            array_push($alunos, $aluno);
        endforeach;

        return $alunos;
    }

}

?>