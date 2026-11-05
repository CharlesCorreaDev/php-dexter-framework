# Define que os resultados da consulta sejam retornados em partes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-set-chunked-rows-size.php

---

# pg\_set\_chunked\_rows\_size

(PHP 8 >= 8.4.0)

pg\_set\_chunked\_rows\_size — Define que os resultados da consulta sejam retornados em partes

### Descrição

function **pg\_set\_chunked\_rows\_size**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

Define que os resultados da consulta sejam retornados em pedaços.
Os resultados de consulta retornados em seguida serão divididos em diversas partes,
cada uma contendo até `size` linhas.
Esta função precisa ser chamada antes de recuperar os resultados com [pg\_get\_result()](function.pg-get-result.md).
Esta função está disponível somente quando a versão de libpq é 17 ou superior.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`size`
:   O número de linhas a recuperar em cada parte.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se `size` for menor que `1`,
uma exceção [ValueError](class.valueerror.md) será lançada.

### Examples

**Exemplo #1 Exemplo de [pg\_result\_memory\_size()](function.pg-result-memory-size.md)**

```
<?php

$conn = pg_connect($conn_str);

for ($i = 0; $i < 10; $i ++) {
    pg_query($conn, "INSERT INTO users DEFAULT VALUES");
}

pg_send_query($conn, "SELECT * FROM users");
pg_set_chunked_rows_size($conn, 1);

$result = pg_get_result($conn);
var_dump(pg_num_rows($result));

// Sem efeito depois que o resultado é recuperado
var_dump(pg_set_chunked_rows_size($conn, 10));
```

O exemplo acima produzirá:

```
int(1)
bool(false)
```

### Veja também

- [pg\_get\_result()](function.pg-get-result.md) - Obtém o resultado da consulta assíncrona
- [pg\_result\_status()](function.pg-result-status.md) - Obtém o status do resultado da consulta

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
