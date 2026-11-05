# Verifica se um ponto de código tem a propriedade Lowercase do Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isulowercase.php

---

# IntlChar::isULowercase

(PHP 7, PHP 8)

IntlChar::isULowercase — Verifica se um ponto de código tem a propriedade Lowercase do Unicode

### Descrição

public static function **IntlChar::isULowercase**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica se um ponto de código tem a propriedade Lowercase do Unicode.

É o mesmo que `IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_LOWERCASE)`

> **Nota**:
>
> É diferente de [IntlChar::islower()](intlchar.islower.md) e retornará **`true`** para mais caracteres.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` tiver a propriedade Lowercase do Unicode, **`false`** se não tiver. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isULowercase("A"));
var_dump(IntlChar::isULowercase("a"));
var_dump(IntlChar::isULowercase("Φ"));
var_dump(IntlChar::isULowercase("φ"));
var_dump(IntlChar::isULowercase("1"));
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

- [IntlChar::islower()](intlchar.islower.md) - Verifica se um ponto de código é uma letra minúscula
- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- **`IntlChar::PROPERTY_LOWERCASE`**

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
