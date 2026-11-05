# Retorna o valor do ponto de código Unicode do caractere

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.ord.php

---

# IntlChar::ord

(PHP 7, PHP 8)

IntlChar::ord — Retorna o valor do ponto de código Unicode do caractere

### Descrição

public static function **IntlChar::ord**([int](language.types.integer.md)|[string](language.types.string.md) `$character`): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o valor do ponto de código Unicode do caractere fornecido.

Esta função é complementar à [IntlChar::chr()](intlchar.chr.md).

### Parâmetros

`character`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o valor do ponto de código Unicode como um inteiro.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::ord("A"));
var_dump(IntlChar::ord(" "));
var_dump(IntlChar::ord("\u{2603}"));
?>
```

O exemplo acima produzirá:

```
int(65)
int(32)
int(9731)
```

### Veja também

- [IntlChar::chr()](intlchar.chr.md) - Retorna um caractere Unicode por valor de ponto de código
- [mb\_ord()](function.mb-ord.md) - Obtém o ponto de código Unicode do caractere
- [ord()](function.ord.md) - Converte o primeiro byte de uma string para um valor entre 0 e 255

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
