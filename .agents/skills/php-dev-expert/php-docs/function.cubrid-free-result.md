# Libera a memória ocupada pelos dados do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-free-result.php

---

# cubrid\_free\_result

(PECL CUBRID >= 8.3.0)

cubrid\_free\_result — Libera a memória ocupada pelos dados do resultado

### Descrição

function **cubrid\_free\_result**([resource](language.types.resource.md) `$req_identifier`): [bool](language.types.boolean.md)

Esta função libera a memória ocupada pelos dados do resultado. Ela retorna
**`true`** em caso de sucesso ou **`false`** em caso de falha. Observe que ela só pode liberar o
buffer de busca do cliente, e se a intenção for liberar toda a memória, use a função
[cubrid\_close\_request()](function.cubrid-close-request.md).

### Parâmetros

`req_identifier`
:   Identificador da requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_free\_result()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$req = cubrid_execute($conn, "SELECT * FROM history WHERE host_year=2004 ORDER BY event_code");
$row = cubrid_fetch_assoc($req);
var_dump($row);

cubrid_free_result($req);
cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(5) {
  ["event_code"]=>
  string(5) "20005"
  ["athlete"]=>
  string(12) "Hayes Joanna"
  ["host_year"]=>
  string(4) "2004"
  ["score"]=>
  string(5) "12.37"
  ["unit"]=>
  string(4) "time"
}
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
