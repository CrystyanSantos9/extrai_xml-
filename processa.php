<?php

echo '<link rel="stylesheet" href="estilo/folha_principal.css" type="text/css">';
echo '<link rel="stylesheet" href="folha2.css" type="text/css">';
include 'menu.php';

require_once 'configuracao/bd.php';





$setVar = array();

$notas = ($_POST['arquivos']);

foreach ($notas as $nota)
{

        $DOMDocument = new DOMDocument;

        $DOMDocument->preserveWhiteSpace = false;

        $DOMDocument->load($nota);

        $cnf = $DOMDocument->getElementsByTagName('cNF');
        $natop = $DOMDocument->getElementsByTagName('natOp');
        $dhemi = $DOMDocument->getElementsByTagName('dhEmi');
        $cnpj = $DOMDocument->getElementsByTagName('CNPJ');
        $xnome = $DOMDocument->getElementsByTagName('xNome');


        $nomeProd=$DOMDocument->getElementsByTagName('prod');

       foreach($nomeProd as $produtos)
       {
        

       $setVar['cnf'][] = (string)$cnf->item(0)->nodeValue;
       $setVar['natop'][] = (string)$natop->item(0)->nodeValue;
       $setVar['dhemi'][] = (string)$dhemi->item(0)->nodeValue;
       $setVar['cnpj'][] = (string)$cnpj->item(0)->nodeValue;
       $setVar['xnome'][] = (string)$xnome->item(0)->nodeValue;

       
        $setVar['nomeProd'][] = (string)$produtos->getElementsByTagName('xProd')->item(0)->nodeValue;
        $setVar['cfop'][] = (string)$produtos->getElementsByTagName('CFOP')->item(0)->nodeValue;
        $setVar['ucom'][] = (string)$produtos->getElementsByTagName('uCom')->item(0)->nodeValue;
        $setVar['qcom'][] = (string)$produtos->getElementsByTagName('qCom')->item(0)->nodeValue;
        $setVar['vuncom'][] = (string)$produtos->getElementsByTagName('vUnCom')->item(0)->nodeValue;
        $setVar['vprod'][] = (string)$produtos->getElementsByTagName('vProd')->item(0)->nodeValue;

        $tarefa = array();

        $tarefa['nome'] = (string)$produtos->getElementsByTagName('vProd')->item(0)->nodeValue;

        
        

        /*var_dump($tarefa);*/

       
        $lista_tarefas = $_SESSION['lista_tarefas'];

        $lista_tarefas = array();

        $_SESSION['lista_tarefas'] = $tarefa;


            

       }
        
      
}

?>
        <form method>
        
        <div style="overflow-x:auto;">
        <table>
        <tr>
         <th>Nº Danfe</th>
         <th>Natureza Operação</th>
         <th>CNPJ</th>
         <th>Empresa</th>
         <th>Data Emissão</th>
         <th>Produto</th>
         <th>CFOP</th>
         <th>Unidade</th>
         <th>Quantidade</th>
         <th>Valor Unit.</th>
         <th>Total Produto</th>
         
         
         
        <tr>
         <?php for($i=0;$i<count($setVar['nomeProd']);$i++):?>
         
        <tr>
        
         <td><?php echo $setVar['cnf'][$i]?></td>
         <td><?php echo $setVar['natop'][$i]?></td>
         <td><?php echo $setVar['cnpj'][$i]?></td>
         <td><?php echo $setVar['xnome'][$i]?></td>
         <td><?php echo $setVar['dhemi'][$i]?></td>
         
         <td><?php echo $setVar['nomeProd'][$i]?></td>
         <td><?php echo $setVar['cfop'][$i]?></td>
         <td><?php echo $setVar['ucom'][$i]?></td>
         <td><?php echo $setVar['qcom'][$i]?></td>
         <td><?php echo $setVar['vuncom'][$i]?></td>
         <td><?php echo $setVar['vprod'][$i]?></td>
         
         
         
        <tr>
        
                
         <?php endfor;?>
        </table> 
        
        </div>
        
        </form>   
        
        <?php foreach ($lista_tarefas as $tarefa) { ?>
        <tr>
        <td><?php echo $tarefa['nome']; ?> </td>
        </tr>
        <?php } ?>

                


   




