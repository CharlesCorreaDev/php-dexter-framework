# Retorna informações sobre o servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-server-info.php

---

# sqlsrv\_server\_info

(No version information available, might only be in Git)

sqlsrv\_server\_info — Retorna informações sobre o servidor

### Descrição

function **sqlsrv\_server\_info**([resource](language.types.resource.md) `$conn`): [array](language.types.array.md)

Retorna informações sobre o servidor.

### Parâmetros

`conn`
:   O recurso de conexão que conecta o cliente e o servidor.

### Valor Retornado

Retorna um array conforme descrito na seguinte tabela:

**Array retornado**

| CurrentDatabase | O banco de dados conectado. |
| --- | --- |
| SQLServerVersion | A versão do SQL Server. |
| SQLServerName | O nome do servidor. |

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_server\_info()****

```
<?php
$serverName = "serverName\sqlexpress";
$conn = sqlsrv_connect( $serverName);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$server_info = sqlsrv_server_info( $conn);
if( $server_info )
{
    foreach( $server_info as $key => $value) {
       echo $key.": ".$value."<br />";
    }
} else {
      die( print_r( sqlsrv_errors(), true));
}
?>
```

### Veja também

- [sqlsrv\_client\_info()](function.sqlsrv-client-info.md) - Retorna informações sobre o cliente e a conexão especificada

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
