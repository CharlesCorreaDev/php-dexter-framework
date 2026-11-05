# Recupera o número de campos (colunas) em uma declaração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-num-fields.php

---

# sqlsrv\_num\_fields

(No version information available, might only be in Git)

sqlsrv\_num\_fields — Recupera o número de campos (colunas) em uma declaração

### Descrição

function **sqlsrv\_num\_fields**([resource](language.types.resource.md) `$stmt`): [mixed](language.types.mixed.md)

Recupera o número de campos (colunas) em uma declaração.

### Parâmetros

`stmt`
:   A declaração para a qual o número de campos é retornado.
    **sqlsrv\_num\_fields()** pode ser chamado em uma declaração antes
    ou depois da execução da declaração.

### Valor Retornado

Retorna o número de campos em caso de sucesso. Retorna **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_num\_fields()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
   die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Table_1";
$stmt = sqlsrv_query($conn, $sql);
if( $stmt === false) {
   die( print_r( sqlsrv_errors(), true));
}

$numFields = sqlsrv_num_fields( $stmt );

while( sqlsrv_fetch( $stmt )) {
   // Itere pelos campos de cada linha.
   for($i = 0; $i < $numFields; $i++) {
      echo sqlsrv_get_field($stmt, $i)." ";
   }
   echo "<br />";
}
?>
```

### Veja também

- [sqlsrv\_field\_metadata()](function.sqlsrv-field-metadata.md) - Recupera metadados para os campos de uma declaração preparada por
  sqlsrv\_prepare ou sqlsrv\_query
- [sqlsrv\_fetch()](function.sqlsrv-fetch.md) - Torna a próxima linha em um conjunto de resultados disponível para leitura
- [sqlsrv\_get\_field()](function.sqlsrv-get-field.md) - Obtém dados do campo da linha atualmente selecionada

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
