# Lista tabelas e os privilégios associados a cada tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-tableprivileges.php

---

# odbc\_tableprivileges

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_tableprivileges — Lista tabelas e os privilégios associados a cada tabela

### Descrição

function **odbc\_tableprivileges**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Lista tabelas no intervalo solicitado e os privilégios associados
a cada tabela.

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

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `GRANTOR`
- `GRANTEE`
- `PRIVILEGE`
- `IS_GRANTABLE`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `TABLE_CAT`, `TABLE_SCHEM`,
`TABLE_NAME`, `PRIVILEGE` e `GRANTEE`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Listando privilégios de uma tabela**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$privileges = odbc_tableprivileges($conn, 'SalesOrders', 'dbo', 'Orders');
while (($row = odbc_fetch_array($privileges))) {
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
    [GRANTOR] => dbo
    [GRANTEE] => dbo
    [PRIVILEGE] => DELETE
    [IS_GRANTABLE] => YES
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
