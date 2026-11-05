# Identificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.getcreatorid.php

---

# Thread::getCreatorId

(PECL pthreads >= 2.0.0)

Thread::getCreatorId — Identificação

### Descrição

public function **Thread::getCreatorId**(): [int](language.types.integer.md)

Retornará a identidade do Thread que criou o Thread referenciado

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma identidade numérica

### Examples

**Exemplo #1 Retornando a identidade do Thread ou Processo que criou o Thread referenciado**

```
<?php
class My extends Thread {
    public function run() {
        printf("%s criado pelo #%lu\n", __CLASS__, $this->getCreatorId());
    }
}
$my = new My();
$my->start();
?>
```

O exemplo acima produzirá:

```
My criado pelo Thread #123456778899
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
