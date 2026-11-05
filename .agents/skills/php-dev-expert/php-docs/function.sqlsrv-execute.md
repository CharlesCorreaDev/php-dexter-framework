# Executa uma declaração preparada com sqlsrv_prepare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-execute.php

---

# sqlsrv\_execute

(No version information available, might only be in Git)

sqlsrv\_execute — Executa uma declaração preparada com [sqlsrv\_prepare()](function.sqlsrv-prepare.md)

### Descrição

function **sqlsrv\_execute**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Executa uma declaração preparada com [sqlsrv\_prepare()](function.sqlsrv-prepare.md). Esta
função é ideal para executar uma declaração preparada várias vezes com
diferentes valores de parâmetro.

### Parâmetros

`stmt`
:   Um recurso de declaração retornado por [sqlsrv\_prepare()](function.sqlsrv-prepare.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_execute()****

Este exemplo demonstra como preparar uma declaração com
[sqlsrv\_prepare()](function.sqlsrv-prepare.md) e reexecutá-la várias vezes (com
diferentes valores de parâmetro) usando **sqlsrv\_execute()**.

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "UPDATE Table_1
        SET OrderQty = ?
        WHERE SalesOrderID = ?";

// Inicializa parâmetros e prepara a declaração.
// Variáveis $qty e $id estão vinculadas à declaração, $stmt.
$qty = 0; $id = 0;
$stmt = sqlsrv_prepare( $conn, $sql, array( &$qty, &$id));
if( !$stmt ) {
    die( print_r( sqlsrv_errors(), true));
}

// Configura as informações SalesOrderDetailID e OrderQty.
// Este array mapeia o ID do pedido para a quantidade do pedido em pares chave=>valor.
$orders = array( 1=>10, 2=>20, 3=>30);

// Executa a declaração para cada pedido.
foreach( $orders as $id => $qty) {
    // Porque $id e $qty estão vinculados a $stmt1, seus valores atualizados
    // são usados com cada execução da declaração.
    if( sqlsrv_execute( $stmt ) === false ) {
          die( print_r( sqlsrv_errors(), true));
    }
}
?>
```

### Notas

Quando você prepara uma declaração que usa variáveis como parâmetros, as variáveis
são vinculadas à declaração. Isso significa que se você atualizar os valores das
variáveis, na próxima vez que executar a declaração, ela será executada com valores
de parâmetro atualizados. Para declarações que você planeja executar apenas uma vez, use
[sqlsrv\_query()](function.sqlsrv-query.md).

### Veja também

- [sqlsrv\_prepare()](function.sqlsrv-prepare.md) - Prepara uma consulta para execução
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
