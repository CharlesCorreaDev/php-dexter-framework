# Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.iswhitespace.php

---

# IntlChar::isWhitespace

(PHP 7, PHP 8)

IntlChar::isWhitespace — Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU

### Descrição

public static function **IntlChar::isWhitespace**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere de espaço em branco de acordo com a ICU.

Um caractere é considerado como um espaço em branco pela ICU se e somente se satisfizer um dos seguintes critérios:

- É um caractere separador Unicode (categorias "Z" = "Zs" ou "Zl" ou "Zp"), mas não pode ser também um espaço sem quebra (U+00A0 NBSP ou U+2007 Figure Space ou U+202F Narrow NBSP).
- É um U+0009 HORIZONTAL TABULATION.
- É um U+000A LINE FEED.
- É um U+000B VERTICAL TABULATION.
- É um U+000C FORM FEED.
- É um U+000D CARRIAGE RETURN.
- É um U+001C FILE SEPARATOR.
- É um U+001D GROUP SEPARATOR.
- É um U+001E RECORD SEPARATOR.
- É um U+001F UNIT SEPARATOR.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere de espaço em branco de acordo com a ICU, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::iswhitespace("A"));
var_dump(IntlChar::iswhitespace(" "));
var_dump(IntlChar::iswhitespace("\n"));
var_dump(IntlChar::iswhitespace("\t"));
var_dump(IntlChar::iswhitespace("\u{00A0}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::isspace()](intlchar.isspace.md) - Verifica se um ponto de código é um caractere de espaçamento
- [IntlChar::isJavaSpaceChar()](intlchar.isjavaspacechar.md) - Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
- [IntlChar::isUWhiteSpace()](intlchar.isuwhitespace.md) - Verifica se um ponto de código tem a propriedade White\_Space do Unicode

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
