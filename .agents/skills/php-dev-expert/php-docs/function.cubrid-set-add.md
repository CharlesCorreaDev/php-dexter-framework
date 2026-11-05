# Insere um único elemento a uma coluna tipo conjunto usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-set-add.php

---

# cubrid\_set\_add

(PECL CUBRID >= 8.3.0)

cubrid\_set\_add — Insere um único elemento a uma coluna tipo conjunto usando OID

### Descrição

function **cubrid\_set\_add**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [string](language.types.string.md) `$oid`,  
    [string](language.types.string.md) `$attr_name`,  
    [string](language.types.string.md) `$set_element`  
): [bool](language.types.boolean.md)

A função **cubrid\_set\_add()** é usada para inserir um
único elemento a um atributo tipo conjunto (conjunto, multi-conjunto, sequência)
informado.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser trabalhada.

`attr_name`
:   Nome do atributo no qual o elemento será inserido.

`set_element`
:   Conteúdo do elemento a ser inserido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_set\_add()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

@cubrid_execute($conn, "DROP TABLE foo");
cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c list(int), d char(10))");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");

$req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$oid = cubrid_current_oid($req);

$attr = cubrid_col_get($conn, $oid, "b");
var_dump($attr);

cubrid_set_add($conn, $oid, "b", "4");

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
array(4) {
  [0]=>
  string(1) "1"
  [1]=>
  string(1) "2"
  [2]=>
  string(1) "3"
  [3]=>
  string(1) "4"
}
```

### Veja também

- [cubrid\_seq\_drop()](function.cubrid-seq-drop.md) - Remove um elemento de coluna tipo sequência usando OID

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
