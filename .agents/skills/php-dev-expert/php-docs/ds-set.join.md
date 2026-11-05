# Junta todos os valores em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.join.php

---

# Ds\Set::join

(PECL ds >= 1.0.0)

Ds\Set::join — Junta todos os valores em uma string

### Descrição

public function **Ds\Set::join**([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

Junta todos os valores em uma string usando um separador opcional entre cada valor.

### Parâmetros

`glue`
:   Uma string opcional para separar cada valor.

### Valor Retornado

Todos os valores do conjunto juntos em uma string.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::join()** usando uma string separadora**

```
<?php
$set = new \Ds\Set(["a", "b", "c", 1, 2, 3]);

var_dump($set->join("|"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "a|b|c|1|2|3"
```

**Exemplo #2 Exemplo de **Ds\Set::join()** sem usar uma string separadora**

```
<?php
$set = new \Ds\Set(["a", "b", "c", 1, 2, 3]);

var_dump($set->join());
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
