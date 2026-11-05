# Torna o próximo resultado da declaração especificada ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-next-result.php

---

# sqlsrv\_next\_result

(No version information available, might only be in Git)

sqlsrv\_next\_result — Torna o próximo resultado da declaração especificada ativo

### Descrição

function **sqlsrv\_next\_result**([resource](language.types.resource.md) `$stmt`): [mixed](language.types.mixed.md)

Torna o próximo resultado da declaração especificada ativo. Os resultados incluem
conjuntos de resultados, contagens de linhas e parâmetros de saída.

### Parâmetros

`stmt`
:   A declaração na qual o próximo resultado está sendo chamado.

### Valor Retornado

Retorna **`true`** se o próximo resultado foi obtido com sucesso, **`false`** se ocorrer um
erro e **`null`** se não houver mais resultados para recuperar.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_next\_result()****

O exemplo a seguir executa uma consulta em lote que insere em uma tabela e
depois seleciona da tabela. Isso produz dois resultados na declaração:
um para as linhas afetadas pela INSERT e outro para as linhas retornadas pela
SELECT. Para chegar às linhas retornadas pela SELECT,
é necessário chamar **sqlsrv\_next\_result()** para passar pelo primeiro resultado.

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array("Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$query = "INSERT INTO Table_1 (id, data) VALUES (?,?); SELECT * FROM TABLE_1;";
$params = array(1, "some data");
$stmt = sqlsrv_query($conn, $query, $params);

// Consome o primeiro resultado (linhas afetadas por INSERT) sem chamar sqlsrv_next_result.
echo "Rows affected: ".sqlsrv_rows_affected($stmt)."<br />";

// Move para o próximo resultado e exibe os resultados.
$next_result = sqlsrv_next_result($stmt);
if( $next_result ) {
   while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
      echo $row['id'].": ".$row['data']."<br />";
   }
} elseif( is_null($next_result)) {
     echo "No more results.<br />";
} else {
     die(print_r(sqlsrv_errors(), true));
}
?>
```

### Veja também

- [sqlsrv\_query()](function.sqlsrv-query.md) - Prepara e executa uma consulta
- [sqlsrv\_fetch\_array()](function.sqlsrv-fetch-array.md) - Retorna uma linha como um array
- [sqlsrv\_rows\_affected()](function.sqlsrv-rows-affected.md) - Retorna o número de linhas modificadas pela última consulta INSERT, UPDATE ou
  DELETE executada

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
