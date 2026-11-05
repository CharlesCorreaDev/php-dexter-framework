# Desabilita o rastreamento de uma conexão PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-untrace.php

---

# pg\_untrace

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

pg\_untrace — Desabilita o rastreamento de uma conexão PostgreSQL

### Descrição

function **pg\_untrace**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [true](language.types.singleton.md)

Para o rastreamento iniciado por [pg\_trace()](function.pg-trace.md).

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_untrace()****

```
<?php
$pgsql_conn = pg_connect("dbname=mark host=localhost");

if ($pgsql_conn) {
   pg_trace('/tmp/trace.log', 'w', $pgsql_conn);
   pg_query("SELECT 1");
   pg_untrace($pgsql_conn);
   // Agora o rastreamento da comunicação de back-end está desativado
} else {
   print pg_last_error($pgsql_conn);
   exit;
}
?>
```

### Veja também

- [pg\_trace()](function.pg-trace.md) - Ativa o rastreamento de uma conexão PostgreSQL

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
