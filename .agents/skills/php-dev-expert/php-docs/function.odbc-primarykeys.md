# Obtém as chaves primárias de uma tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-primarykeys.php

---

# odbc\_primarykeys

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_primarykeys — Obtém as chaves primárias de uma tabela

### Descrição

function **odbc\_primarykeys**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog`,  
    [string](language.types.string.md) `$schema`,  
    [string](language.types.string.md) `$table`  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Retorna um objeto de resultado que pode ser usado para buscar os nomes das colunas
que compõem a chave primária de uma tabela.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2).

`schema`
:   O esquema ('owner' na linguagem ODBC 2).

`table`

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `TABLE_CAT`
- `TABLE_SCHEM`
- `TABLE_NAME`
- `COLUMN_NAME`
- `KEY_SEQ`
- `PK_NAME`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `TABLE_CAT`, `TABLE_SCHEM`,
`TABLE_NAME` e `KEY_SEQ`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Lista as chaves primárias de uma coluna**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$primarykeys = odbc_primarykeys($conn, 'TutorialDB', 'dbo', 'TEST');
while (($row = odbc_fetch_array($primarykeys))) {
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
    [KEY_SEQ] => 1
    [PK_NAME] => PK__TEST__3213E83FE141F843
)
```

### Veja também

- [odbc\_tables()](function.odbc-tables.md) - Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica
- [odbc\_foreignkeys()](function.odbc-foreignkeys.md) - Recupera uma lista de chaves estrangeiras

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
