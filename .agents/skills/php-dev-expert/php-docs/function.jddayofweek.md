# Retorna o dia da semana de um dia Juliano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jddayofweek.php

---

# jddayofweek

(PHP 4, PHP 5, PHP 7, PHP 8)

jddayofweek — Retorna o dia da semana de um dia Juliano

### Descrição

function **jddayofweek**([int](language.types.integer.md) `$julian_day`, [int](language.types.integer.md) `$mode` = **`CAL_DOW_DAYNO`**): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o dia da semana de um dia Juliano. Pode retornar uma string ou um inteiro
dependendo do modo.

### Parâmetros

`julian_day`
:   Um número inteiro do dia Juliano

`mode`
:   **Modos de semana do calendário**

    | Modo | Significado |
    | --- | --- |
    | 0 (Padrão) | Retorna o número do dia como um int (0=domingo, 1=segunda, etc) |
    | 1 | Retorna uma string contendo o dia de semana (Inglês-Gregoriano) |
    | 2 | Retorna uma string contendo o dia da semana abreviado (Inglês-Gregoriano) |

### Valor Retornado

O dia da semana gregoriano como um inteiro ou uma string.

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
