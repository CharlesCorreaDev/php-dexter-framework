# Recupera o número de linhas em um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-num-rows.php

---

# sqlsrv\_num\_rows

(No version information available, might only be in Git)

sqlsrv\_num\_rows — Recupera o número de linhas em um conjunto de resultados

### Descrição

function **sqlsrv\_num\_rows**([resource](language.types.resource.md) `$stmt`): [mixed](language.types.mixed.md)

Recupera o número de linhas em um conjunto de resultados. Esta função requer que o
recurso de declaração seja criado com um cursor estático ou de conjunto de chaves. Para mais informações,
consulte [sqlsrv\_query()](function.sqlsrv-query.md), [sqlsrv\_prepare()](function.sqlsrv-prepare.md) ou
[» Especificar um Tipo de Cursor e Selecionar Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx)
na documentação do Microsoft SQLSRV.

### Parâmetros

`stmt`
:   A declaração para a qual a contagem de linhas é retornada. O recurso de declaração
    deve ser criado com um cursor estático ou de conjunto de chaves. Para mais informações, consulte
    [sqlsrv\_query()](function.sqlsrv-query.md), [sqlsrv\_prepare()](function.sqlsrv-prepare.md) ou
    [» Especificar um Tipo de Cursor e Selecionar Linhas](https://msdn.microsoft.com/en-us/library/ee376927.aspx)
    na documentação do Microsoft SQLSRV.

### Valor Retornado

Retorna o número de linhas recuperadas em caso de sucesso e **`false`** se ocorrer um erro.
Se um cursor avançado (o padrão) ou dinâmico for usado, **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_num\_rows()****

```
<?php
$server = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password" );
$conn = sqlsrv_connect( $server, $connectionInfo );

$sql = "SELECT * FROM Table_1";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$row_count = sqlsrv_num_rows( $stmt );

if ($row_count === false)
   echo "Erro na obtenção de contagem de linhas.";
else
   echo $row_count;
?>
```

### Veja também

- [sqlsrv\_has\_rows()](function.sqlsrv-has-rows.md) - Indica se a declaração especificada possui linhas
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
