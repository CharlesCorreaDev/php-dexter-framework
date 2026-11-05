# Adiciona uma tarefa para ser executada em paralelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addtask.php

---

# GearmanClient::addTask

(PECL gearman >= 0.5.0)

GearmanClient::addTask — Adiciona uma tarefa para ser executada em paralelo

### Descrição

public function **GearmanClient::addTask**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Adiciona uma tarefa para ser executada em paralelo com outras tarefas. Chame este método para todas as tarefas
para serem executadas em paralelo, então chame [GearmanClient::runTasks()](gearmanclient.runtasks.md) para
executar a tarefa. Note que é preciso haver trabalhadores suficientes disponíveis para que todas as tarefas
sejam executadas em paralelo.

### Parâmetros

`function_name`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`context`
:   Contexto da aplicação para associar a uma tarefa

`unique_key`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

Um objeto [GearmanTask](class.gearmantask.md) ou **`false`** se a tarefa não pôde ser adicionada.

### Examples

**Exemplo #1 Envio básico de duas tarefas**

```
<?php

# Cria o cliente gearman
$gmclient= new GearmanClient();

# Adiciona o servidor de tarefa padrão
$gmclient->addServer();

# Define uma função a ser chamada quando a tarefa estiver concluída
$gmclient->setCompleteCallback("complete");

# Adiciona uma tarefa para executar a função "reverse" na string "Hello World!"
$gmclient->addTask("reverse", "Hello World!", null, "1");

# Adiciona outra tarefa para executar a função "reverse" na string "!dlroW olleH"
$gmclient->addTask("reverse", "!dlroW olleH", null, "2");

# Executa as tarefas
$gmclient->runTasks();

function complete($task)
{
  print "CONCLUÍDO: " . $task->unique() . ", " . $task->data() . "\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
CONCLUÍDO: 2, Hello World!
CONCLUÍDO: 1, !dlroW olleH
```

**Exemplo #2 Envio básico de duas tarefas com passagem de contexto de aplicação**

```
<?php

$client = new GearmanClient();
$client->addServer();

# Define uma função a ser chamada quando a tarefa estiver concluída
$client->setCompleteCallback("reverse_complete");

# Adiciona algumas tarefas para um marcador onde serão colocados os resultados
$results = array();
$client->addTask("reverse", "Hello World!", $results, "t1");
$client->addTask("reverse", "!dlroW olleH", $results, "t2");

$client->runTasks();

# Os resultados agora devem ser preenchidos a partir das funções de retorno
foreach ($results as $id => $result)
   echo $id . ": " . $result['handle'] . ", " . $result['data'] . "\n";

function reverse_complete($task, $results)
{
   $results[$task->unique()] = array("handle"=>$task->jobHandle(), "data"=>$task->data());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
t2: H.foo:21, Hello World!
t1: H:foo:22, !dlroW olleH
```

### Veja também

- [GearmanClient::addTaskHigh()](gearmanclient.addtaskhigh.md) - Adiciona uma tarefa de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskLow()](gearmanclient.addtasklow.md) - Adiciona uma tarefa de baixa prioridade para ser executada em paralelo
- [GearmanClient::addTaskBackground()](gearmanclient.addtaskbackground.md) - Adiciona uma tarefa em segundo plano para ser executada em paralelo
- [GearmanClient::addTaskHighBackground()](gearmanclient.addtaskhighbackground.md) - Adiciona uma tarefa de segundo plano de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskLowBackground()](gearmanclient.addtasklowbackground.md) - Adiciona uma tarefa em segundo plano de baixa prioridade para ser executada em paralelo
- [GearmanClient::runTasks()](gearmanclient.runtasks.md) - Executa uma lista de tarefas em paralelo

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
