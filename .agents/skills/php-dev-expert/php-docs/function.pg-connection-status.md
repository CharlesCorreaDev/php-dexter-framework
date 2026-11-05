# Obtém o status da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-connection-status.php

---

# pg\_connection\_status

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_connection\_status — 
Obtém o status da conexão

### Descrição

function **pg\_connection\_status**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [int](language.types.integer.md)

**pg\_connection\_status()** retorna o status da
`connection` especificada.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

**`PGSQL_CONNECTION_OK`** ou
**`PGSQL_CONNECTION_BAD`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_connection\_status()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");
  $stat = pg_connection_status($dbconn);
  if ($stat === PGSQL_CONNECTION_OK) {
      echo 'Status da conexão ok';
  } else {
      echo 'Status da conexão ruim';
  }
?>
```

### Veja também

- [pg\_connection\_busy()](function.pg-connection-busy.md) - Obtém se conexão está ocupada ou não

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
