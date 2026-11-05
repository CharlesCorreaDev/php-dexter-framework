# Sincroniza com back-end do PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-end-copy.php

---

# pg\_end\_copy

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

pg\_end\_copy — Sincroniza com back-end do PostgreSQL

### Descrição

function **pg\_end\_copy**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [bool](language.types.boolean.md)

**pg\_end\_copy()** sincroniza o frontend do PostgreSQL
(geralmente um processo de servidor web) com o servidor PostgreSQL após
fazer uma operação de cópia executada por
[pg\_put\_line()](function.pg-put-line.md). **pg\_end\_copy()**
deve ser emitido, caso contrário o servidor PostgreSQL pode ficar fora de
sincronia com o frontend e reportar um erro.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_end\_copy()****

```
<?php
  $conn = pg_pconnect("dbname=foo");
  pg_query($conn, "create table bar (a int4, b char(16), d float8)");
  pg_query($conn, "copy bar from stdin");
  pg_put_line($conn, "3\thello world\t4.5\n");
  pg_put_line($conn, "4\tgoodbye world\t7.11\n");
  pg_put_line($conn, "\\.\n");
  pg_end_copy($conn);
?>
```

### Veja também

- [pg\_put\_line()](function.pg-put-line.md) - Envia uma string terminada em NULL para o backend do PostgreSQL

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
