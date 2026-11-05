# Retorna se o deque está vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.isempty.php

---

# Ds\Deque::isEmpty

(PECL ds >= 1.0.0)

Ds\Deque::isEmpty — Retorna se o deque está vazio

### Descrição

public function **Ds\Deque::isEmpty**(): [bool](language.types.boolean.md)

Retorna se o deque está vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o deque estiver vazio, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::isEmpty()****

```
<?php
$a = new \Ds\Deque([1, 2, 3]);
$b = new \Ds\Deque();

var_dump($a->isEmpty());
var_dump($b->isEmpty());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
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
