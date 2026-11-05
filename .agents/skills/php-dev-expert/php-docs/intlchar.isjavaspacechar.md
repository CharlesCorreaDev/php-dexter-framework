# Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isjavaspacechar.php

---

# IntlChar::isJavaSpaceChar

(PHP 7, PHP 8)

IntlChar::isJavaSpaceChar — Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java

### Descrição

public static function **IntlChar::isJavaSpaceChar**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere de espaçamento de acordo com o Java.

**`true`** para caracteres com categoria geral "Z" (separadores), que não incluem códigos de controle (ex.: TAB ou LF).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere de espaçamento de acordo com o Java, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isJavaSpaceChar("A"));
var_dump(IntlChar::isJavaSpaceChar(" "));
var_dump(IntlChar::isJavaSpaceChar("\n"));
var_dump(IntlChar::isJavaSpaceChar("\t"));
var_dump(IntlChar::isJavaSpaceChar("\u{00A0}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
```

### Veja também

- [IntlChar::isspace()](intlchar.isspace.md) - Verifica se um ponto de código é um caractere de espaçamento
- [IntlChar::isWhitespace()](intlchar.iswhitespace.md) - Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU
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
