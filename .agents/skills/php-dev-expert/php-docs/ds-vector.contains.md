# Determina se o vetor contém os valores fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.contains.php

---

# Ds\Vector::contains

(PECL ds >= 1.0.0)

Ds\Vector::contains — Determina se o vetor contém os valores fornecidos

### Descrição

public function **Ds\Vector::contains**([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

Determina se o vetor contém todos os valores fornecidos.

### Parâmetros

`values`
:   Valores a serem verificados.

### Valor Retornado

**`false`** se qualquer um dos `values` fornecidos não estiver no
vetor, **`true`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::contains()****

```
<?php
$vector = new \Ds\Vector(['a', 'b', 'c', 1, 2, 3]);

var_dump($vector->contains('a'));                // true
var_dump($vector->contains('a', 'b'));           // true
var_dump($vector->contains('c', 'd'));           // false

var_dump($vector->contains(...['c', 'b', 'a'])); // true

// Sempre restrito
var_dump($vector->contains(1));                  // true
var_dump($vector->contains('1'));                // false

var_dump($vector->contains(...[]));              // true
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
