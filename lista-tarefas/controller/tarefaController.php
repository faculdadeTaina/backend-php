<?php
//regras de negocio
print_r($_POST);

require "./model/tarefaModel.php";
require "./service/tarefaService.php";

require "./conexao.php";

$tarefa=new Tarefa();

$tarefa->__set('tarefa',$_POST['tarefa']);

$conexao=new Conexao();

//criando uma instancia de tarefa service
$tarefaService=new TarefaService();


?>