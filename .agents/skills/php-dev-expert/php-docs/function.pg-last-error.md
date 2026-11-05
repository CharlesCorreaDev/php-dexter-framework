# Obtém a última string da mensagem de erro de uma conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-last-error.php

---

# pg\_last\_error

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_last\_error — Obtém a última string da mensagem de erro de uma conexão

### Descrição

function **pg\_last\_error**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

**pg\_last\_error()** retorna a última mensagem de erro
para uma determinada `connection`.

As mensagens de erro podem ser substituídas por chamadas de função internas do
PostgreSQL (libpq). Pode não retornar uma mensagem de erro apropriada se
ocorrerem vários erros dentro de uma função do módulo PostgreSQL.

Use [pg\_result\_error()](function.pg-result-error.md), [pg\_result\_error\_field()](function.pg-result-error-field.md),
[pg\_result\_status()](function.pg-result-status.md) e
[pg\_connection\_status()](function.pg-connection-status.md) para melhor tratamento de erros.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_errormessage()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Uma [string](language.types.string.md) contendo a última mensagem de erro na
`connection` fornecida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_last\_error()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Consulta que falha
  $res = pg_query($dbconn, "select * from doesnotexist");

  echo pg_last_error($dbconn);
?>
```

### Veja também

- [pg\_result\_error()](function.pg-result-error.md) - Obtém mensagem de erro associada ao resultado
- [pg\_result\_error\_field()](function.pg-result-error-field.md) - Retorna um campo individual de um relatório de erros

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
