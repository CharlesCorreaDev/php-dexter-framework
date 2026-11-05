# Retorna informações sobre o cliente e a conexão especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-client-info.php

---

# sqlsrv\_client\_info

(No version information available, might only be in Git)

sqlsrv\_client\_info — Retorna informações sobre o cliente e a conexão especificada

### Descrição

function **sqlsrv\_client\_info**([resource](language.types.resource.md) `$conn`): [array](language.types.array.md)

Retorna informações sobre o cliente e a conexão especificada

### Parâmetros

`conn`
:   A conexão sobre a qual as informações são retornadas.

### Valor Retornado

Retorna um array associativo com chaves descritas na tabela abaixo.
Retorna **`false`** caso contrário.

**Array retornado por sqlsrv\_client\_info**

| Chave | Descrição |
| --- | --- |
| DriverDllName | SQLNCLI10.DLL |
| DriverODBCVer | Versão ODBC (xx.yy) |
| DriverVer | Versão do DLL do SQL Server Native Client (10.5.xxx) |
| ExtensionVer | Versão do php\_sqlsrv.dll (2.0.xxx.x) |

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_client\_info()****

```
<?php
$serverName = "serverName\sqlexpress";
$connOptions = array("UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connOptions );

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

if( $client_info = sqlsrv_client_info( $conn)) {
    foreach( $client_info as $key => $value) {
        echo $key.": ".$value."<br />";
    }
} else {
    echo "Error in retrieving client info.<br />";
}
?>
```

### Veja também

- [sqlsrv\_server\_info()](function.sqlsrv-server-info.md) - Retorna informações sobre o servidor

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
