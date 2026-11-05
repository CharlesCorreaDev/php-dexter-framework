# Reverte uma transação que foi iniciada com
  sqlsrv_begin_transaction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-rollback.php

---

# sqlsrv\_rollback

(No version information available, might only be in Git)

sqlsrv\_rollback — Reverte uma transação que foi iniciada com
[sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md)

### Descrição

function **sqlsrv\_rollback**([resource](language.types.resource.md) `$conn`): [bool](language.types.boolean.md)

Reverte uma transação que foi iniciada com [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md)
e retorna a conexão ao modo de auto-commit.

### Parâmetros

`conn`
:   O recurso de conexão retornado por uma chamada para [sqlsrv\_connect()](function.sqlsrv-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_rollback()****

O exemplo a seguir demonstra como usar [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md)
junto com [sqlsrv\_commit()](function.sqlsrv-commit.md) e **sqlsrv\_rollback()**.

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true ));
}

/* Inicia a transação. */
if ( sqlsrv_begin_transaction( $conn ) === false ) {
     die( print_r( sqlsrv_errors(), true ));
}

/* Inicializa os valores dos parâmetros. */
$orderId = 1; $qty = 10; $productId = 100;

/* Configura e executa a primeira consulta. */
$sql1 = "INSERT INTO OrdersTable (ID, Quantity, ProductID)
         VALUES (?, ?, ?)";
$params1 = array( $orderId, $qty, $productId );
$stmt1 = sqlsrv_query( $conn, $sql1, $params1 );

/* Configura e executa a segunda consulta. */
$sql2 = "UPDATE InventoryTable
         SET Quantity = (Quantity - ?)
         WHERE ProductID = ?";
$params2 = array($qty, $productId);
$stmt2 = sqlsrv_query( $conn, $sql2, $params2 );

/* Se ambas as consultas foram bem-sucedidas, confirma a transação. */
/* Caso contrário, reverte a transação. */
if( $stmt1 && $stmt2 ) {
     sqlsrv_commit( $conn );
     echo "Transaction committed.<br />";
} else {
     sqlsrv_rollback( $conn );
     echo "Transaction rolled back.<br />";
}
?>
```

### Veja também

- [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md) - Inicia uma transação de banco de dados
- [sqlsrv\_commit()](function.sqlsrv-commit.md) - Confirma uma transação que foi iniciada com sqlsrv\_begin\_transaction

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
