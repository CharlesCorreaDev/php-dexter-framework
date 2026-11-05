# Verifica se um ponto de código é um caractere "vazio" ou um "espaço horizontal"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isblank.php

---

# IntlChar::isblank

(PHP 7, PHP 8)

IntlChar::isblank — Verifica se um ponto de código é um caractere "vazio" ou um "espaço horizontal"

### Descrição

public static function **IntlChar::isblank**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um "vazio" ou um "espaço horizontal", um caractere que visivelmente separa palavras em uma linha.

As definições a seguir são equivalentes:

- **`true`** para caracteres Unicode White\_Space (espaço em branco) exceto para "controles de espaço vertical" que são
  os seguintes caracteres: U+000A (LF), U+000B (VT), U+000C (FF), U+000D (CR), U+0085 (NEL), U+2028 (LS) e U+2029 (PS)
- **`true`** para U+0009 (TAB) e caracteres com categoria geral "Zs" (separadores de espaço) exceto o Espaço de Largura Zero (ZWSP, U+200B).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere "vazio" ou de "espaço horizontal", **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isblank("A"));
var_dump(IntlChar::isblank(" "));
var_dump(IntlChar::isblank("\t"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::isspace()](intlchar.isspace.md) - Verifica se um ponto de código é um caractere de espaçamento
- [IntlChar::isJavaSpaceChar()](intlchar.isjavaspacechar.md) - Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
- [IntlChar::isUWhiteSpace()](intlchar.isuwhitespace.md) - Verifica se um ponto de código tem a propriedade White\_Space do Unicode
- [IntlChar::isWhitespace()](intlchar.iswhitespace.md) - Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU

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
