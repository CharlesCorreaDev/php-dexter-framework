# Identificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.getthreadid.php

---

# Thread::getThreadId

(PECL pthreads >= 2.0.0)

Thread::getThreadId — Identificação

### Descrição

public function **Thread::getThreadId**(): [int](language.types.integer.md)

Retornará a identidade do Thread referenciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma identidade numérica

### Examples

**Exemplo #1 Retornando a identidade do Thread referenciado**

```
<?php
class My extends Thread {
    public function run() {
        printf("%s é o Thread #%lu\n", __CLASS__, $this->getThreadId());
    }
}
$my = new My();
$my->start();
?>
```

O exemplo acima produzirá:

```
My é o Thread #123456778899
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
