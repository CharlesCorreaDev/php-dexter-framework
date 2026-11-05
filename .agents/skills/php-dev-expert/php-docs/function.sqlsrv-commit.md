# Confirma uma transação que foi iniciada com sqlsrv_begin_transaction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-commit.php

---

# sqlsrv\_commit

(No version information available, might only be in Git)

sqlsrv\_commit — Confirma uma transação que foi iniciada com [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md)

### Descrição

function **sqlsrv\_commit**([resource](language.types.resource.md) `$conn`): [bool](language.types.boolean.md)

Confirma uma transação que foi iniciada com [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md).
A conexão é retornada ao modo de auto-commit após a chamada de **sqlsrv\_commit()**.
A transação que é confirmada inclui todas as declarações que foram
executadas após a chamada para [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md).
Transações explícitas devem ser iniciadas e confirmadas ou revertidas usando essas
funções em vez de executar declarações SQL que iniciam e confirmam/revertem
transações. Para mais informações, consulte
[» Transações SQLSRV](https://msdn.microsoft.com/en-us/library/cc296206.aspx).

### Parâmetros

`conn`
:   A conexão na qual a transação será confirmada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_commit()****

O exemplo a seguir demonstra como usar **sqlsrv\_commit()**
juntamente com [sqlsrv\_begin\_transaction()](function.sqlsrv-begin-transaction.md) e
[sqlsrv\_rollback()](function.sqlsrv-rollback.md).

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

/* Se ambas as consultas forem bem-sucedidas, confirma a transação. */
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
- [sqlsrv\_rollback()](function.sqlsrv-rollback.md) - Reverte uma transação que foi iniciada com
  sqlsrv\_begin\_transaction

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
