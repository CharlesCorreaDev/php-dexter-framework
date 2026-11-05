# Determina se a deque contém os valores fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.contains.php

---

# Ds\Deque::contains

(PECL ds >= 1.0.0)

Ds\Deque::contains — Determina se a deque contém os valores fornecidos

### Descrição

public function **Ds\Deque::contains**([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

Determina se a deque contém todos os valores.

### Parâmetros

`values`
:   Valores a serem verificados.

### Valor Retornado

**`false`** se algum dos `values` fornecidos não estiver na
deque, **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::contains()****

```
<?php
$deque = new \Ds\Deque(['a', 'b', 'c', 1, 2, 3]);

var_dump($deque->contains('a'));                // true
var_dump($deque->contains('a', 'b'));           // true
var_dump($deque->contains('c', 'd'));           // false

var_dump($deque->contains(...['c', 'b', 'a'])); // true

// Always strict
var_dump($deque->contains(1));                  // true
var_dump($deque->contains('1'));                // false

var_dump($deque->contains(...[]));              // true
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(false)
bool(true)
bool(true)
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
