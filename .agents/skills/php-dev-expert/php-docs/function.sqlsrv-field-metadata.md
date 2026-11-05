# Recupera metadados para os campos de uma declaração preparada por
  sqlsrv_prepare ou sqlsrv_query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-field-metadata.php

---

# sqlsrv\_field\_metadata

(No version information available, might only be in Git)

sqlsrv\_field\_metadata — Recupera metadados para os campos de uma declaração preparada por
[sqlsrv\_prepare()](function.sqlsrv-prepare.md) ou [sqlsrv\_query()](function.sqlsrv-query.md)

### Descrição

function **sqlsrv\_field\_metadata**([resource](language.types.resource.md) `$stmt`): [mixed](language.types.mixed.md)

Recupera metadados para os campos de uma declaração preparada por
[sqlsrv\_prepare()](function.sqlsrv-prepare.md) ou [sqlsrv\_query()](function.sqlsrv-query.md).
**sqlsrv\_field\_metadata()** pode ser chamado em uma declaração antes
ou depois da execução da declaração.

### Parâmetros

`stmt`
:   O recurso de declaração para o qual os metadados são retornados.

### Valor Retornado

Retorna um array de arrays em caso de sucesso. Caso contrário, é retornado **`false`**.
Cada array retornado é descrito pela seguinte tabela:

**Array retornado por sqlsrv\_field\_metadata**

| Chave | Descrição |
| --- | --- |
| Name | O nome do campo. |
| Type | O valor numérico para o tipo SQL. |
| Size | O número de caracteres para campos de tipo caractere, o número de bytes para campos de tipo binário, ou **`null`** para outros tipos. |
| Precision | A precisão para tipos de precisão variável, **`null`** para outros tipos. |
| Scale | A escala para tipos de escala variável, **`null`** para outros tipos. |
| Nullable | Uma enumeração indicando se a coluna é nula, não nula, ou se não é conhecida. |

Para mais informações, consulte [» sqlsrv\_field\_metadata](https://msdn.microsoft.com/en-us/library/cc296197.aspx)
na documentação do Microsoft SQLSRV.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_field\_metadata()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"AdventureWorks", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
   die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Table_1";
$stmt = sqlsrv_prepare( $conn, $sql );

foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
    foreach( $fieldMetadata as $name => $value) {
       echo "$name: $value<br />";
    }
      echo "<br />";
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
