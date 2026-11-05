# Obtém o nome de um caractere Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.charname.php

---

# IntlChar::charName

(PHP 7, PHP 8)

IntlChar::charName — Obtém o nome de um caractere Unicode

### Descrição

public static function **IntlChar::charName**([int](language.types.integer.md)|[string](language.types.string.md) `$codepoint`, [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**): [?](language.types.null.md)[string](language.types.string.md)

Obtém o nome de um caractere Unicode.

Dependendo do parâmetro `type`, o nome resultante do caractere será o nome "moderno" ou o nome que
foi definido na versão 1.0 do Unicode. O nome contém apenas caracteres "invariantes" como A-Z, 0-9, espaço e '-'.
Nomes do Unicode 1.0 somente são obtidos se eles fores diferentes dos nomes modernos e se a ICU contiver dados para eles.

### Parâmetros

`codepoint`
:   O valor [int](language.types.integer.md) do ponto de código (por exemplo, `0x2603` para *U+2603 SNOWMAN*) ou o caractere codificado como uma [string](language.types.string.md) UTF-8 (por exemplo, `"\u{2603}"`).

`type`
:   Define qual o conjunto de nomes usado na pesquisa. Pode ser uma destas constantes:

    - **`IntlChar::UNICODE_CHAR_NAME`** (padrão)
    - **`IntlChar::UNICODE_10_CHAR_NAME`**
    - **`IntlChar::EXTENDED_CHAR_NAME`**
    - **`IntlChar::CHAR_NAME_ALIAS`**
    - **`IntlChar::CHAR_NAME_CHOICE_COUNT`**

### Valor Retornado

O nome correspondente, ou uma string vazia se não houver nome para este caractere,
ou **`null`** se não houver tal ponto de código.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php
var_dump(IntlChar::charName("."));
var_dump(IntlChar::charName(".", IntlChar::UNICODE_CHAR_NAME));
var_dump(IntlChar::charName("\u{2603}"));
var_dump(IntlChar::charName("\u{0000}"));
?>
```

O exemplo acima produzirá:

```
string(9) "FULL STOP"
string(9) "FULL STOP"
string(7) "SNOWMAN"
string(0) ""
```

### Veja também

- [IntlChar::charFromName()](intlchar.charfromname.md) - Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código
- [IntlChar::enumCharNames()](intlchar.enumcharnames.md) - Enumera todos os caracteres Unicode atribuídos dentro de um intervalo

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
