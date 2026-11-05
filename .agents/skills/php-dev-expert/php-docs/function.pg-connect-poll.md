# Pesquisa o status de uma tentativa de conexão PostgreSQL assíncrona em
   andamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-connect-poll.php

---

# pg\_connect\_poll

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

pg\_connect\_poll — 
Pesquisa o status de uma tentativa de conexão PostgreSQL assíncrona em
andamento

### Descrição

function **pg\_connect\_poll**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [int](language.types.integer.md)

**pg\_connect\_poll()** pesquisa o status de uma conexão PostgreSQL
criada chamando [pg\_connect()](function.pg-connect.md) com a opção
**`PGSQL_CONNECT_ASYNC`**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Retorna **`PGSQL_POLLING_FAILED`**,
**`PGSQL_POLLING_READING`**,
**`PGSQL_POLLING_WRITING`**,
**`PGSQL_POLLING_OK`**, ou
**`PGSQL_POLLING_ACTIVE`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
