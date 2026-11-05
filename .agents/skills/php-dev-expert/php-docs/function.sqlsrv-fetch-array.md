# Retorna uma linha como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-fetch-array.php

---

# sqlsrv\_fetch\_array

(No version information available, might only be in Git)

sqlsrv\_fetch\_array — Retorna uma linha como um array

### Descrição

function **sqlsrv\_fetch\_array**(  
    [resource](language.types.resource.md) `$stmt`,  
    [int](language.types.integer.md) `$fetchType` = ?,  
    [int](language.types.integer.md) `$row` = ?,  
    [int](language.types.integer.md) `$offset` = ?  
): [array](language.types.array.md)

Retorna a próxima linha disponível de dados como um array associativo, um array numérico
ou ambos (o padrão).

### Parâmetros

`stmt`
:   Um recurso de declaração retornado por sqlsrv\_query ou sqlsrv\_prepare.

`fetchType`
:   Uma constante predefinida especificando o tipo de array a ser retornado. Valores
    possíveis são **`SQLSRV_FETCH_ASSOC`**,
    **`SQLSRV_FETCH_NUMERIC`** e
    **`SQLSRV_FETCH_BOTH`** (o padrão).

    Um tipo de busca de SQLSRV\_FETCH\_ASSOC não deve ser usado ao consumir um
    conjunto de resultados com várias colunas do mesmo nome.

`row`
:   Especifica a linha a ser acessada em um conjunto de resultados que usa um cursor rolável.
    Os valores possíveis são **`SQLSRV_SCROLL_NEXT`**,
    **`SQLSRV_SCROLL_PRIOR`**, **`SQLSRV_SCROLL_FIRST`**,
    **`SQLSRV_SCROLL_LAST`**, **`SQLSRV_SCROLL_ABSOLUTE`** e,
    **`SQLSRV_SCROLL_RELATIVE`** (o padrão). Quando este parâmetro
    é especificado, o `fetchType` deve ser definido explicitamente.

`offset`
:   Especifica a linha a ser acessada se o parâmetro row for definido como
    **`SQLSRV_SCROLL_ABSOLUTE`** ou
    **`SQLSRV_SCROLL_RELATIVE`**. Observe que a primeira linha em
    um conjunto de resultados tem índice 0.

### Valor Retornado

Retorna um array em caso de sucesso, **`null`** se não houver mais linhas para retornar, e
**`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Recuperando um array associativo.**

```
<?php
$serverName = "serverName\instanceName";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT FirstName, LastName FROM SomeTable";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['LastName'].", ".$row['FirstName']."<br />";
}

sqlsrv_free_stmt( $stmt);
?>
```

**Exemplo #2 Recuperando um array numérico.**

```
<?php
$serverName = "serverName\instanceName";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT FirstName, LastName FROM SomeTable";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0].", ".$row[1]."<br />";
}

sqlsrv_free_stmt( $stmt);
?>
```

### Notas

Não especificar o `fetchType` ou usar explicitamente o
**`SQLSRV_FETCH_TYPE`** constante nos exemplos acima
retornará um array que possui chaves associativas e numéricas.

Se mais de uma coluna for retornada com o mesmo nome, a última coluna terá
precedência. Para evitar colisões de nomes de campo, use aliases.

Se uma coluna sem nome for retornada, a chave associativa para o elemento do array
será uma string vazia ("").

### Veja também

- [sqlsrv\_connect()](function.sqlsrv-connect.md) - Abre uma conexão com um banco de dados Microsoft SQL Server
- [sqlsrv\_query()](function.sqlsrv-query.md) - Prepara e executa uma consulta
- [sqlsrv\_errors()](function.sqlsrv-errors.md) - Retorna informações de erro e aviso sobre a última operação SQLSRV executada
- [sqlsrv\_fetch()](function.sqlsrv-fetch.md) - Torna a próxima linha em um conjunto de resultados disponível para leitura

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
