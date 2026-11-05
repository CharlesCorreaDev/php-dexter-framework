# Executa uma única tarefa e retorna um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.donormal.php

---

# GearmanClient::doNormal

(No version information available, might only be in Git)

GearmanClient::doNormal — Executa uma única tarefa e retorna um resultado

### Descrição

public function **GearmanClient::doNormal**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

Executa uma única tarefa e retorna uma representação de string do resultado. Cabe ao
[GearmanClient](class.gearmanclient.md) e ao [GearmanWorker](class.gearmanworker.md)
concordar com o formato do resultado.

### Parâmetros

`function`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`unique`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

Uma string que representa os resultados da execução de uma tarefa.

### Examples

**Exemplo #1 Envio de tarefa simples com retorno imediato**

```
<?php

?>
```

```
<?php

# Código do cliente

echo "Começando\n";

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona servidor padrão (localhost).
$gmclient->addServer();

echo "Enviando tarefa\n";

$result = $gmclient->doNormal("reverse", "Hello!");

echo "Sucesso: $result\n";

?>
```

```
<?php

echo "Começando\n";

# Cria nosso objeto trabalhador.
$gmworker= new GearmanWorker();

# Adiciona servidor padrão (localhost).
$gmworker->addServer();

# Registra a função "reversa" com o servidor. Altera a função do trabalhador para
# "reverse_fn_fast" para um trabalhador mais rápido sem saída.
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
  return strrev($job->workload());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Começando
Enviando tarefa
Sucesso: !olleH
```

**Exemplo #2 Enviando uma tarefa e recuperando status incremental**

Uma tarefa é enviada e o script faz um laço para recuperar informações de status.
O trabalhador tem um atraso artificial que resulta em uma tarefa de longa execução
e envia status e dados conforme o processamento ocorre.
Cada chamada subsequente a **GearmanClient::doNormal()**
produz informações de status na tarefa em execução.

```
<?php

# Código do cliente

# Cria nosso objeto cliente.
$gmclient= new GearmanClient();

# Adiciona servidor padrão (localhost).
$gmclient->addServer();

echo "Enviando tarefa\n";

# Envia tarefa reversa
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
      break;
    default:
      echo "RET: " . $gmclient->returnCode() . "\n";
      echo "Error: " . $gmclient->error() . "\n";
      echo "Errno: " . $gmclient->getErrno() . "\n";
      exit;
  }
}
while($gmclient->returnCode() != GEARMAN_SUCCESS);

echo "Sucesso: $result\n";

?>
```

```
<?php

# Código do trabalhador

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
    echo "Status de envio: " + $x + 1 . "/$workload_size concluído\n";
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

O exemplo acima produzirá
algo semelhante a:

Worker output:

```
Começando
Esperando tarefa...
Tarefa recebida: H:foo.local:106
Carga de trabalho: Hello! (6)
1/6 concluído
2/6 concluído
3/6 concluído
4/6 concluído
5/6 concluído
6/6 concluído
Resultado: !olleH
```

Client output:

```
Começando
Enviando tarefa
Status: 1/6 concluído
Dados: H
Status: 2/6 concluído
Dados: e
Status: 3/6 concluído
Dados: l
Status: 4/6 concluído
Dados: l
Status: 5/6 concluído
Dados: o
Status: 6/6 concluído
Dados: !
Sucesso: !olleH
```

### Veja também

- [GearmanClient::doHigh()](gearmanclient.dohigh.md) - Executa uma única tarefa de alta prioridade
- [GearmanClient::doLow()](gearmanclient.dolow.md) - Executa uma única tarefa de baixa prioridade
- [GearmanClient::doBackground()](gearmanclient.dobackground.md) - Executa uma tarefa em segundo plano
- [GearmanClient::doHighBackground()](gearmanclient.dohighbackground.md) - Executa uma tarefa de alta prioridade em segundo plano
- [GearmanClient::doLowBackground()](gearmanclient.dolowbackground.md) - Executa uma tarefa de baixa prioridade em segundo plano

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
