# Transforma o caractere Unicode em letra de título

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.totitle.php

---

# IntlChar::totitle

(PHP 7, PHP 8)

IntlChar::totitle — Transforma o caractere Unicode em letra de título

### Descrição

public static function **IntlChar::totitle**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`): [int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md)

O caractere informado é mapeado para seu equivalente em letra de título.
Se o caractere não tiver letra de título equivalente, o caractere original em si é retornado.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

### Valor Retornado

Retorna o mapeamento Simple\_Titlecase\_Mapping do ponto de código, se houver;
caso contrário, o próprio ponto de código. Retorna **`null`** em caso de falha.

O tipo do retorno é [int](language.types.integer.md), a menos que o ponto de código tenha sido passado como uma [string](language.types.string.md) UTF-8, caso em que uma [string](language.types.string.md) é retornada. Retorna **`null`** em caso de falha.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::totitle("Ǆ"));
var_dump(IntlChar::totitle("ǆ"));
var_dump(IntlChar::totitle("Φ"));
var_dump(IntlChar::totitle("φ"));
var_dump(IntlChar::totitle("1"));
var_dump(IntlChar::totitle("ᾳ"));
var_dump(IntlChar::totitle(ord("A")));
?>
```

O exemplo acima produzirá:

```
string(1) "ǅ"
string(1) "ǅ"
string(2) "Φ"
string(2) "φ"
string(1) "1"
string(1) "ᾼ"
int(65)
```

### Veja também

- [IntlChar::tolower()](intlchar.tolower.md) - Transforma o caractere Unicode em minúscula
- [IntlChar::toupper()](intlchar.toupper.md) - Transforma um caractere Unicode em maiúscula
- [IntlChar::istitle()](intlchar.istitle.md) - Verifica se um ponto de código é uma letra com grafia mista
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string

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
