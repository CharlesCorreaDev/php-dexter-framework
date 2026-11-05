# Detecção de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.isstarted.php

---

# Thread::isStarted

(PECL pthreads >= 2.0.0)

Thread::isStarted — Detecção de estado

### Descrição

public function **Thread::isStarted**(): [bool](language.types.boolean.md)

Informar se o Thread referenciado foi iniciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Informa se o tópico referenciado foi iniciado**

```
<?php
$worker = new Worker();
$worker->start();
var_dump($worker->isStarted());
?>
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
