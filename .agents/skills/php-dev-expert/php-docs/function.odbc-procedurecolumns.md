# Recupera informações sobre parâmetros para procedimentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-procedurecolumns.php

---

# odbc\_procedurecolumns

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_procedurecolumns — Recupera informações sobre parâmetros para procedimentos

### Descrição

function **odbc\_procedurecolumns**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$procedure` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$column` = **`null`**  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Recupera informações sobre parâmetros para procedimentos.

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

`procedure`
:   O procedimento.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

`column`
:   A coluna.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

### Valor Retornado

Retorna a lista de parâmetros de entrada e saída, bem como as
colunas que compõem o conjunto de resultados dos procedimentos especificados.
Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `PROCEDURE_CAT`
- `PROCEDURE_SCHEM`
- `PROCEDURE_NAME`
- `COLUMN_NAME`
- `COLUMN_TYPE`
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

O conjunto de resultados é ordenado por `PROCEDURE_CAT`, `PROCEDURE_SCHEM`,
`PROCEDURE_NAME` e `COLUMN_TYPE`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | Antes desta versão, a função só podia ser chamada com um ou cinco argumentos. |

### Examples

**Exemplo #1 Lista colunas de um procedimento armazenado**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$columns = odbc_procedurecolumns($conn, 'TutorialDB', 'dbo', 'GetEmployeeSalesYTD;1', '%');
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
    [PROCEDURE_CAT] => TutorialDB
    [PROCEDURE_SCHEM] => dbo
    [PROCEDURE_NAME] => GetEmployeeSalesYTD;1
    [COLUMN_NAME] => @SalesPerson
    [COLUMN_TYPE] => 1
    [DATA_TYPE] => -9
    [TYPE_NAME] => nvarchar
    [COLUMN_SIZE] => 50
    [BUFFER_LENGTH] => 100
    [DECIMAL_DIGITS] =>
    [NUM_PREC_RADIX] =>
    [NULLABLE] => 1
    [REMARKS] =>
    [COLUMN_DEF] =>
    [SQL_DATA_TYPE] => -9
    [SQL_DATETIME_SUB] =>
    [CHAR_OCTET_LENGTH] => 100
    [ORDINAL_POSITION] => 1
    [IS_NULLABLE] => YES
)
```

### Veja também

- [odbc\_columns()](function.odbc-columns.md) - Lista os nomes das colunas nas tabelas especificadas

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
