# Transforma um caractere Unicode em maiúscula

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.toupper.php

---

# IntlChar::toupper

(PHP 7, PHP 8)

IntlChar::toupper — Transforma um caractere Unicode em maiúscula

### Descrição

public static function **IntlChar::toupper**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

O caractere fornecido é mapeado para seu equivalente maiúsculo.
Se o caractere não tiver equivalente maiúsculo, o próprio caractere é retornado.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o mapeamento Simple\_Uppercase\_Mapping do ponto de código, se houver;
caso contrário o próprio ponto de código.

O tipo do retorno é [int](language.types.integer.md), a menos que o ponto de código tenha sido passado como uma [string](language.types.string.md) UTF-8, caso em que uma [string](language.types.string.md) é retornada. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::toupper("A"));
var_dump(IntlChar::toupper("a"));
var_dump(IntlChar::toupper("Φ"));
var_dump(IntlChar::toupper("φ"));
var_dump(IntlChar::toupper("1"));
var_dump(IntlChar::toupper(ord("A")));
var_dump(IntlChar::toupper(ord("a")));
?>
```

O exemplo acima produzirá:

```
string(1) "A"
string(1) "A"
string(2) "Φ"
string(2) "Φ"
string(1) "1"
int(65)
int(65)
```

### Veja também

- [IntlChar::tolower()](intlchar.tolower.md) - Transforma o caractere Unicode em minúscula
- [IntlChar::totitle()](intlchar.totitle.md) - Transforma o caractere Unicode em letra de título
- [mb\_strtoupper()](function.mb-strtoupper.md) - Faz uma string ficar em maiúsculas

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
