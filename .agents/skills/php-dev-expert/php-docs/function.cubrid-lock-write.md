# Define uma trava de escrita em um OID informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lock-write.php

---

# cubrid\_lock\_write

(PECL CUBRID >= 8.3.0)

cubrid\_lock\_write — Define uma trava de escrita em um OID informado

### Descrição

function **cubrid\_lock\_write**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`): [bool](language.types.boolean.md)

A função **cubrid\_lock\_write()** é usada para inserir uma trava
de escrita na instância apontada pelo `oid` informado.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância na qual será inserida a trava de escrita.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_lock\_write()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

@cubrid_execute($conn, "DROP TABLE foo");
cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(2, {4,5,7}, {44,55,66,666}, 'b')");

$req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$oid = cubrid_current_oid($req);

cubrid_lock_write($conn, $oid);

$attr = cubrid_col_get($conn, $oid, "b");
var_dump($attr);

cubrid_put($conn, $oid, "b", array(2, 4, 8));

$attr = cubrid_col_get($conn, $oid, "b");
var_dump($attr);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  string(1) "1"
  [1]=>
  string(1) "2"
  [2]=>
  string(1) "3"
}
array(3) {
  [0]=>
  string(1) "2"
  [1]=>
  string(1) "4"
  [2]=>
  string(1) "8"
}
```

### Veja também

- [cubrid\_lock\_read()](function.cubrid-lock-read.md) - Define uma trava de leitura em um OID informado

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
