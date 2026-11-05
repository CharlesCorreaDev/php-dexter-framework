# Obtém as opções associadas à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-options.php

---

# pg\_options

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_options — Obtém as opções associadas à conexão

### Descrição

function **pg\_options**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

**pg\_options()** retornará uma string contendo
as opções especificadas na instância de
`connection` do PostgreSQL fornecida.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Uma [string](language.types.string.md) contendo as opções de
`connection`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_options()****

```
<?php
   $pgsql_conn = pg_connect("dbname=mark host=localhost");
   echo pg_options($pgsql_conn);
?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL

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
