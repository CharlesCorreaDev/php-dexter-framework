# Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.charfromname.php

---

# IntlChar::charFromName

(PHP 7, PHP 8)

IntlChar::charFromName — Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código

### Descrição

public static function **IntlChar::charFromName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**): [?](language.types.null.md)[int](language.types.integer.md)

Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código.

O nome deve corresponder de forma exata e completa. Se o nome não corresponder a um ponto de código, **`null`** é retornado.

Um nome Unicode 1.0 é correspondido somente se ele for diferente do nome moderno.
Os nomes Unicode são todos em letras maiúsculas. Nomes estendidos são em letras minúsculas seguidos por um
hífen seguido por um número hexadecimal em maiúsculas, e dentro de colchetes
angulares.

### Parâmetros

`name`
:   Nome completo do caractere Unicode.

`type`
:   Informa qual deve ser o conjunto de nomes usados na pesquisa. Pode ser uma destas constantes:

    - **`IntlChar::UNICODE_CHAR_NAME`** (padrão)
    - **`IntlChar::UNICODE_10_CHAR_NAME`**
    - **`IntlChar::EXTENDED_CHAR_NAME`**
    - **`IntlChar::CHAR_NAME_ALIAS`**
    - **`IntlChar::CHAR_NAME_CHOICE_COUNT`**

### Valor Retornado

O valor Unicode do ponto de código do nome fornecido (como um [int](language.types.integer.md)), ou **`null`** se não houver tal ponto de código.

### Examples

**Exemplo #1 Testando diferentes pontos de código**

```
<?php

var_dump(IntlChar::charFromName("LATIN CAPITAL LETTER A"));
var_dump(IntlChar::charFromName("SNOWMAN"));
var_dump(IntlChar::charFromName("RECYCLING SYMBOL FOR TYPE-1 PLASTICS"));
var_dump(IntlChar::charFromName("UM TEXTO ALEATÓRIO QUE NÃO CORRESPONDE A NENHUM CARACTERE UNICODE"));

var_dump(IntlChar::charFromName("<control-08>", IntlChar::EXTENDED_CHAR_NAME));

?>
```

O exemplo acima produzirá:

```
int(65)
int(9731)
int(9843)
NULL
int(8)
```

### Veja também

- [IntlChar::charName()](intlchar.charname.md) - Obtém o nome de um caractere Unicode
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
