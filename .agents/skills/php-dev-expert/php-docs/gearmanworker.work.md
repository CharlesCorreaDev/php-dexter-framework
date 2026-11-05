# Espera e executa trabalhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.work.php

---

# GearmanWorker::work

(PECL gearman >= 0.5.0)

GearmanWorker::work — Espera e executa trabalhos

### Descrição

public function **GearmanWorker::work**(): [bool](language.types.boolean.md)

Aguarda que um trabalho seja atribuído e então chama a função de retorno de chamada apropriada.
Emite um **`E_WARNING`** com o último erro Gearman se o código de retorno
não for um de **`GEARMAN_SUCCESS`**, **`GEARMAN_IO_WAIT`**,
ou **`GEARMAN_WORK_FAIL`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **GearmanWorker::work()****

```
<?php

# cria o trabalhador
$worker = new GearmanWorker();

# adiciona o servidor de trabalho padrão (localhost)
$worker->addServer();

# adiciona a função reversa
$worker->addFunction("reverse", "my_reverse_function");

# inicia o trabalhador ouvindo as submissões de trabalho
while ($worker->work());

function my_reverse_function($job)
{
  return strrev($job->workload());
}

?>
```

### Veja também

- [GearmanWorker::addFunction()](gearmanworker.addfunction.md) - Registra e adiciona função de retorno

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
