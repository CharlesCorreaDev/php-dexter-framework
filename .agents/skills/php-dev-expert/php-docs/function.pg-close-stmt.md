# Closes a prepared statement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-close-stmt.php

---

# pg\_close\_stmt

(PHP 8 >= 8.5.0)

pg\_close\_stmt — Closes a prepared statement

### Descrição

function **pg\_close\_stmt**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$statement_name`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

Closes a prepared statement on the server, freeing its resources and making
its name available for reuse. It is an alternative to issuing a
`DEALLOCATE` SQL command, which does not allow the statement
name to be reused afterwards.

This function is only available if PHP has been built against libpq 17 or
later.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`statement_name`
:   The name of the prepared statement to close.

### Valor Retornado

A [PgSql\Result](class.pgsql-result.md) instance on success, or **`false`** on
failure.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) if
`statement_name` is empty or contains any null bytes.

### Veja também

- [pg\_prepare()](function.pg-prepare.md) - Envia uma solicitação ao servidor para criar uma instrução preparada com os
  parâmetros fornecidos e aguarda a conclusão
- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado

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
