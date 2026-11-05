# Adiciona uma tarefa em segundo plano para ser executada em paralelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addtaskbackground.php

---

# GearmanClient::addTaskBackground

(PECL gearman >= 0.5.0)

GearmanClient::addTaskBackground — Adiciona uma tarefa em segundo plano para ser executada em paralelo

### Descrição

public function **GearmanClient::addTaskBackground**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Adiciona uma tarefa em segundo plano para ser executada em paralelo com outras tarefas. Chame este método para todas as tarefas
a serem executadas em paralelo, então chame [GearmanClient::runTasks()](gearmanclient.runtasks.md) para
executar a tarefa.

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

**Exemplo #1 Duas tarefas, uma em segundo plano e outra não**

Este exemplo ilustra a diferença entre executar uma tarefa em segundo plano
e uma tarefa normal. O cliente adiciona duas tarefas para executar a mesma função,
mas uma é adicionada com **addTaskBackground()**. Uma função de retorno é
definida para que o progresso da tarefa possa ser rastreado. Um trabalhador simples com um
atraso artificial relata o progresso da tarefa e o cliente pega isso
por meio da função de retorno. Dois trabalhadores são executados para este exemplo. Observe que a
tarefa em segundo plano não é exibida na saída do cliente.

```
<?php

# O script do cliente

# Cria o cliente gearman
$gmc= new GearmanClient();

# Adiciona o servidor de tarefa padrão
$gmc->addServer();

# Define algumas funções de retorno para que possamos monitorar o progresso
$gmc->setCompleteCallback("reverse_complete");
$gmc->setStatusCallback("reverse_status");

# Adiciona uma tarefa para a função "reverse"
$task= $gmc->addTask("reverse", "Hello World!", null, "1");

# Adiciona outra tarefa, mas esta para ser executada em segundo plano
$task= $gmc->addTaskBackground("reverse", "!dlroW olleH", null, "2");

if (! $gmc->runTasks())
{
    echo "ERRO " . $gmc->error() . "\n";
    exit;
}

echo "PRONTO\n";

function reverse_status($task)
{
    echo "STATUS: " . $task->unique() . ", " . $task->jobHandle() . " - " . $task->taskNumerator() .
         "/" . $task->taskDenominator() . "\n";
}

function reverse_complete($task)
{
    echo "CONCLUÍDO: " . $task->unique() . ", " . $task->data() . "\n";
}

?>
```

```
<?php

# O script do trabalhador

echo "Começando\n";

# Cria nosso objeto trabalhador.
$gmworker= new GearmanWorker();

# Adiciona servidor padrão (localhost).
$gmworker->addServer();

# Registra a função "reversa" com o servidor.
$gmworker->addFunction("reverse", "reverse_fn");

print "Esperando tarefa...\n";
while($gmworker->work())
{
  if ($gmworker->returnCode() != GEARMAN_SUCCESS)
  {
    echo "Código de retorno:" . $gmworker->returnCode() . "\n";
    break;
  }
}

function reverse_fn($job)
{
  echo "Tarefa recebida: " . $job->handle() . "\n";

  $workload = $job->workload();
  $workload_size = $job->workloadSize();

  echo "Carga de trabalho: $workload ($workload_size)\n";

  # Este laço de status não é necessário, apenas mostra como ele funciona
  for ($x= 0; $x < $workload_size; $x++)
  {
    echo "Status de envio: " . ($x + 1) . "/$workload_size concluído\n";
    $job->sendStatus($x+1, $workload_size);
    $job->sendData(substr($workload, $x, 1));
    sleep(1);
  }

  $result= strrev($workload);
  echo "Resultado: $result\n";

  # Retorna o que queremos enviar de volta ao cliente.
  return $result;
}

?>
```

Resultado do para dois trabalhadores em execução:

```
Tarefa recebida: H:foo.local:65
Carga de trabalho: !dlroW olleH (12)
1/12 concluído
Tarefa recebida: H:foo.local:66
Carga de trabalho: Hello World! (12)
Status de envio: 1/12 concluído
Status de envio: 2/12 concluído
Status de envio: 2/12 concluído
Status de envio: 3/12 concluído
Status de envio: 3/12 concluído
Status de envio: 4/12 concluído
Status de envio: 4/12 concluído
Status de envio: 5/12 concluído
Status de envio: 5/12 concluído
Status de envio: 6/12 concluído
Status de envio: 6/12 concluído
Status de envio: 7/12 concluído
Status de envio: 7/12 concluído
Status de envio: 8/12 concluído
Status de envio: 8/12 concluído
Status de envio: 9/12 concluído
Status de envio: 9/12 concluído
Status de envio: 10/12 concluído
Status de envio: 10/12 concluído
Status de envio: 11/12 concluído
Status de envio: 11/12 concluído
Status de envio: 12/12 concluído
Status de envio: 12/12 concluído
Resultado: !dlroW olleH
Resultado: Hello World!
```

Saída no cliente:

```
STATUS: 1, H:foo.local:66 - 1/12
STATUS: 1, H:foo.local:66 - 2/12
STATUS: 1, H:foo.local:66 - 3/12
STATUS: 1, H:foo.local:66 - 4/12
STATUS: 1, H:foo.local:66 - 5/12
STATUS: 1, H:foo.local:66 - 6/12
STATUS: 1, H:foo.local:66 - 7/12
STATUS: 1, H:foo.local:66 - 8/12
STATUS: 1, H:foo.local:66 - 9/12
STATUS: 1, H:foo.local:66 - 10/12
STATUS: 1, H:foo.local:66 - 11/12
STATUS: 1, H:foo.local:66 - 12/12
CONCLUÍDO: 1, !dlroW olleH
PRONTO
```

### Veja também

- [GearmanClient::addTask()](gearmanclient.addtask.md) - Adiciona uma tarefa para ser executada em paralelo
- [GearmanClient::addTaskHigh()](gearmanclient.addtaskhigh.md) - Adiciona uma tarefa de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskLow()](gearmanclient.addtasklow.md) - Adiciona uma tarefa de baixa prioridade para ser executada em paralelo
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
