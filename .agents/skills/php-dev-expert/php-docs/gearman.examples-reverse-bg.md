# Cliente e trabalhador básicos do Gearman, histórico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearman.examples-reverse-bg.php

---

## Cliente e trabalhador básicos do Gearman, histórico

**Exemplo #1 Cliente e trabalhador básicos do Gearman, histórico**

Este exemplo mostra um cliente e um trabalhador muito simples. O cliente envia uma string
para o servidor de trabalho como um trabalho em segundo plano, e o trabalhador inverte a string.
Observe que, como o trabalho é realizado de forma assíncrona, o cliente não
espera que o trabalho seja concluído e sai (e, portanto, o cliente nunca recebe os resultados).

```
<?php

# cria nosso objeto cliente
$gmclient= new GearmanClient();

# adiciona o servidor padrão (localhost)
$gmclient->addServer();

# executa o cliente "reverse" em segundo plano
$job_handle = $gmclient->doBackground("reverse", "this is a test");

if ($gmclient->returnCode() != GEARMAN_SUCCESS)
{
  echo "código de retorno incorreto\n";
  exit;
}

echo "pronto!\n";

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
Tarefa recebida: H:foo.local:41
Carga de trabalho: this is a test (14)
Status de envio: 1/14 concluído
Status de envio: 2/14 concluído
Status de envio: 3/14 concluído
Status de envio: 4/14 concluído
Status de envio: 5/14 concluído
Status de envio: 6/14 concluído
Status de envio: 7/14 concluído
Status de envio: 8/14 concluído
Status de envio: 9/14 concluído
Status de envio: 10/14 concluído
Status de envio: 11/14 concluído
Status de envio: 12/14 concluído
Status de envio: 13/14 concluído
Status de envio: 14/14 concluído
Resultado: tset a si siht
```

```
% php reverse_client_bg.php
pronto!
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
