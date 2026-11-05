# Manipulação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.pop.php

---

# Threaded::pop

(PECL pthreads >= 2.0.0)

Threaded::pop — Manipulação

### Descrição

public function **Threaded::pop**(): [bool](language.types.boolean.md)

Retira um item da tabela de propriedades do objeto

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último item da tabela de propriedades dos objetos

### Examples

**Exemplo #1 Removendo o último item da tabela de propriedades de um objeto Threaded**

```
<?php
$safe = new Threaded();

while (count($safe) < 10)
    $safe[] = count($safe);

var_dump($safe->pop());
?>
```

O exemplo acima produzirá:

```
int(9)
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
