# Determina se a sequência contém determinados valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.contains.php

---

# Ds\Sequence::contains

(PECL ds >= 1.0.0)

Ds\Sequence::contains — Determina se a sequência contém determinados valores

### Descrição

abstract public function **Ds\Sequence::contains**([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

Determina se a sequência contém todos os valores.

### Parâmetros

`values`
:   Valores a verificar.

### Valor Retornado

**`false`** se algum dos `values` fornecidos não estiver na
sequência, **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::contains()****

```
<?php
$sequence = new \Ds\Vector(['a', 'b', 'c', 1, 2, 3]);

var_dump($sequence->contains('a'));                // true
var_dump($sequence->contains('a', 'b'));           // true
var_dump($sequence->contains('c', 'd'));           // false

var_dump($sequence->contains(...['c', 'b', 'a'])); // true

// Sempre estrito
var_dump($sequence->contains(1));                  // true
var_dump($sequence->contains('1'));                // false

var_dump($sequence->contains(...[]));              // true
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
