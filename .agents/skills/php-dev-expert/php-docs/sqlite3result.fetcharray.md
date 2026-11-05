# Obtém uma linha de resultado como um array associativo, numericamente indexado ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3result.fetcharray.php

---

# SQLite3Result::fetchArray

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Result::fetchArray — 
Obtém uma linha de resultado como um array associativo, numericamente indexado ou ambos

### Descrição

public function **SQLite3Result::fetchArray**([int](language.types.integer.md) `$mode` = **`SQLITE3_BOTH`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém uma linha de resultado como um array associativo, numericamente indexado ou ambos.
Por padrão, obtém como ambos.

### Parâmetros

`mode`
:   Controla como a próxima linha será retornada ao chamador. Este valor
    deve ser um dos seguintes: **`SQLITE3_ASSOC`**,
    **`SQLITE3_NUM`** ou **`SQLITE3_BOTH`**.

    - **`SQLITE3_ASSOC`**: retorna um array indexado pelo nome da coluna conforme
      retornado no conjunto de resultados correspondente
    - **`SQLITE3_NUM`**: retorna um array indexado pelo número da coluna conforme
      retornado no conjunto de resultados correspondente, começando na
      coluna 0
    - **`SQLITE3_BOTH`**: retorna um array indexado tanto pelo nome da coluna quanto
      pelo número da coluna conforme retornado no conjunto de resultados correspondente,
      começando na coluna 0

### Valor Retornado

Retorna uma linha de resultado como um array associativo, numericamente indexado ou ambos.
Alternativamente, retornará **`false`** se não houver mais linhas.

Os tipos dos valores do array retornado são mapeados a partir dos tipos SQLite3
como segue: inteiros são mapeados para [int](language.types.integer.md) se estiverem dentro do
intervalo **`PHP_INT_MIN`**..**`PHP_INT_MAX`**, e
para [string](language.types.string.md) caso contrário. Floats são mapeados para [float](language.types.float.md),
valores `NULL` são mapeados para [null](language.types.null.md), e strings
e blobs são mapeados para [string](language.types.string.md).

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
