# Une todos os valores como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.join.php

---

# Ds\Deque::join

(PECL ds >= 1.0.0)

Ds\Deque::join — Une todos os valores como uma string

### Descrição

public function **Ds\Deque::join**([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

Une todos os valores como uma string, usando um separador opcional entre cada valor.

### Parâmetros

`glue`
:   Uma string opcional para separar cada valor.

### Valor Retornado

Todos os valores do deque unidos como uma string.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::join()** usando uma string separadora**

```
<?php
$deque = new \Ds\Deque(["a", "b", "c", 1, 2, 3]);

var_dump($deque->join("|"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "a|b|c|1|2|3"
```

**Exemplo #2 Exemplo de **Ds\Deque::join()** sem uma string separadora**

```
<?php
$deque = new \Ds\Deque(["a", "b", "c", 1, 2, 3]);

var_dump($deque->join());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "abc123"
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
