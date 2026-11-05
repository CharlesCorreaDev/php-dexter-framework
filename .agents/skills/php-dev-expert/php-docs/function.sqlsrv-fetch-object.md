# Recupera a próxima linha de dados em um conjunto de resultados como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-fetch-object.php

---

# sqlsrv\_fetch\_object

(No version information available, might only be in Git)

sqlsrv\_fetch\_object — Recupera a próxima linha de dados em um conjunto de resultados como um objeto

### Descrição

function **sqlsrv\_fetch\_object**(  
    [resource](language.types.resource.md) `$stmt`,  
    [string](language.types.string.md) `$className` = ?,  
    [array](language.types.array.md) `$ctorParams` = ?,  
    [int](language.types.integer.md) `$row` = ?,  
    [int](language.types.integer.md) `$offset` = ?  
): [mixed](language.types.mixed.md)

Recupera a próxima linha de dados em um conjunto de resultados como uma instância da classe
especificada com propriedades que correspondem aos nomes dos campos da linha e valores que correspondem
aos valores dos campos da linha.

### Parâmetros

`stmt`
:   Um recurso de declaração criado por [sqlsrv\_query()](function.sqlsrv-query.md) ou
    [sqlsrv\_execute()](function.sqlsrv-execute.md).

`className`
:   O nome da classe a ser instanciada. Se nenhum nome de classe for especificado,
    stdClass é instanciado.

`ctorParams`
:   Valores passados para o construtor da classe especificada. Se o construtor
    da classe especificada aceitar parâmetros, o array ctorParams deve ser
    fornecido.

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

Retorna um objeto em caso de sucesso, **`null`** se não houver mais linhas para retornar,
e **`false`** se ocorrer um erro ou se a classe especificada não existir.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_fetch\_object()****

O exemplo a seguir demonstra como recuperar uma linha como um objeto stdClass.

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT fName, lName FROM Table_1";
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Recupera cada linha como um objeto.
// Como nenhum nome de classe é especificado, cada linha será recuperada como um objeto stdClass.
// Os nomes das propriedades correspondem aos nomes dos campos.
while( $obj = sqlsrv_fetch_object( $stmt)) {
      echo $obj->fName.", ".$obj->lName."<br />";
}
?>
```

### Notas

Se um nome de classe for especificado com o parâmetro opcional $className e a
classe tiver propriedades cujos nomes correspondam aos nomes dos campos do conjunto de resultados, os valores do
conjunto de resultados correspondentes são aplicados às propriedades. Se um nome de campo
do conjunto de resultados não corresponder a uma propriedade da classe, uma propriedade com o nome do campo do conjunto de resultados é adicionada
ao objeto e o valor do conjunto de resultados é aplicado à propriedade. As seguintes
regras se aplicam ao usar o parâmetro $className:

- A correspondência entre nome de campo e propriedade é sensível a maiúsculas e minúsculas.
- A correspondência entre nome de campo e propriedade ocorre independentemente dos modificadores de acesso.
- Os tipos de dados da propriedade da classe são ignorados ao aplicar um valor de campo a uma propriedade.
- Se a classe não existir, a função retorna **`false`** e adiciona um erro à coleção de erros.

Independentemente de o parâmetro $className ser fornecido ou não, se um campo sem
nome for retornado, o valor do campo será ignorado e um aviso será adicionado
à coleção de erros.

Ao consumir um conjunto de resultados que tenha várias colunas com o mesmo nome, pode ser
melhor usar [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) ou a combinação de
[sqlsrv\_fetch()](function.sqlsrv-fetch.md) e [sqlsrv\_get\_field()](function.sqlsrv-get-field.md).

### Veja também

- [sqlsrv\_fetch()](function.sqlsrv-fetch.md) - Torna a próxima linha em um conjunto de resultados disponível para leitura
- [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) - Retorna uma linha como um array

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
