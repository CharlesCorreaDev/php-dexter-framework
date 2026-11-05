# Recupera colunas especiais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-specialcolumns.php

---

# odbc\_specialcolumns

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_specialcolumns — Recupera colunas especiais

### Descrição

function **odbc\_specialcolumns**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [int](language.types.integer.md) `$type`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table`,  
    [int](language.types.integer.md) `$scope`,  
    [int](language.types.integer.md) `$nullable`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Recupera o conjunto ideal de colunas que identifica exclusivamente uma
linha na tabela ou colunas que são atualizadas automaticamente quando qualquer
valor na linha é atualizado por uma transação.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`type`
:   Quando o argumento de tipo é **`SQL_BEST_ROWID`**,
    **odbc\_specialcolumns()** retorna a
    coluna ou colunas que identificam exclusivamente cada linha na tabela.

    Quando o argumento de tipo é **`SQL_ROWVER`**,
    **odbc\_specialcolumns()** retorna a coluna ou colunas na
    tabela especificada, se houver, que são atualizadas automaticamente pela fonte de dados
    quando qualquer valor na linha é atualizado por qualquer transação.

`catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2).

`schema`
:   O esquema ('owner' na linguagem ODBC 2).

`table`
:   A tabela.

`scope`
:   O escopo, que ordena o conjunto de resultados.
    Uma das constantes **`SQL_SCOPE_CURROW`**, **`SQL_SCOPE_TRANSACTION`**
    ou **`SQL_SCOPE_SESSION`**.

`nullable`
:   Determina se colunas especiais que podem ter um valor NULL devem ser retornadas.
    Uma das constantes **`SQL_NO_NULLS`** ou **`SQL_NULLABLE`**.

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `SCOPE`
- `COLUMN_NAME`
- `DATA_TYPE`
- `TYPE_NAME`
- `COLUMN_SIZE`
- `BUFFER_LENGTH`
- `DECIMAL_DIGITS`
- `PSEUDO_COLUMN`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `SCOPE`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

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
