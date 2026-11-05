# Libera todos os recursos para a declaração especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-free-stmt.php

---

# sqlsrv\_free\_stmt

(No version information available, might only be in Git)

sqlsrv\_free\_stmt — Libera todos os recursos para a declaração especificada

### Descrição

function **sqlsrv\_free\_stmt**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Libera todos os recursos para a declaração especificada. A declaração não pode ser usada
após **sqlsrv\_free\_stmt()** ser chamada nela. Se
**sqlsrv\_free\_stmt()** for chamada em uma declaração em andamento
que altera o estado do servidor, a execução da declaração é interrompida e a declaração
é revertida.

### Parâmetros

`stmt`
:   A declaração para a qual os recursos são liberados.
    Note que **`null`** é um valor de parâmetro válido. Isso permite que a função seja
    chamada várias vezes em um script.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_free\_stmt()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$stmt = sqlsrv_query( $conn, "SELECT * FROM Table_1");
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

/*-------------------------------
     Processar os resultados da consulta aqui.
-------------------------------*/

/* Libere os recursos da declaração. */
sqlsrv_free_stmt( $stmt);

?>
```

### Notas

A principal diferença entre **sqlsrv\_free\_stmt()** e
[sqlsrv\_cancel()](function.sqlsrv-cancel.md) é que um recurso de declaração cancelado com
[sqlsrv\_cancel()](function.sqlsrv-cancel.md) pode ser reexecutado se foi criado com
[sqlsrv\_prepare()](function.sqlsrv-prepare.md). Um recurso de declaração cancelado com
**sqlsrv\_free\_statement()** não pode ser reexecutado.

### Veja também

- [sqlsrv\_cancel()](function.sqlsrv-cancel.md) - Cancela uma declaração

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
