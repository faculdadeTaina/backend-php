

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Tarfa - nova tarefa</title>
</head>
<body>
    <h2>Adicione uma nova tarefa</h2>
    <form method="post"
     action="./controller/tarefaController.php?acao=inserir">
        <label>Tarefa</label>
        <input type="text"
         placeholder="Informe qual é a tarefa"
         name="tarefa"
         id="tarefa"
        >
        <button>Cadastrar</button>
    </form>
</body>
</html>

