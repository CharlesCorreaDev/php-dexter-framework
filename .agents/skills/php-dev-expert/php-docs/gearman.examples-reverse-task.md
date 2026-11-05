# Cliente e trabalhador básicos do Gearman, enviando tarefas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearman.examples-reverse-task.php

---

## Cliente e trabalhador básicos do Gearman, enviando tarefas

**Exemplo #1 Cliente e trabalhador básicos do Gearman, enviando tarefas**

Neste exemplo, o cliente reverso básico foi estendido para executar duas tarefas em paralelo.
O trabalhador reverso não foi alterado, exceto para adicionar o envio de dados de volta durante o processamento.

```
<?php

# cria o cliente gearman
$gmc= new GearmanClient();

# adiciona o servidor padrão (localhost)
$gmc->addServer();

# registra algumas funções de retorno
$gmc->setCreatedCallback("reverse_created");
$gmc->setDataCallback("reverse_data");
$gmc->setStatusCallback("reverse_status");
$gmc->setCompleteCallback("reverse_complete");
$gmc->setFailCallback("reverse_fail");

# define alguns dados de aplicação arbitrários
$data['foo'] = 'bar';

# adiciona duas tarefas
$task= $gmc->addTask("reverse", "foo", $data);
$task2= $gmc->addTaskLow("reverse", "bar", NULL);

# executa as tarefas em paralelo (assumindo vários trabalhadores)
if (! $gmc->runTasks())
{
    echo "ERRO " . $gmc->error() . "\n";
    exit;
}

echo "PRONTO\n";

function reverse_created($task)
{
    echo "CRIADO: " . $task->jobHandle() . "\n";
}

function reverse_status($task)
{
    echo "STATUS: " . $task->jobHandle() . " - " . $task->taskNumerator() .
         "/" . $task->taskDenominator() . "\n";
}

function reverse_complete($task)
{
    echo "CONCLUÍDO: " . $task->jobHandle() . ", " . $task->data() . "\n";
}

function reverse_fail($task)
{
    echo "FALHOU: " . $task->jobHandle() . "\n";
}

function reverse_data($task)
{
    echo "DADOS: " . $task->data() . "\n";
}

?>
```

```
<?php

echo "Começando\n";

# Cria nosso objeto trabalhador.
$gmworker= new GearmanWorker();

# Adiciona servidor padrão (localhost).
$gmworker->addServer();

# Registra a função "reverse" com o servidor. Altera para a função
# "reverse_fn_fast" para um trabalhador mais rápido sem saída.
$gmworker->addFunction("reverse", "reverse_fn");

print "Esperando por tarefa...\n";
while($gmworker->work())
{
  if ($gmworker->returnCode() != GEARMAN_SUCCESS)
  {
    echo "Código de retorno: " . $gmworker->returnCode() . "\n";
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

# Uma versão muito mais simples e menos detalhada da função acima seria:
function reverse_fn_fast($job)
{
  return strrev($job->workload());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
% php reverse_worker.php
Começando
Esperando por tarefa...
Tarefa recebida: H:foo.local:45
Carga de trabalho: foo (3)
Status de envio: 1/3 concluído
Status de envio: 2/3 concluído
Status de envio: 3/3 concluído
Resultado: oof
Tarefa recebida: H:foo.local:44
Carga de trabalho: bar (3)
Status de envio: 1/3 concluído
Status de envio: 2/3 concluído
Status de envio: 3/3 concluído
Resultado: rab
```

```
% php reverse_client_task.php
CRIADO: H:foo.local:44
CRIADO: H:foo.local:45
STATUS: H:foo.local:45 - 1/3
DADOS: f
STATUS: H:foo.local:45 - 2/3
DADOS: o
STATUS: H:foo.local:45 - 3/3
DADOS: o
CONCLUÍDO: H:foo.local:45, oof
STATUS: H:foo.local:44 - 1/3
DADOS: b
STATUS: H:foo.local:44 - 2/3
DADOS: a
STATUS: H:foo.local:44 - 3/3
DADOS: r
CONCLUÍDO: H:foo.local:44, rab
PRONTO
```

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
