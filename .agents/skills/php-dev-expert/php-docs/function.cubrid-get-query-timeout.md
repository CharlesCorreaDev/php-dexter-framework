# Obtém o tempo limite de consulta para a requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get-query-timeout.php

---

# cubrid\_get\_query\_timeout

(PECL CUBRID >= 8.4.1)

cubrid\_get\_query\_timeout — Obtém o tempo limite de consulta para a requisição

### Descrição

function **cubrid\_get\_query\_timeout**([resource](language.types.resource.md) `$req_identifier`): [int](language.types.integer.md)

A função **cubrid\_get\_query\_timeout()** é usada para obter
o tempo limite de consulta da requisição.

### Parâmetros

`req_identifier`
:   Identificador da requisição.

### Valor Retornado

Retorna o limite de tempo de consulta em milissegundos da requisição atual em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_get\_query\_timeout()****

```
<?php

$host = "localhost";
$port = 33000;
$db = "demodb";

$conn =
cubrid_connect_with_url("CUBRID:$host:$port:$db:::?login_timeout=50000&query_timeout=5000&disconnect_on_query_timeout=yes");

$req = cubrid_prepare($conn, "SELECT * FROM code");

$timeout = cubrid_get_query_timeout($req);
var_dump($timeout);

cubrid_set_query_timeout($req, 1000);
$timeout = cubrid_get_query_timeout($req);
var_dump($timeout);

cubrid_close($conn);
?>
```

O exemplo acima produzirá:

```
int(5000)
int(1000)
```

### Veja também

- [cubrid\_set\_query\_timeout()](function.cubrid-set-query-timeout.md) - Define o tempo limite de execução de consulta

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
