# Repete uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-repeat.php

---

# str\_repeat

(PHP 4, PHP 5, PHP 7, PHP 8)

str\_repeat — Repete uma string

### Descrição

function **str\_repeat**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$times`): [string](language.types.string.md)

Retorna a `string` repetida
pelo número de vezes definido em `times`.

### Parâmetros

`string`
:   A string a ser repetida.

`times`
:   Número de vezes que a `string` será
    repetida.

    `times` deve ser maior ou igual a 0.
    Se o parâmetro `times` for 0, a função
    irá retornar uma string vazia.

### Valor Retornado

Retorna a string repetida.

### Examples

**Exemplo #1 Exemplo de **str\_repeat()****

```
<?php
echo str_repeat("-=", 10);
?>
```

O exemplo acima produzirá:

```
-=-=-=-=-=-=-=-=-=-=
```

### Veja também

- [for](control-structures.for.md)
- [str\_pad()](function.str-pad.md) - Preenche uma string até um determinado comprimento com outra string
- [substr\_count()](function.substr-count.md) - Conta o número de ocorrências de uma substring

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
