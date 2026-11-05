# Desliga o trabalhador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.shutdown.php

---

# Worker::shutdown

(PECL pthreads >= 2.0.0)

Worker::shutdown — Desliga o trabalhador

### Descrição

public function **Worker::shutdown**(): [bool](language.types.boolean.md)

Desliga o trabalhador após executar todas as tarefas empilhadas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Desligando o trabalhador referenciado**

```
<?php
$my = new Worker();
$my->start();
/* empilha/executa tarefas */
var_dump($my->shutdown());
```

O exemplo acima produzirá:

```
bool(true)
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
