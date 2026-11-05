# Lista colunas e privilégios associados para a tabela fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-columnprivileges.php

---

# odbc\_columnprivileges

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_columnprivileges — Lista colunas e privilégios associados para a tabela fornecida

### Descrição

function **odbc\_columnprivileges**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table`,  
    [string](language.types.string.md) `$column`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Lista colunas e privilégios associados para a tabela fornecida.

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
Este objeto de resultado pode ser usado para buscar uma lista de colunas e
privilégios associados.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `COLUMN_NAME`
- `GRANTOR`
- `GRANTEE`
- `PRIVILEGE`
- `IS_GRANTABLE`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `TABLE_CAT`, `TABLE_SCHEM`,
`TABLE_NAME`, `COLUMN_NAME` e `PRIVILEGE`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Listando privilégios para uma coluna**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$privileges = odbc_columnprivileges($conn, 'TutorialDB', 'dbo', 'test', 'id');
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
    [TABLE_CAT] => TutorialDB
    [TABLE_SCHEM] => dbo
    [TABLE_NAME] => test
    [COLUMN_NAME] => id
    [GRANTOR] => dbo
    [GRANTEE] => dbo
    [PRIVILEGE] => INSERT
    [IS_GRANTABLE] => YES
)
```

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
