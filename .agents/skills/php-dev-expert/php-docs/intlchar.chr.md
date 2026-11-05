# Retorna um caractere Unicode por valor de ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.chr.php

---

# IntlChar::chr

(PHP 7, PHP 8)

IntlChar::chr — Retorna um caractere Unicode por valor de ponto de código

### Descrição

public static function **IntlChar::chr**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [?](language.types.null.md)[string](language.types.string.md)

Retorna uma string contendo o caractere especificado pelo valor de ponto de código Unicode.

Este método é complementar ao método [IntlChar::ord()](intlchar.ord.md).

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Uma string contendo o caractere único especificado pelo valor de ponto de código, ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
$values = ["A", 63, 123, 9731];
foreach ($values as $value) {
    var_dump(IntlChar::chr($value));
}
?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) "?"
string(1) "{"
string(3) "☃"
```

### Veja também

- [IntlChar::ord()](intlchar.ord.md) - Retorna o valor do ponto de código Unicode do caractere
- [mb\_chr()](function.mb-chr.md) - Retorna um caractere pelo valor do ponto de código Unicode
- [chr()](function.chr.md) - Gera uma string de um byte a partir de um número

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
