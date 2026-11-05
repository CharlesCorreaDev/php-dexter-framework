# Obtém dados do campo da linha atualmente selecionada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-get-field.php

---

# sqlsrv\_get\_field

(No version information available, might only be in Git)

sqlsrv\_get\_field — Obtém dados do campo da linha atualmente selecionada

### Descrição

function **sqlsrv\_get\_field**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$fieldIndex`, [int](language.types.integer.md) `$getAsType` = ?): [mixed](language.types.mixed.md)

Obtém dados do campo da linha atualmente selecionada. Os campos devem ser acessados em
ordem. Os índices dos campos começam em 0.

### Parâmetros

`stmt`
:   Um recurso de declaração retornado por [sqlsrv\_query()](function.sqlsrv-query.md) ou
    [sqlsrv\_execute()](function.sqlsrv-execute.md).

`fieldIndex`
:   O índice do campo a ser recuperado. Os índices dos campos começam em 0. Os campos
    devem ser acessados em ordem. Ou seja, se você acessar o índice do campo 1, então o
    índice do campo 0 não estará disponível.

`getAsType`
:   O tipo de dado PHP para os dados do campo retornados. Se este parâmetro não for
    definido, os dados do campo serão retornados como seu tipo de dados PHP padrão.
    Para obter informações sobre os tipos de dados PHP padrão, consulte
    [» Tipos de Dados PHP Padrão](https://msdn.microsoft.com/en-us/library/cc296193.aspx)
    na documentação do Microsoft SQLSRV.

### Valor Retornado

Retorna os dados do campo especificado com sucesso. Retorna **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_get\_field()****

O exemplo a seguir demonstra como recuperar uma linha com
[sqlsrv\_fetch()](function.sqlsrv-fetch.md) e obter os campos da linha com
**sqlsrv\_get\_field()**.

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

// Obtém os campos da linha. Os índices de campo começam em 0 e devem ser recuperados em ordem.
// A recuperação de campos de linha por nome não é suportada por sqlsrv_get_field.
$name = sqlsrv_get_field( $stmt, 0);
echo "$name: ";

$comment = sqlsrv_get_field( $stmt, 1);
echo $comment;
?>
```

### Veja também

- [sqlsrv\_fetch()](function.sqlsrv-fetch.md) - Torna a próxima linha em um conjunto de resultados disponível para leitura
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
