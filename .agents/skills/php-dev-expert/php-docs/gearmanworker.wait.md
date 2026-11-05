# Aguarda atividade de um dos servidores de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.wait.php

---

# GearmanWorker::wait

(PECL gearman >= 0.6.0)

GearmanWorker::wait — Aguarda atividade de um dos servidores de trabalho

### Descrição

public function **GearmanWorker::wait**(): [bool](language.types.boolean.md)

Faz com que o trabalhador espere por atividade de um dos servidores de trabalho do Gearman ao operar
em modo de E/S não bloqueante. Em caso de falha, emite um **`E_WARNING`** com o último erro do Gearman
encontrado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Executando o trabalhador no modo não bloqueante**

```
<?php

echo "Começando\n";

# Cria um objeto trabalhador.
$worker= new GearmanWorker();

# Torna o trabalhador não bloqueante
$worker->addOptions(GEARMAN_WORKER_NON_BLOCKING);

# Adiciona o servidor padrão (localhost, porta 4730)
$worker->addServer();

# Adiciona nossa função reversa
$worker->addFunction('reverse', 'reverse_fn');

# Tenta pegar um trabalho
while (@$worker->work() ||
       $worker->returnCode() == GEARMAN_IO_WAIT ||
       $worker->returnCode() == GEARMAN_NO_JOBS)
{
  if ($worker->returnCode() == GEARMAN_SUCCESS)
    continue;

  echo "Esperando o próximo trabalho...\n";
  if (!@$worker->wait())
  {
    if ($worker->returnCode() == GEARMAN_NO_ACTIVE_FDS)
    {
      # Não estamos conectados a nenhum servidor, então
      # aguarde um pouco antes de tentar reconectar.
      sleep(5);
      continue;
    }
    break;
  }
}

echo "Erro no trabalhador: " . $worker->error() . "\n";

function reverse_fn($job)
{
  return strrev($job->workload());
}

?>
```

### Veja também

- [GearmanWorker::work()](gearmanworker.work.md) - Espera e executa trabalhos

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
