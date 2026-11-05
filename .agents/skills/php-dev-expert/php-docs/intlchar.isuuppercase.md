# Verifica se um ponto de código tem a propriedade Uppercase do Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isuuppercase.php

---

# IntlChar::isUUppercase

(PHP 7, PHP 8)

IntlChar::isUUppercase — Verifica se um ponto de código tem a propriedade Uppercase do Unicode

### Descrição

public static function **IntlChar::isUUppercase**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica se um ponto de código tem a propriedade Uppercase do Unicode.

É o mesmo que `IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_UPPERCASE)`

> **Nota**:
>
> É diferente de [IntlChar::isupper()](intlchar.isupper.md) e retornará **`true`** para mais caracteres.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` tiver a propriedade Uppercase do Unicode, **`false`** se não tiver. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isUUppercase("A"));
var_dump(IntlChar::isUUppercase("a"));
var_dump(IntlChar::isUUppercase("Φ"));
var_dump(IntlChar::isUUppercase("φ"));
var_dump(IntlChar::isUUppercase("1"));
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

- [IntlChar::isupper()](intlchar.isupper.md) - Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- **`IntlChar::PROPERTY_UPPERCASE`**

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
