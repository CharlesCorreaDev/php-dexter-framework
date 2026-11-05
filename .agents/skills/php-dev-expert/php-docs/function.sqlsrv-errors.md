# Retorna informações de erro e aviso sobre a última operação SQLSRV executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-errors.php

---

# sqlsrv\_errors

(No version information available, might only be in Git)

sqlsrv\_errors — Retorna informações de erro e aviso sobre a última operação SQLSRV executada

### Descrição

function **sqlsrv\_errors**([int](language.types.integer.md) `$errorsOrWarnings` = ?): [mixed](language.types.mixed.md)

Retorna informações de erro e aviso sobre a última operação SQLSRV executada.

### Parâmetros

`errorsOrWarnings`
:   Determina se informações de erro, aviso ou ambos são retornados.
    Se este parâmetro não for fornecido, tanto as informações de erro quanto de
    aviso serão retornadas. Os seguintes são os valores suportados
    para este parâmetro: SQLSRV\_ERR\_ALL, SQLSRV\_ERR\_ERRORS, SQLSRV\_ERR\_WARNINGS.

### Valor Retornado

Se ocorrerem erros e/ou avisos na última operação sqlsrv, um array de
arrays contendo informações de erro é retornado. Se não houver erros e/ou avisos
na última operação sqlsrv, é retornado **`null`**. A tabela a seguir
descreve a estrutura dos arrays retornados:

**Array retornado por sqlsrv\_errors**

| Chave | Descrição |
| --- | --- |
| SQLSTATE | Para erros que se originam do driver ODBC, o SQLSTATE retornado pelo ODBC. Para erros que se originam dos Drivers da Microsoft para PHP para SQL Server, um SQLSTATE de IMSSP. Para avisos que se originam dos Drivers da Microsoft para PHP para SQL Server, um SQLSTATE de 01SSP. |
| code | Para erros que se originam do SQL Server, o código de erro nativo do SQL Server. Para erros que se originam do driver ODBC, o código de erro retornado pelo ODBC. Para erros que se originam dos Drivers da Microsoft para PHP para SQL Server, o código de erro dos Drivers da Microsoft para PHP para SQL Server. |
| message | Uma descrição do erro. |

### Examples

**Exemplo #1 Exemplo de **functionname()****

```
<?php
$serverName = "serverName/sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

/* Configura uma consulta para selecionar um nome de coluna inválido. */
$sql = "SELECT BadColumnName FROM Table_1";

/* A execução da consulta falhará devido ao nome da coluna ruim. */
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false ) {
    if( ($errors = sqlsrv_errors() ) != null) {
        foreach( $errors as $error ) {
            echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
            echo "code: ".$error[ 'code']."<br />";
            echo "message: ".$error[ 'message']."<br />";
        }
    }
}
?>
```

### Notas

Por padrão, avisos gerados em uma chamada a qualquer função SQLSRV são tratados
como erros. Isso significa que se um aviso ocorrer em uma chamada para uma função SQLSRV,
a função retorna **`false`**. No entanto, avisos que correspondem a valores SQLSTATE
01000, 01001, 01003 e 01S02 nunca são tratados como erros. Para
informações sobre como alterar esse comportamento, consulte [sqlsrv\_configure()](function.sqlsrv-configure.md)
e a configuração WarningsReturnAsErrors.

### Veja também

- [sqlsrv\_configure()](function.sqlsrv-configure.md) - Altera as configurações de tratamento de erros e registro do driver

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
