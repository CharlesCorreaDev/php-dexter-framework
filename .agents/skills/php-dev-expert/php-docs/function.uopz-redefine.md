# Redefine uma constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-redefine.php

---

# uopz\_redefine

(PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_redefine — Redefine uma constante

### Descrição

function **uopz\_redefine**([string](language.types.string.md) `$constant`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

function **uopz\_redefine**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$constant`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Redefine a constante `constant` para o valor em `value`.

### Parâmetros

`class`
:   O nome da classe que contém a constante.

`constant`
:   O nome da constante.

`value`
:   O novo valor para a constante deve ser um tipo válido para uma variável constante.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **uopz\_redefine()****

```
<?php
define("MY", 100);

uopz_redefine("MY", 1000);

echo MY;
?>
```

O exemplo acima produzirá:

```
1000
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
