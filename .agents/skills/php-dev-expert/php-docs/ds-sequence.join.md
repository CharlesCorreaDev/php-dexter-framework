# Une todos os valores como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.join.php

---

# Ds\Sequence::join

(PECL ds >= 1.0.0)

Ds\Sequence::join — Une todos os valores como uma string

### Descrição

abstract public function **Ds\Sequence::join**([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

Une todos os valores como uma string usando um separador opcional entre cada valor.

### Parâmetros

`glue`
:   Uma string opcional para separar cada valor.

### Valor Retornado

Todos os valores da sequência unidos como uma string.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::join()** usando uma string de separação**

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c", 1, 2, 3]);

var_dump($sequence->join("|"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "a|b|c|1|2|3"
```

**Exemplo #2 Exemplo de **Ds\Sequence::join()** sem uma string de separação**

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c", 1, 2, 3]);

var_dump($sequence->join());
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
