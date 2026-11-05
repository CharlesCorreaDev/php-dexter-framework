# Transforma o caractere Unicode em minúscula

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.tolower.php

---

# IntlChar::tolower

(PHP 7, PHP 8)

IntlChar::tolower — Transforma o caractere Unicode em minúscula

### Descrição

public static function **IntlChar::tolower**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

O caractere é mapeado para a sua letra minúscula equivalente.
Se o caractere não tiver minúscula equivalente, o caractere original em si é retornado.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o mapeamento do tipo Simple\_Lowercase\_Mapping do ponto de código, se houver;
caso contrário, o próprio ponto de código. Retorna **`null`** em caso de falha.

O tipo do retorno é [int](language.types.integer.md), a menos que o ponto de código tenha sido passado como uma [string](language.types.string.md) UTF-8, caso em que uma [string](language.types.string.md) é retornada. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::tolower("A"));
var_dump(IntlChar::tolower("a"));
var_dump(IntlChar::tolower("Φ"));
var_dump(IntlChar::tolower("φ"));
var_dump(IntlChar::tolower("1"));
var_dump(IntlChar::tolower(ord("A")));
var_dump(IntlChar::tolower(ord("a")));
?>
```

O exemplo acima produzirá:

```
string(1) "a"
string(1) "a"
string(2) "φ"
string(2) "φ"
string(1) "1"
int(97)
int(97)
```

### Veja também

- [IntlChar::totitle()](intlchar.totitle.md) - Transforma o caractere Unicode em letra de título
- [IntlChar::toupper()](intlchar.toupper.md) - Transforma um caractere Unicode em maiúscula
- [mb\_strtolower()](function.mb-strtolower.md) - Torna uma string minúscula

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
