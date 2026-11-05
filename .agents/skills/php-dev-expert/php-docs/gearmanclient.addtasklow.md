# Adiciona uma tarefa de baixa prioridade para ser executada em paralelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addtasklow.php

---

# GearmanClient::addTaskLow

(PECL gearman >= 0.5.0)

GearmanClient::addTaskLow — Adiciona uma tarefa de baixa prioridade para ser executada em paralelo

### Descrição

public function **GearmanClient::addTaskLow**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Adiciona uma tarefa de segundo plano de baixa prioridade para ser executada em paralelo com outras tarefas.
Chame este método para todas as tarefas a serem executadas em paralelo, então chame
[GearmanClient::runTasks()](gearmanclient.runtasks.md) para executar a tarefa. Tarefas com baixa
prioridade serão selecionadas da fila após aquelas de prioridade normal ou baixa.

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

**Exemplo #1 Uma tarefa de baixa prioridade junto com duas tarefas normais**

Uma tarefa de baixa prioridade é incluída entre duas outras tarefas. Um único trabalhador
está disponível, para que as tarefas sejam executadas uma de cada vez, com a tarefa de baixa prioridade
sendo executada por último.

```
<?php

# Cria o cliente gearman
$gmc= new GearmanClient();

# Adiciona o servidor de tarefa padrão
$gmc->addServer();

# Define a função de retorno para quando a tarefa for concluída
$gmc->setCompleteCallback("reverse_complete");

# Adiciona tarefas, uma das quais é de baixa prioridade
$task= $gmc->addTask("reverse", "Hello World!", null, "1");
$task= $gmc->addTaskLow("reverse", "!dlroW olleH", null, "2");
$task= $gmc->addTask("reverse", "Hello World!", null, "3");

if (! $gmc->runTasks())
{
    echo "ERRO " . $gmc->error() . "\n";
    exit;
}
echo "PRONTO\n";

function reverse_complete($task)
{
    echo "CONCLUÍDO: " . $task->unique() . ", " . $task->data() . "\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
CONCLUÍDO: 3, !dlroW olleH
CONCLUÍDO: 1, !dlroW olleH
CONCLUÍDO: 2, Hello World!
PRONTO
```

### Veja também

- [GearmanClient::addTask()](gearmanclient.addtask.md) - Adiciona uma tarefa para ser executada em paralelo
- [GearmanClient::addTaskHigh()](gearmanclient.addtaskhigh.md) - Adiciona uma tarefa de alta prioridade para ser executada em paralelo
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
