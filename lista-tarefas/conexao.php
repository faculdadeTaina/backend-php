<?php
print "-pagina de conexão";
class Conexao{
    private $host ='localhost';
    private $dbname ='lista_tarefas';
    private $user ='root';
    private $senha ='';
    
    public function conectar(){
//conecando com pdo e fazendo tratamento de erros
try{
$conexao=new PDO(
"mysql:host=$this->host;dbname=$this->dbname",
"$this->user",
"$this->senha"
);

return $conexao;

}catch (PDOException $e){
    echo '<p>'.$e->getMessage().'</p>';
}
    }
}

?>