# Indica se a declaração especificada possui linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-has-rows.php

---

# sqlsrv\_has\_rows

(No version information available, might only be in Git)

sqlsrv\_has\_rows — Indica se a declaração especificada possui linhas

### Descrição

function **sqlsrv\_has\_rows**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Indica se a declaração especificada possui linhas.

### Parâmetros

`stmt`
:   Um recurso de declaração retornado por [sqlsrv\_query()](function.sqlsrv-query.md) ou
    [sqlsrv\_execute()](function.sqlsrv-execute.md).

### Valor Retornado

Retorna **`true`** se a declaração especificada tiver linhas e **`false`** se a declaração
não tiver linhas ou se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_has\_rows()****

```
<?php
$server = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password" );
$conn = sqlsrv_connect( $server, $connectionInfo );

$stmt = sqlsrv_query( $conn, "SELECT * FROM Table_1");

if ($stmt) {
   $rows = sqlsrv_has_rows( $stmt );
   if ($rows === true)
      echo "There are rows. <br />";
   else
      echo "There are no rows. <br />";
}
?>
```

### Veja também

- [sqlsrv\_num\_rows()](function.sqlsrv-num-rows.md) - Recupera o número de linhas em um conjunto de resultados
- [sqlsrv\_query()](function.sqlsrv-query.md) - Prepara e executa uma consulta

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
