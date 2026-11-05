# Verifica se o ponto de código é um código de controle ISO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.isisocontrol.php

---

# IntlChar::isISOControl

(PHP 7, PHP 8)

IntlChar::isISOControl — Verifica se o ponto de código é um código de controle ISO

### Descrição

public static function **IntlChar::isISOControl**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[bool](language.types.boolean.md)

Determina se o ponto de código especificado é um código de controle ISO.

**`true`** para U+0000..U+001f e U+007f..U+009f (categoria geral "Cc").

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna **`true`** se
`codepoint` for um código de controle ISO, **`false`** se não for. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::isISOControl(" "));
var_dump(IntlChar::isISOControl("\n"));
var_dump(IntlChar::isISOControl("\u{200e}"));
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
bool(false)
```

### Veja também

- [IntlChar::iscntrl()](intlchar.iscntrl.md) - Verifica se um ponto de código é um caractere de controle

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
