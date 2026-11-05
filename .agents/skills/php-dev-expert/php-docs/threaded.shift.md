# Manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.shift.php

---

# Threaded::shift

(PECL pthreads >= 2.0.0)

Threaded::shift — Manipulação

### Descrição

public function **Threaded::shift**(): [mixed](language.types.mixed.md)

Desloca um item da tabela de propriedades de objetos

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro item da tabela de propriedades dos objetos

### Examples

**Exemplo #1 Deslocando o primeiro item da tabela de propriedades de um objeto Threaded**

```
<?php
$safe = new Threaded();

while (count($safe) < 10)
    $safe[] = count($safe);

var_dump($safe->shift());
?>
```

O exemplo acima produzirá:

```
int(0)
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
