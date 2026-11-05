# Sincronização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.join.php

---

# Thread::join

(PECL pthreads >= 2.0.0)

Thread::join — Sincronização

### Descrição

public function **Thread::join**(): [bool](language.types.boolean.md)

Faz com que o contexto de chamada aguarde até que o Thread referenciado termine de executar

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Ligando ao Thread referenciado**

```
<?php
class My extends Thread {
    public function run() {
        /* ... */
    }
}
$my = new My();
$my->start();
/* ... */
var_dump($my->join());
/* ... */
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
