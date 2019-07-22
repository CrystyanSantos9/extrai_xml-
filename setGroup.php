<?php

include 'menu.php';
include 'configuracao/bd.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="folha2.css">
    <meta charset="UTF-8">
    <script src="myScript1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <div id="tudo">

    <h1>Cadastro de Grupos & Subgrupos</h3>

        <form id="parent" action="" method="post">
            
                

                <label id="rotuloPrincipal">Grupo Principal</label> <br>
                <input id="entradaPrincipal" type="text" name="grupo" onchange="verifica()"/><br>
                <input type="submit">
        </form>
    
       

    <button onclick="newGroup()">Adicionar subgrupo</button>

    <button onclick="deleta()">Retirar subgrupo</button>

</div>





    
<?php

if (isset($_POST['grupo']) && $_POST['grupo'] != '') {

    $tarefa = array();

    $tarefa['gpp'] = $_POST['grupo'];

    if(isset($_POST['subgrupo']))
    {
        $tarefa['sbp'] = $_POST['subgrupo'];
    }else{
        $tarefa{'sbp'} ='';
    }

    gravar_grupo($conexao,$tarefa);
   
}

$lista_tarefas = buscar_grupos($conexao);


?>



<div id="grupos_cadastrados">
    <table>
       <tr>
           <th>Grupo</th>
           <th>Sub-Grupo</th>
       </tr>
       
       <tr>
       <td> 
       <select>
       <?php foreach ($lista_tarefas as $tarefa) : ?>
           <option><?php echo $tarefa['grupoPrincipal']; ?></option> 
           <?php endforeach;?>
        </select>
        </td> 
        <td> 
       <select>
       <?php foreach ($lista_tarefas as $tarefa) : ?>
           <option><?php echo $tarefa['subGrupo']; ?></option> 
           <?php endforeach;?>
        </select>
        </td> 
        </tr>
      
       
       </table>
    </div>



</body>
</html>