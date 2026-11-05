# Obtém se conexão está ocupada ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-connection-busy.php

---

# pg\_connection\_busy

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_connection\_busy — 
Obtém se conexão está ocupada ou não

### Descrição

function **pg\_connection\_busy**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [bool](language.types.boolean.md)

**pg\_connection\_busy()** determina se uma conexão está ocupada
ou não. Se estiver ocupada, uma consulta anterior ainda está em execução.
Se [pg\_get\_result()](function.pg-get-result.md) for usado na conexão, ela será bloqueada.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Retorna **`true`** se a conexão estiver ocupada, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_connection\_busy()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");
  $bs = pg_connection_busy($dbconn);
  if ($bs) {
      echo 'conexão está ocupada';
  } else {
     echo 'conexão não está ocupada';
  }
?>
```

### Veja também

- [pg\_connection\_status()](function.pg-connection-status.md) - Obtém o status da conexão
- [pg\_get\_result()](function.pg-get-result.md) - Obtém o resultado da consulta assíncrona

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
