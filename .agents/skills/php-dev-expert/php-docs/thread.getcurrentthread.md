# Identificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.getcurrentthread.php

---

# Thread::getCurrentThread

(PECL pthreads >= 2.0.0)

Thread::getCurrentThread — Identificação

### Descrição

public static function **Thread::getCurrentThread**(): [Thread](class.thread.md)

Retorna uma referência ao Thread em execução no momento

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto que representa o Thread atualmente em execução

### Examples

**Exemplo #1 Retornando o Thread em execução no momento**

```
<?php
class My extends Thread {
    public function run() {
        var_dump(Thread::getCurrentThread());
    }
}
$my = new My();
$my->start();
?>
```

O exemplo acima produzirá:

```
object(My)#2 (0) {
}
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
