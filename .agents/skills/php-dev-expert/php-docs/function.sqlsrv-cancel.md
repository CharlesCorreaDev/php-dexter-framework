# Cancela uma declaração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-cancel.php

---

# sqlsrv\_cancel

(No version information available, might only be in Git)

sqlsrv\_cancel — Cancela uma declaração

### Descrição

function **sqlsrv\_cancel**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Cancela uma declaração. Quaisquer resultados associados à declaração que não
tenham sido consumidos são excluídos. Depois que **sqlsrv\_cancel()** for
chamado, a declaração especificada pode ser reexecutada se tiver sido criada com
[sqlsrv\_prepare()](function.sqlsrv-prepare.md). Chamar **sqlsrv\_cancel()**
não é necessário se todos os resultados associados à declaração tiverem sido
consumidos.

### Parâmetros

`stmt`
:   O recurso de declaração a ser cancelado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_cancel()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array("Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) {
     die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT Sales FROM Table_1";

$stmt = sqlsrv_prepare($conn, $sql);

if ($stmt === false) {
     die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_execute($stmt) === false) {
     die(print_r(sqlsrv_errors(), true));
}

$salesTotal = 0;
$count = 0;

while (($row = sqlsrv_fetch_array($stmt)) && $salesTotal <=100000)
{
     $qty = $row[0];
     $price = $row[1];
     $salesTotal += ($price * $qty);
     $count++;
}

echo "$count sales accounted for the first $$salesTotal in revenue.<br />";

// Cancela os resultados pendentes. A declaração pode ser reutilizada.
sqlsrv_cancel($stmt);
?>
```

### Notas

A principal diferença entre **sqlsrv\_cancel()** e
[sqlsrv\_free\_stmt()](function.sqlsrv-free-stmt.md) é que um recurso de declaração cancelado com
**sqlsrv\_cancel()** pode ser reexecutado se tiver sido criado com
[sqlsrv\_prepare()](function.sqlsrv-prepare.md). Um recurso de declaração cancelado com
**sqlsrv\_free\_statement()** não pode ser reexecutado.

### Veja também

- [sqlsrv\_free\_stmt()](function.sqlsrv-free-stmt.md) - Libera todos os recursos para a declaração especificada
- [sqlsrv\_prepare()](function.sqlsrv-prepare.md) - Prepara uma consulta para execução

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
