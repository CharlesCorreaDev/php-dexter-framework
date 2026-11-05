# Redefine conexão (reconecta)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-connection-reset.php

---

# pg\_connection\_reset

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_connection\_reset — 
Redefine conexão (reconecta)

### Descrição

function **pg\_connection\_reset**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [bool](language.types.boolean.md)

**pg\_connection\_reset()** redefine a conexão.
É útil para recuperação de erros.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_connection\_reset()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");
  $dbconn2 = pg_connection_reset($dbconn);
  if ($dbconn2) {
      echo "redefinição bem-sucedida\n";
  } else {
      echo "falha na redefinição\n";
  }
?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL
- [pg\_pconnect()](function.pg-pconnect.md) - Abre uma conexão PostgreSQL persistente
- [pg\_connection\_status()](function.pg-connection-status.md) - Obtém o status da conexão

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
