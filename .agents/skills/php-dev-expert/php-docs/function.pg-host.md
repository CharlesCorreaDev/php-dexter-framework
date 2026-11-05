# Retorna o nome do host associado à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-host.php

---

# pg\_host

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_host — 
Retorna o nome do host associado à conexão

### Descrição

function **pg\_host**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

**pg\_host()** retorna o nome do host da instância
de `connection` do PostgreSQL à qual
está conectada.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Uma [string](language.types.string.md) contendo o nome do host ao qual a
`connection` está, ou uma string vazia em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_host()****

```
<?php
$pgsql_conn = pg_connect("dbname=mark host=localhost");

if ($pgsql_conn) {
   print "Conectado com sucesso a: " . pg_host($pgsql_conn) . "<br/>\n";
} else {
   print pg_last_error($pgsql_conn);
   exit;
}
?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL
- [pg\_pconnect()](function.pg-pconnect.md) - Abre uma conexão PostgreSQL persistente

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
