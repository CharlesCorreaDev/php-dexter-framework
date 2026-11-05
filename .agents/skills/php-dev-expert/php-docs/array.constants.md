# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/array.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

**`CASE_LOWER`** ([int](language.types.integer.md))
:   **`CASE_LOWER`** é utilizada com a função
    [array\_change\_key\_case()](function.array-change-key-case.md) para converter
    chaves de arrays para minúsculas. É o valor padrão utilizado na função
    [array\_change\_key\_case()](function.array-change-key-case.md). A partir do PHP 8.2.0, somente caracteres ASCII
    são convertidos.

**`CASE_UPPER`** ([int](language.types.integer.md))
:   **`CASE_UPPER`** é utilizada com a função
    [array\_change\_key\_case()](function.array-change-key-case.md) para converter
    chaves de arrays para maiúsculas. A partir do PHP 8.2.0, somente caracteres ASCII
    são convertidos.

Opções de ordenação:

**`SORT_ASC`** ([int](language.types.integer.md))
:   **`SORT_ASC`** é utilizada com
    [array\_multisort()](function.array-multisort.md) para classificar em ordem crescente.

**`SORT_DESC`** ([int](language.types.integer.md))
:   **`SORT_DESC`** é utilizada com
    [array\_multisort()](function.array-multisort.md) para classificar em ordem decrescente.

Opções de tipos de ordenação: utilizadas por várias funções de ordenação

**`SORT_REGULAR`** ([int](language.types.integer.md))
:   **`SORT_REGULAR`** é utilizada para comparar itens normalmente.

**`SORT_NUMERIC`** ([int](language.types.integer.md))
:   **`SORT_NUMERIC`** é utilizada para comparar itens numericamente.

**`SORT_STRING`** ([int](language.types.integer.md))
:   **`SORT_STRING`** é utilizada para comparar itens como strings.

**`SORT_LOCALE_STRING`** ([int](language.types.integer.md))
:   **`SORT_LOCALE_STRING`** é utilizada para comparar itens como
    strings, baseado na localidade atual.

**`SORT_NATURAL`** ([int](language.types.integer.md))
:   **`SORT_NATURAL`** é utilizada para comparar itens como
    strings utilizando a "ordenação natural", como a função [natsort()](function.natsort.md).

**`SORT_FLAG_CASE`** ([int](language.types.integer.md))
:   **`SORT_FLAG_CASE`** pode ser combinada (operador OR binário) com
    **`SORT_STRING`** ou **`SORT_NATURAL`** para
    ordenar strings de forma insensível a miúsculas/minúsculas. A partir do PHP 8.2.0, somente a redução de todas as letras ASCII a maiúsculas ou minúsculas
    será feita.

Opções de filtro:

**`ARRAY_FILTER_USE_KEY`** ([int](language.types.integer.md))
:   **`ARRAY_FILTER_USE_KEY`** é utilizada com a função
    [array\_filter()](function.array-filter.md) para passar cada chave como primeiro argumento de uma função de retorno informada.

**`ARRAY_FILTER_USE_BOTH`** ([int](language.types.integer.md))
:   **`ARRAY_FILTER_USE_BOTH`** é utilizada com a função
    [array\_filter()](function.array-filter.md) para passar chave e valor para a função de retorno informada.

**`COUNT_NORMAL`** ([int](language.types.integer.md))

**`COUNT_RECURSIVE`** ([int](language.types.integer.md))

**`EXTR_OVERWRITE`** ([int](language.types.integer.md))

**`EXTR_SKIP`** ([int](language.types.integer.md))

**`EXTR_PREFIX_SAME`** ([int](language.types.integer.md))

**`EXTR_PREFIX_ALL`** ([int](language.types.integer.md))

**`EXTR_PREFIX_INVALID`** ([int](language.types.integer.md))

**`EXTR_PREFIX_IF_EXISTS`** ([int](language.types.integer.md))

**`EXTR_IF_EXISTS`** ([int](language.types.integer.md))

**`EXTR_REFS`** ([int](language.types.integer.md))

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
