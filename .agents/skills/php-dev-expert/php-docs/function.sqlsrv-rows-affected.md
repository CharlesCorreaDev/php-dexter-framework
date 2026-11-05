# Retorna o número de linhas modificadas pela última consulta INSERT, UPDATE ou
  DELETE executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-rows-affected.php

---

# sqlsrv\_rows\_affected

(No version information available, might only be in Git)

sqlsrv\_rows\_affected — Retorna o número de linhas modificadas pela última consulta INSERT, UPDATE ou
DELETE executada

### Descrição

function **sqlsrv\_rows\_affected**([resource](language.types.resource.md) `$stmt`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número de linhas modificadas pela última consulta INSERT, UPDATE ou DELETE
executada. Para informações sobre o número de linhas retornadas por uma consulta SELECT,
consulte [sqlsrv\_num\_rows()](function.sqlsrv-num-rows.md).

### Parâmetros

`stmt`
:   O recurso da instrução executada para o qual o número de linhas afetadas é retornado.

### Valor Retornado

Retorna o número de linhas afetadas pela última consulta INSERT, UPDATE ou DELETE.
Se nenhuma linha foi afetada, 0 é retornado. Se o número de linhas afetadas não puder
ser determinado, -1 é retornado. Se ocorreu um erro, **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_rows\_affected()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "UPDATE Table_1 SET data = ? WHERE id = ?";

$params = array("updated data", 1);

$stmt = sqlsrv_query( $conn, $sql, $params);

$rows_affected = sqlsrv_rows_affected( $stmt);
if( $rows_affected === false) {
     die( print_r( sqlsrv_errors(), true));
} elseif( $rows_affected == -1) {
      echo "Nenhuma informação disponível.<br>";
} else {
      echo $rows_affected." linhas foram atualizadas.<br>";
}
?>
```

### Veja também

- [sqlsrv\_num\_rows()](function.sqlsrv-num-rows.md) - Recupera o número de linhas em um conjunto de resultados

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
