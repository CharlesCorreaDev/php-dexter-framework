# Remove um elemento da coluna tipo conjunto usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-set-drop.php

---

# cubrid\_set\_drop

(PECL CUBRID >= 8.3.0)

cubrid\_set\_drop — Remove um elemento da coluna tipo conjunto usando OID

### Descrição

function **cubrid\_set\_drop**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [string](language.types.string.md) `$oid`,  
    [string](language.types.string.md) `$attr_name`,  
    [string](language.types.string.md) `$set_element`  
): [bool](language.types.boolean.md)

A função **cubrid\_set\_drop()** é usada para remover um
elemento específico de um atributo tipo conjunto (conjunto, multi-conjunto)
do banco de dados.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser trabalhada.

`attr_name`
:   Nome do atributo a ter o elemento removido.

`set_element`
:   Conteúdo do elemento a ser removido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_set\_drop()****

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

cubrid_set_drop($conn, $oid, "b", "1");

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
array(2) {
  [0]=>
  string(1) "2"
  [1]=>
  string(1) "3"
}
```

### Veja também

- [cubrid\_set\_add()](function.cubrid-set-add.md) - Insere um único elemento a uma coluna tipo conjunto usando OID

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
