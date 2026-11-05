# Verifica se um ponto de código é um caractere de pontuação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.ispunct.php

---

# IntlChar::ispunct

(PHP 7, PHP 8)

IntlChar::ispunct — Verifica se um ponto de código é um caractere de pontuação

### Descrição

public static function **IntlChar::ispunct**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um caractere de pontuação.

**`true`** para caracteres com categoria geral "P" (pontuação).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um caractere de pontuação, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::ispunct("."));
var_dump(IntlChar::ispunct(","));
var_dump(IntlChar::ispunct("\n"));
var_dump(IntlChar::ispunct("$"));
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
bool(false)
```

### Veja também

- [ctype\_punct()](function.ctype-punct.md) - Verifica se é um caractere imprimível que não é um caractere de espaço ou
  alfanumério

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
