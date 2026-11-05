# Detecção de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.isshutdown.php

---

# Worker::isShutdown

(PECL pthreads >= 2.0.0)

Worker::isShutdown — Detecção de estado

### Descrição

public function **Worker::isShutdown**(): [bool](language.types.boolean.md)

Informa se o trabalhador foi desligado ou não.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna se o trabalhador foi desligado ou não.

### Examples

**Exemplo #1 Detectando o estado de um trabalhador**

```
<?php
$worker = new Worker();
$worker->start();

var_dump($worker->isShutdown());

$worker->shutdown();

var_dump($worker->isShutdown());
```

O exemplo acima produzirá:

```
bool(false)
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
