<?php
//regras de negocio
//print_r($_POST);

require "../model/tarefaModel.php";
require "../service/tarefaService.php";
require "../conexao.php";

echo    '<pre>';
print_r($_POST);
echo    '</pre>';

$acao=isset($_GET['acao']) ? $_GET['acao'] :$acao;

if($acao=='inserir'){
    $tarefa=new Tarefa();

    $tarefa->__set('tarefa',$_POST['tarefa']);
    
    $conexao=new Conexao();
    
    //criando uma instancia de tarefa service
    $tarefaService=new TarefaService($conexao, $tarefa);
    //executando metods
    $tarefaService->inserir();
    
    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';
    
    echo 'cheguie ate aqio';
    
    header('Location:newTarefa.php?inclusao=1');
}else if($acao=='recuperar'){
echo    'chegamos até aqui';
}


?>