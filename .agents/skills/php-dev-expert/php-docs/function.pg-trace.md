# Ativa o rastreamento de uma conexão PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-trace.php

---

# pg\_trace

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

pg\_trace — Ativa o rastreamento de uma conexão PostgreSQL

### Descrição

function **pg\_trace**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$mode` = "w",  
    [?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**,  
    [int](language.types.integer.md) `$trace_mode` = 0  
): [bool](language.types.boolean.md)

**pg\_trace()** permite o rastreamento da comunicação
frontend/backend do PostgreSQL para um arquivo. Para compreender totalmente os resultados,
é necessário estar familiarizado com os componentes internos do protocolo de
comunicação PostgreSQL.

Para quem não é, ainda pode ser
útil para rastrear erros em consultas enviadas ao servidor, você
poderia fazer por exemplo **grep '^To backend'
trace.log** e ver quais consultas realmente foram enviados para o
servidor PostgreSQL. Para obter mais informações, consulte a
[» Documentação do PostgreSQL](https://www.postgresql.org/docs/current/interactive/).

### Parâmetros

`filename`
:   O caminho completo e o nome do arquivo no qual gravar o log de
    rastreamento. O mesmo que em [fopen()](function.fopen.md).

`mode`
:   Um modo opcional de acesso a arquivos, igual ao [fopen()](function.fopen.md).

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`trace_mode`
:   Um modo de rastreamento opcional com as seguintes constantes
    **`PGSQL_TRACE_SUPPRESS_TIMESTAMPS`** e
    **`PGSQL_TRACE_REGRESS_MODE`**

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | `trace_mode` foi adicionado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_trace()****

```
<?php
$pgsql_conn = pg_connect("dbname=mark host=localhost");

if ($pgsql_conn) {
   pg_trace('/tmp/trace.log', 'w', $pgsql_conn);
   pg_query("SELECT 1");
   pg_untrace($pgsql_conn);
   // Agora /tmp/trace.log conterá comunicação de backend
} else {
   print pg_last_error($pgsql_conn);
   exit;
}
?>
```

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [pg\_untrace()](function.pg-untrace.md) - Desabilita o rastreamento de uma conexão PostgreSQL

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
