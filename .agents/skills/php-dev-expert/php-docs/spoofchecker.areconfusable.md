# Verifica se as strings fornecidas podem ser confundidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spoofchecker.areconfusable.php

---

# Spoofchecker::areConfusable

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Spoofchecker::areConfusable — Verifica se as strings fornecidas podem ser confundidas

### Descrição

public function **Spoofchecker::areConfusable**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`, [int](language.types.integer.md) `&$errorCode` = **`null`**): [bool](language.types.boolean.md)

Verifica se duas strings fornecidas podem ser facilmente confundidas.

### Parâmetros

`string1`
:   Primeira string a verificar.

`string2`
:   Segunda string a verificar.

`errorCode`
:   Esta variável é definida por referência para [int](language.types.integer.md) contendo um erro, se houver
    algum.

### Valor Retornado

Retorna **`true`** se as duas strings podem ser confundidas, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Spoofchecker::areConfusable()****

```
<?php
$checker = new Spoofchecker();

$checker->areConfusable('google.com', 'goog1e.com'); // verdadeiro
// L minúsculo pode ser confundido com o número 1

$checker->areConfusable('google.com', 'g00g1e.com'); // falso
// Zero (0) não é facilmente confundido com a letra "o" minúscula
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
