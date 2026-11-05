# Define o tempo limite da atividade de E/S do soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.settimeout.php

---

# GearmanWorker::setTimeout

(PECL gearman >= 0.6.0)

GearmanWorker::setTimeout — Define o tempo limite da atividade de E/S do soquete

### Descrição

public function **GearmanWorker::setTimeout**([int](language.types.integer.md) `$timeout`): [true](language.types.singleton.md)

Define o intervalo de tempo de espera pela atividade de E/S do soquete.

### Parâmetros

`timeout`
:   Um intervalo de tempo em milissegundos. Um valor negativo indica um tempo infinito.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Um trabalhador simples com um tempo limite de 5 segundos**

```
<?php

echo "Começando\n";

# Cria um objeto trabalhador.
$gmworker= new GearmanWorker();

# Adiciona servidor padrão (localhost).
$gmworker->addServer();

# Registra a função "reverse" com o servidor.
$gmworker->addFunction("reverse", "reverse_fn");

# Define o tempo limite para 5 segundos
$gmworker->setTimeout(5000);

echo "Esperando por trabalho...\n";
while(@$gmworker->work() || $gmworker->returnCode() == GEARMAN_TIMEOUT)
{
  if ($gmworker->returnCode() == GEARMAN_TIMEOUT)
  {
    # Normalmente alguém gostaria de fazer algo útil aqui...
    echo "Tempo limite. Aguardando o próximo trabalho...\n";
    continue;
  }

  if ($gmworker->returnCode() != GEARMAN_SUCCESS)
  {
    echo "Código de retorno: " . $gmworker->returnCode() . "\n";
    break;
  }
}

echo "Pronto\n";

function reverse_fn($job)
{
  return strrev($job->workload());
}

?>
```

Executar o trabalhador sem trabalhos enviados gerará uma saída semelhante à seguinte:

```
Começando
Esperando por trabalho...
Tempo limite. Aguardando o próximo trabalho...
Tempo limite. Aguardando o próximo trabalho...
Tempo limite. Aguardando o próximo trabalho...
```

### Veja também

- [GearmanWorker::timeout()](gearmanworker.timeout.md) - Obtém tempo limite de atividade de E/S do soquete

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
