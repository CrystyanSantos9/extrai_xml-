<?php

if(!isset($_SESSION)) {

    session_start();
}

$server ='127.0.0.1';
$user ='sistematarefa';
$pass ='sistema';
$database='notas';

$conexao = mysqli_connect($server,$user,$pass,$database);


if(!$conexao)
{
    die("Conexão falhou" . mysqli_error($conexao));
}


function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM notas_recebidas';

    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

//Buscando dados no banco Casa do Código
    for ($i=0;$i<$tarefa = mysqli_fetch_assoc($resultado);$i++) {

    $tarefas[] = $tarefa;

}
    return $tarefas;
    
}

function buscar_grupos($conexao)
{
    $sqlBusca = 'SELECT * FROM grupo';

    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

//Buscando dados no banco Casa do Código
    while ($tarefa = mysqli_fetch_assoc($resultado)) 

    {
        $tarefas[] = $tarefa;
    }
    
        return $tarefas;
    
}





function gravar_grupo($conexao,$tarefa)
{
    $sqlGravar = " INSERT INTO grupo
        (grupoPrincipal,subGrupo)
        VALUES
        (

        '{$tarefa['gpp']}',
        '{$tarefa['sbp']}'
       
        )
        ";

        mysqli_query($conexao, $sqlGravar);

        echo "<script>alert('Grupo Adicionado!');</script>";
        
}

