# Verifica se um ponto de código é um caractere de espaçamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isspace.php

---

# IntlChar::isspace

(PHP 7, PHP 8)

IntlChar::isspace — Verifica se um ponto de código é um caractere de espaçamento

### Descrição

public static function **IntlChar::isspace**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o caractere especificado é um caractere de espaçamento ou não.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere de espaçamento, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isspace("A"));
var_dump(IntlChar::isspace(" "));
var_dump(IntlChar::isspace("\n"));
var_dump(IntlChar::isspace("\t"));
var_dump(IntlChar::isspace("\u{00A0}"));
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

- [IntlChar::isJavaSpaceChar()](intlchar.isjavaspacechar.md) - Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
- [IntlChar::isWhitespace()](intlchar.iswhitespace.md) - Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU
- [IntlChar::isUWhiteSpace()](intlchar.isuwhitespace.md) - Verifica se um ponto de código tem a propriedade White\_Space do Unicode
- [ctype\_space()](function.ctype-space.md) - Verifica se os caracteres são espaço em branco

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
