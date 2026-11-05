# Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isupper.php

---

# IntlChar::isupper

(PHP 7, PHP 8)

IntlChar::isupper — Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)

### Descrição

public static function **IntlChar::isupper**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado tem a categoria geral "Lu" (letra maiúscula).

> **Nota**:
>
> Esta função deixa passar alguns caracteres que também são letras maiúsculas mas têm um valor diferente de categoria geral. Para incluir esses, use [IntlChar::isUUppercase()](intlchar.isuuppercase.md).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for uma letra maiúscula (Lu), **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isupper("A"));
var_dump(IntlChar::isupper("a"));
var_dump(IntlChar::isupper("Φ"));
var_dump(IntlChar::isupper("φ"));
var_dump(IntlChar::isupper("1"));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
bool(true)
bool(false)
bool(false)
```

### Veja também

- [IntlChar::islower()](intlchar.islower.md) - Verifica se um ponto de código é uma letra minúscula
- [IntlChar::istitle()](intlchar.istitle.md) - Verifica se um ponto de código é uma letra com grafia mista
- [IntlChar::tolower()](intlchar.tolower.md) - Transforma o caractere Unicode em minúscula
- [IntlChar::toupper()](intlchar.toupper.md) - Transforma um caractere Unicode em maiúscula
- **`IntlChar::PROPERTY_UPPERCASE`**
- [ctype\_upper()](function.ctype-upper.md) - Verifica se os caracteres são maiúsculos

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
