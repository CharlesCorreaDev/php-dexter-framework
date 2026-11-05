# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearman.examples-reverse.php

---

## Uso básico

**Exemplo #1 Cliente e trabalhador básico do Gearman**

Este exemplo mostra um cliente e um trabalhador muito simples. O cliente envia uma string
para o servidor de trabalho, e o trabalhador inverte a string e a envia de volta.
O trabalho é executado de forma síncrona.

```
<?php

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona servidor padrão (localhost).
$gmclient->addServer();

echo "Enviando tarefa\n";

# Envia trabalho reverso
do
{
  $result = $gmclient->doNormal("reverse", "Hello!");

  # Verifica vários pacotes de retorno e erros.
  switch($gmclient->returnCode())
  {
    case GEARMAN_WORK_DATA:
      echo "Dados: $result\n";
      break;
    case GEARMAN_WORK_STATUS:
      list($numerator, $denominator)= $gmclient->doStatus();
      echo "Status: $numerator/$denominator concluído\n";
      break;
    case GEARMAN_WORK_FAIL:
      echo "Falhou\n";
      exit;
    case GEARMAN_SUCCESS:
      echo "Sucesso: $result\n";
      break;
    default:
      echo "RET: " . $gmclient->returnCode() . "\n";
      exit;
  }
}
while($gmclient->returnCode() != GEARMAN_SUCCESS);

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
    $job->sendStatus($x, $workload_size);
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
Tarefa recebida: H:foo.local:36
Carga de trabalho: Hello! (6)
Status de envio: 1/6 concluído
Status de envio: 2/6 concluído
Status de envio: 3/6 concluído
Status de envio: 4/6 concluído
Status de envio: 5/6 concluído
Status de envio: 6/6 concluído
Resultado: !olleH
```

```
% php reverse_client.php
Começando
Enviando tarefa
Status: 1/6 concluído
Status: 2/6 concluído
Status: 3/6 concluído
Status: 4/6 concluído
Status: 5/6 concluído
Status: 6/6 concluído
Sucesso: !olleH
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
