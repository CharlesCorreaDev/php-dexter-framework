# Recupera uma lista de chaves estrangeiras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-foreignkeys.php

---

# odbc\_foreignkeys

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_foreignkeys — Recupera uma lista de chaves estrangeiras

### Descrição

function **odbc\_foreignkeys**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$pk_catalog`,  
    [string](language.types.string.md) `$pk_schema`,  
    [string](language.types.string.md) `$pk_table`,  
    [string](language.types.string.md) `$fk_catalog`,  
    [string](language.types.string.md) `$fk_schema`,  
    [string](language.types.string.md) `$fk_table`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Recupera uma lista de chaves estrangeiras na tabela especificada ou uma lista de
chaves estrangeiras em outras tabelas que se referem à chave primária na
tabela especificada.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`pk_catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2) da tabela da chave primária.

`pk_schema`
:   O esquema ('owner' no jargão do ODBC 2) da tabela da chave primária.

`pk_table`
:   A tabela de chave primária.

`fk_catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2) da tabela da chave estrangeira.

`fk_schema`
:   O esquema ('owner' no jargão do ODBC 2) da tabela da chave estrangeira.

`fk_table`
:   A tabela da chave estrangeira.

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `PKTABLE_CAT`
- `PKTABLE_SCHEM`
- `PKTABLE_NAME`
- `PKCOLUMN_NAME`
- `FKTABLE_CAT`
- `FKTABLE_SCHEM`
- `FKTABLE_NAME`
- `FKCOLUMN_NAME`
- `KEY_SEQ`
- `UPDATE_RULE`
- `DELETE_RULE`
- `FK_NAME`
- `PK_NAME`
- `DEFERRABILITY`

Drivers podem listar colunas adicionais.

Se as chaves estrangeiras associadas a uma chave primária forem solicitadas, o conjunto de resultados
será ordenado por `FKTABLE_CAT`, `FKTABLE_SCHEM`,
`FKTABLE_NAME` e `KEY_SEQ`.
Se as chaves primárias associadas a uma chave estrangeira forem solicitadas, o conjunto de resultados
será ordenado por `PKTABLE_CAT`, `PKTABLE_SCHEM`,
`PKTABLE_NAME` e `KEY_SEQ`.

Se `pk_table` contiver um nome de tabela,
**odbc\_foreignkeys()** retornará um conjunto de resultados
contendo a chave primária da tabela especificada e todas as
chaves estrangeiras que se referem a ela.

Se `fk_table` contiver um nome de tabela,
**odbc\_foreignkeys()** retornará um conjunto de resultados
contendo todas as chaves estrangeiras na tabela especificada e as
chaves primárias (em outras tabelas) às quais elas se referem.

Se ambos `pk_table` e
`fk_table` contiverem nomes de tabelas,
**odbc\_foreignkeys()** retornará as chaves estrangeiras na
tabela especificada em `fk_table` que se referem
à chave primária da tabela especificada em
`pk_table`. Esta deve ser uma chave no máximo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Veja também

- [odbc\_tables()](function.odbc-tables.md) - Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica
- [odbc\_primarykeys()](function.odbc-primarykeys.md) - Obtém as chaves primárias de uma tabela

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
