# Abre uma conexão com um banco de dados Microsoft SQL Server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-connect.php

---

# sqlsrv\_connect

(No version information available, might only be in Git)

sqlsrv\_connect — Abre uma conexão com um banco de dados Microsoft SQL Server

### Descrição

function **sqlsrv\_connect**([string](language.types.string.md) `$serverName`, [array](language.types.array.md) `$connectionInfo` = ?): [resource](language.types.resource.md)

Abre uma conexão com um banco de dados Microsoft SQL Server. Por padrão, a conexão
é tentada usando a Autenticação do Windows. Para conectar usando
Autenticação do SQL Server, inclua "UID" e "PWD" no array de opções de conexão.

### Parâmetros

`serverName`
:   O nome do servidor ao qual uma conexão é estabelecida. Para conectar
    a uma instância específica, siga o nome do servidor com uma barra invertida
    e o nome da instância (por exemplo, serverName\sqlexpress).

`connectionInfo`
:   Um array associativo que especifica opções para conectar ao servidor.
    Se os valores para as chaves UID e PWD não forem especificados, a conexão
    será tentada usando a Autenticação do Windows. Para uma lista completa de
    chaves suportadas, consulte [» Opções de Conexão SQLSRV](https://msdn.microsoft.com/en-us/library/ff628167.aspx).

### Valor Retornado

Um recurso de conexão. Se uma conexão não puder ser aberta com sucesso, **`false`** é retornado.

### Examples

**Exemplo #1 Conectar usando Autenticação do Windows.**

```
<?php
$serverName = "serverName\\sqlexpress"; //serverName\instanceName

// Como UID e PWD não são especificados no array $connectionInfo,
// A conexão será tentada usando a Autenticação do Windows.
$connectionInfo = array( "Database"=>"dbName");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
```

**Exemplo #2 Conectar especificando um nome de usuário e senha.**

```
<?php
$serverName = "serverName\\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
```

**Exemplo #3 Conectar em uma porta específica**

```
<?php
$serverName = "serverName\\sqlexpress, 1542"; // nomeServidor\nomeInstancia, numeroPorta (padrão é 1433)
$connectionInfo = array("Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
     echo "Conexão estabelecida.<br />";
}else{
     echo "Conexão não pôde ser estabelecida.<br />";
     die(print_r(sqlsrv_errors(), true));
}
?>
```

### Notas

Por padrão, o **sqlsrv\_connect()** usa pooling de conexão para
melhorar o desempenho da conexão. Para desativar o pooling de conexão (ou seja, forçar uma
nova conexão em cada chamada), defina a opção "ConnectionPooling" no
array $connectionOptions para 0 (ou **`false`**). Para mais informações, consulte
[» Pooling de Conexão SQLSRV](https://msdn.microsoft.com/en-us/library/cc644930.aspx).

A extensão SQLSRV não possui uma função dedicada para alterar qual
banco de dados está conectado. O banco de dados de destino é especificado no
array $connectionOptions que é passado para sqlsrv\_connect. Para alterar o
banco de dados em uma conexão aberta, execute a seguinte consulta "USE dbName"
(por exemplo, sqlsrv\_query($conn, "USE dbName")).

### Veja também

- [sqlsrv\_close()](function.sqlsrv-close.md) - Fecha uma conexão aberta e libera os recursos associados à conexão
- [sqlsrv\_errors()](function.sqlsrv-errors.md) - Retorna informações de erro e aviso sobre a última operação SQLSRV executada
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
