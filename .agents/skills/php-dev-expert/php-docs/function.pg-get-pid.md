# Obtém o ID do processo do backend

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-get-pid.php

---

# pg\_get\_pid

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_get\_pid — Obtém o ID do processo do backend

### Descrição

function **pg\_get\_pid**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [int](language.types.integer.md)

**pg\_get\_pid()** obtém o PID do backend (processo do servidor
de banco de dados). O PID é útil para determinar se uma mensagem `NOTIFY`
recebida via [pg\_get\_notify()](function.pg-get-notify.md) é enviada de outro processo
ou não.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

O ID do processo do banco de dados backend.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 PID de backend do PostgreSQL**

```
<?php
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

// PID do processo de backend. Use PID com pg_get_notify()
$pid = pg_get_pid($conn);
?>
```

### Veja também

- [pg\_get\_notify()](function.pg-get-notify.md) - Obtém mensagem SQL NOTIFY

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
