# Indefine uma constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-undefine.php

---

# uopz\_undefine

(PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_undefine — Indefine uma constante

### Descrição

function **uopz\_undefine**([string](language.types.string.md) `$constant`): [bool](language.types.boolean.md)

function **uopz\_undefine**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$constant`): [bool](language.types.boolean.md)

Remove a constante em tempo de execução

### Parâmetros

`class`
:   O nome da classe que contém `constant`.

`constant`
:   O nome de uma constante existente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **uopz\_undefine()****

```
<?php
define("MY", true);

uopz_undefine("MY");

var_dump(defined("MY"));
?>
```

O exemplo acima produzirá:

```
bool(false)
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
