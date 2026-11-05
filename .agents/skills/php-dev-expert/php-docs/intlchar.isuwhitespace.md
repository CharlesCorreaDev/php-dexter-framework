# Verifica se um ponto de código tem a propriedade White_Space do Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isuwhitespace.php

---

# IntlChar::isUWhiteSpace

(PHP 7, PHP 8)

IntlChar::isUWhiteSpace — Verifica se um ponto de código tem a propriedade White\_Space do Unicode

### Descrição

public static function **IntlChar::isUWhiteSpace**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Verifica se um ponto de código tem a propriedade White\_Space do Unicode.

É o mesmo que `IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_WHITE_SPACE)`

> **Nota**:
>
> É diferente de [IntlChar::isspace()](intlchar.isspace.md) e de [IntlChar::isWhitespace()](intlchar.iswhitespace.md).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` tiver a propriedade White\_Space do Unicode, **`false`** se não tiver. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isUWhiteSpace("A"));
var_dump(IntlChar::isUWhiteSpace(" "));
var_dump(IntlChar::isUWhiteSpace("\n"));
var_dump(IntlChar::isUWhiteSpace("\t"));
var_dump(IntlChar::isUWhiteSpace("\u{00A0}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::isspace()](intlchar.isspace.md) - Verifica se um ponto de código é um caractere de espaçamento
- [IntlChar::isWhitespace()](intlchar.iswhitespace.md) - Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU
- [IntlChar::isJavaSpaceChar()](intlchar.isjavaspacechar.md) - Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
- [IntlChar::hasBinaryProperty()](intlchar.hasbinaryproperty.md) - Verifica uma propriedade binária Unicode para um ponto de código
- **`IntlChar::PROPERTY_WHITE_SPACE`**

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
