# Verifica se um ponto de código é uma letra minúscula

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.islower.php

---

# IntlChar::islower

(PHP 7, PHP 8)

IntlChar::islower — Verifica se um ponto de código é uma letra minúscula

### Descrição

public static function **IntlChar::islower**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado tem a categoria geral "Ll" (letra minúscula).

> **Nota**:
>
> Isto deixa passar alguns caracteres que também são letras minúsculas mas têm uma categoria geral diferente. Para incluir esses, use a função [IntlChar::isULowercase()](intlchar.isulowercase.md).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for uma letra minúscula (Ll), **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::islower("A"));
var_dump(IntlChar::islower("a"));
var_dump(IntlChar::islower("Φ"));
var_dump(IntlChar::islower("φ"));
var_dump(IntlChar::islower("1"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::isupper()](intlchar.isupper.md) - Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
- [IntlChar::istitle()](intlchar.istitle.md) - Verifica se um ponto de código é uma letra com grafia mista
- [IntlChar::tolower()](intlchar.tolower.md) - Transforma o caractere Unicode em minúscula
- [IntlChar::toupper()](intlchar.toupper.md) - Transforma um caractere Unicode em maiúscula
- **`IntlChar::PROPERTY_LOWERCASE`**
- [ctype\_lower()](function.ctype-lower.md) - Verifica se os caracteres são minúsculos

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
