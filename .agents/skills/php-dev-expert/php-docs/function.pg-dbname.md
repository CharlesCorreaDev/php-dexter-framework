# Obtém o nome do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-dbname.php

---

# pg\_dbname

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_dbname — Obtém o nome do banco de dados

### Descrição

function **pg\_dbname**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

**pg\_dbname()** retorna o nome do banco de dados da instância
de `connection` do PostgreSQL fornecida.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Uma [string](language.types.string.md) contendo o nome do banco de dados ao qual a
`connection` está.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_dbname()****

```
<?php
  error_reporting(E_ALL);

  pg_connect("host=localhost port=5432 dbname=mary");
  echo pg_dbname(); // mary
?>
```

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
