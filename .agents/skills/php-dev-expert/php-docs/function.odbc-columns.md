# Lista os nomes das colunas nas tabelas especificadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-columns.php

---

# odbc\_columns

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_columns — Lista os nomes das colunas nas tabelas especificadas

### Descrição

function **odbc\_columns**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$column` = **`null`**  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Lista todas as colunas no intervalo solicitado.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2).

`schema`
:   O esquema ('owner' na linguagem ODBC 2).
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

`table`
:   O nome da tabela.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

`column`
:   O nome da coluna.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `COLUMN_NAME`
- `DATA_TYPE`
- `TYPE_NAME`
- `COLUMN_SIZE`
- `BUFFER_LENGTH`
- `DECIMAL_DIGITS`
- `NUM_PREC_RADIX`
- `NULLABLE`
- `REMARKS`
- `COLUMN_DEF`
- `SQL_DATA_TYPE`
- `SQL_DATETIME_SUB`
- `CHAR_OCTET_LENGTH`
- `ORDINAL_POSITION`
- `IS_NULLABLE`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `TABLE_CAT`, `TABLE_SCHEM`,
`TABLE_NAME` e `ORDINAL_POSITION`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.0.0 | `schema`, `table` e `column` agora podem ser nulos. |

### Examples

**Exemplo #1 Listando colunas de uma tabela**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$columns = odbc_columns($conn, 'TutorialDB', 'dbo', 'test', '%');
while (($row = odbc_fetch_array($columns))) {
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
    [COLUMN_NAME] => id
    [DATA_TYPE] => 4
    [TYPE_NAME] => int
    [COLUMN_SIZE] => 10
    [BUFFER_LENGTH] => 4
    [DECIMAL_DIGITS] => 0
    [NUM_PREC_RADIX] => 10
    [NULLABLE] => 0
    [REMARKS] =>
    [COLUMN_DEF] =>
    [SQL_DATA_TYPE] => 4
    [SQL_DATETIME_SUB] =>
    [CHAR_OCTET_LENGTH] =>
    [ORDINAL_POSITION] => 1
    [IS_NULLABLE] => NO
)
```

### Veja também

- [odbc\_columnprivileges()](function.odbc-columnprivileges.md) - Lista colunas e privilégios associados para a tabela fornecida
- [odbc\_procedurecolumns()](function.odbc-procedurecolumns.md) - Recupera informações sobre parâmetros para procedimentos

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
