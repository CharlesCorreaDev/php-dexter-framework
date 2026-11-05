# Torna a próxima linha em um conjunto de resultados disponível para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-fetch.php

---

# sqlsrv\_fetch

(No version information available, might only be in Git)

sqlsrv\_fetch — Torna a próxima linha em um conjunto de resultados disponível para leitura

### Descrição

function **sqlsrv\_fetch**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$row` = ?, [int](language.types.integer.md) `$offset` = ?): [mixed](language.types.mixed.md)

Torna a próxima linha em um conjunto de resultados disponível para leitura. Use
[sqlsrv\_get\_field()](function.sqlsrv-get-field.md) para ler os campos da linha.

### Parâmetros

`stmt`
:   Um recurso de declaração criado executando [sqlsrv\_query()](function.sqlsrv-query.md)
    ou [sqlsrv\_execute()](function.sqlsrv-execute.md).

`row`
:   A linha a ser acessada. Este parâmetro só pode ser usado se a declaração especificada
    foi preparada com um cursor rolável. Nesse caso, esse parâmetro
    pode assumir um dos seguintes valores:

    - SQLSRV\_SCROLL\_NEXT
    - SQLSRV\_SCROLL\_PRIOR
    - SQLSRV\_SCROLL\_FIRST
    - SQLSRV\_SCROLL\_LAST
    - SQLSRV\_SCROLL\_ABSOLUTE
    - SQLSRV\_SCROLL\_RELATIVE

`offset`
:   Especifica a linha a ser acessada se o parâmetro row for definido como
    **`SQLSRV_SCROLL_ABSOLUTE`** ou
    **`SQLSRV_SCROLL_RELATIVE`**. Observe que a primeira linha em
    um conjunto de resultados tem índice 0.

### Valor Retornado

Retorna **`true`** se a próxima linha de um conjunto de resultados for recuperada com sucesso,
**`false`** se ocorrer um erro e **`null`** se não houver mais linhas no conjunto de resultados.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_fetch()****

O exemplo a seguir demonstra como recuperar uma linha com
**sqlsrv\_fetch()** e obter os campos da linha com
[sqlsrv\_get\_field()](function.sqlsrv-get-field.md).

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT Name, Comment
        FROM Table_1
        WHERE ReviewID=1";
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Torna a primeira (e neste caso, única) linha do conjunto de resultados disponível para leitura.
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

// Obter os campos da linha. Os índices dos campos começam em 0 e devem ser recuperados na ordem.
// A recuperação de campos da linha pelo nome não é suportada por sqlsrv_get_field.
$name = sqlsrv_get_field( $stmt, 0);
echo "$name: ";

$comment = sqlsrv_get_field( $stmt, 1);
echo $comment;
?>
```

### Veja também

- [sqlsrv\_get\_field()](function.sqlsrv-get-field.md) - Obtém dados do campo da linha atualmente selecionada
- [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) - Retorna uma linha como um array
- [sqlsrv\_fetch\_object()](function.sqlsrv-fetch-object.md) - Recupera a próxima linha de dados em um conjunto de resultados como um objeto

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
