# Remove uma instância usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-drop.php

---

# cubrid\_drop

(PECL CUBRID >= 8.3.0)

cubrid\_drop — Remove uma instância usando OID

### Descrição

function **cubrid\_drop**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`): [bool](language.types.boolean.md)

A função **cubrid\_drop()** é usada para remover uma
instância do banco de dados usando o `oid` da instância.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser removida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_drop()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

@cubrid_execute($conn, "DROP TABLE foo");
cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");

$req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$oid = cubrid_current_oid($req);

printf("--- Antes da Remoção: ---\n");
$attr = cubrid_get($conn, $oid);
var_dump($attr);

if (cubrid_drop($conn, $oid)) {
    cubrid_commit($conn);
} else {
    cubrid_rollback($conn);
}

cubrid_close_request($req);

$req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$oid = cubrid_current_oid($req);

printf("\n--- Depois da Remoção: ---\n");
$attr = cubrid_get($conn, $oid);
var_dump($attr);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
--- Antes da Remoção: ---
array(4) {
  ["a"]=>
  string(1) "1"
  ["b"]=>
  array(3) {
    [0]=>
    string(1) "1"
    [1]=>
    string(1) "2"
    [2]=>
    string(1) "3"
  }
  ["c"]=>
  array(4) {
    [0]=>
    string(2) "11"
    [1]=>
    string(2) "22"
    [2]=>
    string(2) "33"
    [3]=>
    string(3) "333"
  }
  ["d"]=>
  string(10) "a         "
}

--- Depois da Remoção: ---
array(4) {
  ["a"]=>
  string(1) "2"
  ["b"]=>
  array(3) {
    [0]=>
    string(1) "4"
    [1]=>
    string(1) "5"
    [2]=>
    string(1) "7"
  }
  ["c"]=>
  array(4) {
    [0]=>
    string(2) "44"
    [1]=>
    string(2) "55"
    [2]=>
    string(2) "66"
    [3]=>
    string(3) "666"
  }
  ["d"]=>
  string(10) "b         "
}
```

### Veja também

- [cubrid\_is\_instance()](function.cubrid-is-instance.md) - Verifica se a instância apontada pelo OID existe

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
