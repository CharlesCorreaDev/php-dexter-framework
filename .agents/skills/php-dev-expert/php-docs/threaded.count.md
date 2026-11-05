# Manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.count.php

---

# Threaded::count

(PECL pthreads >= 2.0.0)

Threaded::count — Manipulação

### Descrição

public function **Threaded::count**(): [int](language.types.integer.md)

Retorna o número de propriedades para este objeto

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Contando as propriedades de um objeto**

```
<?php
$safe = new Threaded();

while (count($safe) < 10) {
    $safe[] = count($safe);
}

var_dump(count($safe));
?>
```

O exemplo acima produzirá:

```
int(10)
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
