<?php
//tratar erros
try{
//informando qual é o banco de dados e onde ta o banco de dados, usuario e senha
$conexao=new PDO('mysql:host=localhost;dbname=php_pdo', 'root','');

//usando sql com pdo 
$query='
create table tb_usuarios(
    id int not null primary key auto_increment,
    nome varchar(50) not null,
    email varchar(100) not null,
    senha varchar(32) not null
    )';

//  $retorno=  $conexao->exec($query);

//echo $retorno;

//inserindo dados 
$query='
insert into tb_usuarios(
    nome, email, senha)
values(
    "taina", "taina@gmail.com", "1234567"
    )';

$retorno=  $conexao->exec($query);
echo $retorno;

echo 'Conectou de boa';

}catch(PDOException $e){
echo 'conetou nada, deu ruim'.$e->getCode().'Mesagem:'.$e->getMessage();

}
