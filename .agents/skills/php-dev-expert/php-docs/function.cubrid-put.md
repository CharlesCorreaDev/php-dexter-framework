# Atualiza uma coluna usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-put.php

---

# cubrid\_put

(PECL CUBRID >= 8.3.0)

cubrid\_put — Atualiza uma coluna usando OID

### Descrição

function **cubrid\_put**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [string](language.types.string.md) `$oid`,  
    [string](language.types.string.md) `$attr` = ?,  
    [mixed](language.types.mixed.md) `$value`  
): [bool](language.types.boolean.md)

A função **cubrid\_put()** é usada para atualizar um
atributo da instância do `oid` informado.

Pode-se atualizar um único atributo usando o tipo de dados string para definir
`attr`. Nesse caso, pode-se usar dados do tipo inteiro,
ponto flutuante ou string para o argumento `value`.
Para atualizar vários números de atributos, pode-se desconsiderar o argumento
`attr` e definir o argumento
`value` com o tipo de dados de array associativo.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser atualizada.

`attr`
:   Nome do atributo a ser atualizado.

`value`
:   Novo valor a ser atribuído ao atributo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_put()****

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

- [cubrid\_get()](function.cubrid-get.md) - Obtém um atributo usando OID
- [cubrid\_set\_add()](function.cubrid-set-add.md) - Insere um único elemento a uma coluna tipo conjunto usando OID
- [cubrid\_set\_drop()](function.cubrid-set-drop.md) - Remove um elemento da coluna tipo conjunto usando OID
- [cubrid\_seq\_insert()](function.cubrid-seq-insert.md) - Insere um elemento em uma coluna tipo sequência usando OID
- [cubrid\_seq\_drop()](function.cubrid-seq-drop.md) - Remove um elemento de coluna tipo sequência usando OID
- [cubrid\_seq\_put()](function.cubrid-seq-put.md) - Atualiza o valor do elemento de coluna tipo sequência usando OID

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
