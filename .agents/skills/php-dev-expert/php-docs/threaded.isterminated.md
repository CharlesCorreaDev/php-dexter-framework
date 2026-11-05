# Detecção de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.isterminated.php

---

# Threaded::isTerminated

(PECL pthreads >= 2.0.0)

Threaded::isTerminated — Detecção de estado

### Descrição

public function **Threaded::isTerminated**(): [bool](language.types.boolean.md)

Informa se o objeto referenciado foi encerrado durante a execução, sofreu erros fatais ou lançou exceções não capturadas

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma indicação booleana de estado

### Examples

**Exemplo #1 Detectando o estado do objeto referenciado**

```
<?php
class My extends Thread {
    public function run() {
        eu_nao_existo();
    }
}
$my = new My();
$my->start();
$my->join();
var_dump($my->isTerminated());
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
