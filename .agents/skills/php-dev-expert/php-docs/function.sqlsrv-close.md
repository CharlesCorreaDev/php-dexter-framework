# Fecha uma conexão aberta e libera os recursos associados à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-close.php

---

# sqlsrv\_close

(No version information available, might only be in Git)

sqlsrv\_close — Fecha uma conexão aberta e libera os recursos associados à conexão

### Descrição

function **sqlsrv\_close**([resource](language.types.resource.md) `$conn`): [bool](language.types.boolean.md)

Fecha uma conexão aberta e libera os recursos associados à conexão.

### Parâmetros

`conn`
:   A conexão a ser fechada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_close()****

```
<?php
$serverName = "serverName\sqlexpres";
$connOptions = array("UID"=>"username", "PWD"=>"password", "Database"=>"dbname");
$conn = sqlsrv_connect( $serverName, $connOptions );
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

//-------------------------------------
// Execute operações de banco de dados aqui.
//-------------------------------------

// Fecha a conexão.
sqlsrv_close( $conn );
?>
```

### Veja também

- [sqlsrv\_connect()](function.sqlsrv-connect.md) - Abre uma conexão com um banco de dados Microsoft SQL Server

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
