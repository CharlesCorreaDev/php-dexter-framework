# Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-tables.php

---

# odbc\_tables

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_tables — Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica

### Descrição

function **odbc\_tables**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$table` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$types` = **`null`**  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Lista todas as tabelas no intervalo solicitado.

Para suportar a enumeração de qualificadores, proprietários e tipos de tabela,
a seguinte semântica especial para
`catalog`, `schema`,
`table` e
`table_type` estão disponíveis:

- Se `catalog` for um caractere único de
  porcentagem (%) e `schema` e
  `table` forem strings vazias, o conjunto de
  resultados conterá uma lista de qualificadores válidos para a fonte de
  dados. (Todas as colunas, exceto a coluna TABLE\_QUALIFIER, contêm
  NULLs.)
- Se `schema` for um caractere único de porcentagem
  (%) e `catalog` e
  `table` forem strings vazias, então o conjunto
  de resultados conterá uma lista de proprietários válidos para a fonte de dados. (Todas
  as colunas, exceto a coluna TABLE\_OWNER, contêm
  NULLs.)
- Se `table_type` for um caractere único de
  porcentagem (%) e `catalog`,
  `schema` e `table`
  forem strings vazias, então o conjunto de resultados contém uma lista de
  tipos de tabela válidos para a fonte de dados. (Todas as colunas, exceto a
  coluna TABLE\_TYPE, contêm NULLs.)

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
:   O nome.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

`types`
:   Se `table_type` não for uma string vazia, este parâmetro
    deverá conter uma lista de valores separados por vírgula para os tipos de
    interesse; cada valor pode ser colocado entre aspas simples (`'`) ou
    sem aspas. Por exemplo, `'TABLE','VIEW'` ou `TABLE, VIEW`. Se a
    fonte de dados não suportar um tipo de tabela especificado,
    **odbc\_tables()** não retornará nenhum resultado para
    esse tipo.

### Valor Retornado

Retorna um objeto de resultado ODBC contendo as informações
ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `TABLE_TYPE`
- `REMARKS`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `TABLE_TYPE`, `TABLE_CAT`,
`TABLE_SCHEM` e `TABLE_NAME`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | `schema`, `table` e `types` agora podem ser nulos. |

### Examples

**Exemplo #1 Listando tabelas em um catálogo**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$tables = odbc_tables($conn, 'SalesOrders', 'dbo', '%', 'TABLE');
while (($row = odbc_fetch_array($tables))) {
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
    [TABLE_CAT] => SalesOrders
    [TABLE_SCHEM] => dbo
    [TABLE_NAME] => Orders
    [TABLE_TYPE] => TABLE
    [REMARKS] =>
)
```

### Veja também

- [odbc\_tableprivileges()](function.odbc-tableprivileges.md) - Lista tabelas e os privilégios associados a cada tabela
- [odbc\_columns()](function.odbc-columns.md) - Lista os nomes das colunas nas tabelas especificadas
- [odbc\_specialcolumns()](function.odbc-specialcolumns.md) - Recupera colunas especiais
- [odbc\_statistics()](function.odbc-statistics.md) - Recupera estatísticas sobre uma tabela
- [odbc\_procedures()](function.odbc-procedures.md) - Obtém a lista de procedimentos armazenados em uma fonte de dados específica

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
