# Recupera estatísticas sobre uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-statistics.php

---

# odbc\_statistics

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_statistics — Recupera estatísticas sobre uma tabela

### Descrição

function **odbc\_statistics**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table`,  
    [int](language.types.integer.md) `$unique`,  
    [int](language.types.integer.md) `$accuracy`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Obtém estatísticas sobre uma tabela e seus índices.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2).

`schema`
:   O esquema ('owner' na linguagem ODBC 2).

`table`
:   O nome da tabela.

`unique`
:   O tipo do índice.
    Uma das constantes **`SQL_INDEX_UNIQUE`** ou **`SQL_INDEX_ALL`**.

`accuracy`
:   Uma das constantes **`SQL_ENSURE`** ou **`SQL_QUICK`**.
    Esta última solicita que o driver recupere `CARDINALITY` e
    `PAGES` somente se eles estiverem prontamente disponíveis no servidor.

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `NON_UNIQUE`
- `INDEX_QUALIFIER`
- `INDEX_NAME`
- `TYPE`
- `ORDINAL_POSITION`
- `COLUMN_NAME`
- `ASC_OR_DESC`
- `CARDINALITY`
- `PAGES`
- `FILTER_CONDITION`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `NON_UNIQUE`, `TYPE`, `INDEX_QUALIFIER`,
`INDEX_NAME` e `ORDINAL_POSITION`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Listando estatísticas de uma tabela**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$statistics = odbc_statistics($conn, 'TutorialDB', 'dbo', 'TEST', SQL_INDEX_UNIQUE, SQL_QUICK);
while (($row = odbc_fetch_array($statistics))) {
    print_r($row);
    break; // outras linhas omitidas por questões de brevidade
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [TABLE_CAT] => TutorialDB
    [TABLE_SCHEM] => dbo
    [TABLE_NAME] => TEST
    [NON_UNIQUE] =>
    [INDEX_QUALIFIER] =>
    [INDEX_NAME] =>
    [TYPE] => 0
    [ORDINAL_POSITION] =>
    [COLUMN_NAME] =>
    [ASC_OR_DESC] =>
    [CARDINALITY] => 15
    [PAGES] => 3
    [FILTER_CONDITION] =>
)
```

### Veja também

- [odbc\_tables()](function.odbc-tables.md) - Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica

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
