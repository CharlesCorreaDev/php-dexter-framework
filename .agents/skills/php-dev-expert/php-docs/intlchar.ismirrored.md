# Verifica se um ponto de código tem a propriedade Bidi_Mirrored

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.ismirrored.php

---

# IntlChar::isMirrored

(PHP 7, PHP 8)

IntlChar::isMirrored — Verifica se um ponto de código tem a propriedade Bidi\_Mirrored

### Descrição

public static function **IntlChar::isMirrored**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código têm a propriedade Bidi\_Mirrored (espelhado bidirecional).

Esta propriedade é definida para caracteres que são normalmente usados em contextos da direita para a esquerda e precisam ser mostrados com um glifo "espelhado".

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` tiver a propriedade Bidi\_Mirrored, **`false`** se não tiver. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isMirrored("A"));
var_dump(IntlChar::isMirrored("<"));
var_dump(IntlChar::isMirrored("("));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(true)
```

### Veja também

- [IntlChar::charMirror()](intlchar.charmirror.md) - Obtém o caractere "espelho" para um ponto de código
- **`IntlChar::PROPERTY_BIDI_MIRRORED`**

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
