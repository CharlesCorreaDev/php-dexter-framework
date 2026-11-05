# Envia dados de fluxos de parâmetros para o servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-send-stream-data.php

---

# sqlsrv\_send\_stream\_data

(No version information available, might only be in Git)

sqlsrv\_send\_stream\_data — Envia dados de fluxos de parâmetros para o servidor

### Descrição

function **sqlsrv\_send\_stream\_data**([resource](language.types.resource.md) `$stmt`): [bool](language.types.boolean.md)

Envia dados de fluxos de parâmetros para o servidor. Até 8 KB de dados são enviados
com cada chamada.

### Parâmetros

`stmt`
:   Um recurso de instrução retornado por [sqlsrv\_query()](function.sqlsrv-query.md) ou
    [sqlsrv\_execute()](function.sqlsrv-execute.md).

### Valor Retornado

Retorna **`true`** se houver mais dados para enviar e **`false`** se não houver.

### Examples

**Exemplo #1 Exemplo de **sqlsrv\_send\_stream\_data()****

```
<?php
$serverName = "serverName\sqlexpress";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "UPDATE Table_1 SET data = ( ?) WHERE id = 100";

// Abre os dados do parâmetro como um fluxo e coloca-os no array $params.
$data = fopen( "data://text/plain,[ Lengthy content here. ]", "r");
$params = array( &$data);

// Prepara a instrução. Use o array $options para desativar o
// comportamento padrão, que é enviar todos os dados de fluxo no momento da consulta
// execução.
$options = array("SendStreamParamsAtExec" => 0);
$stmt = sqlsrv_prepare( $conn, $sql, $params, $options);

sqlsrv_execute( $stmt);

// Envia até 8 KB de dados de parâmetro para o servidor
// com cada chamada a sqlsrv_send_stream_data.
$i = 1;
while( sqlsrv_send_stream_data( $stmt)) {
      $i++;
}
echo "$i chamadas foram feitas.";
?>
```

### Veja também

- [sqlsrv\_prepare()](function.sqlsrv-prepare.md) - Prepara uma consulta para execução
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
