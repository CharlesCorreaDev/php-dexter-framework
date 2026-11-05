# Identificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.getcurrentthreadid.php

---

# Thread::getCurrentThreadId

(PECL pthreads >= 2.0.0)

Thread::getCurrentThreadId — Identificação

### Descrição

public static function **Thread::getCurrentThreadId**(): [int](language.types.integer.md)

Retornará a identidade do Thread em execução no momento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma identidade numérica

### Examples

**Exemplo #1 Retornando a identidade do Thread atualmente em execução**

```
<?php
class My extends Thread {
    public function run() {
        printf("%s é o Thread #%lu\n", __CLASS__, Thread::getCurrentThreadId());
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
