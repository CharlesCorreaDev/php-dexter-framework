# Remove um elemento de coluna tipo sequência usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-seq-drop.php

---

# cubrid\_seq\_drop

(PECL CUBRID >= 8.3.0)

cubrid\_seq\_drop — Remove um elemento de coluna tipo sequência usando OID

### Descrição

function **cubrid\_seq\_drop**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [string](language.types.string.md) `$oid`,  
    [string](language.types.string.md) `$attr_name`,  
    [int](language.types.integer.md) `$index`  
): [bool](language.types.boolean.md)

A função **cubrid\_seq\_drop()** é usada para remover um
elemento específico, do atributo tipo sequência informado, do
banco de dados.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser trabalhada.

`attr_name`
:   Nome do atributo do qual elemento deve ser removido.

`index`
:   Índice do elemento a ser removido (inicia em 1).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_seq\_drop()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

@cubrid_execute($conn, "DROP TABLE foo");
cubrid_execute($conn, "CREATE TABLE foo(a int AUTO_INCREMENT, b set(int), c sequence(int), d char(10))");
cubrid_execute($conn, "INSERT INTO foo(a, b, c, d) VALUES(1, {1,2,3}, {11,22,33,333}, 'a')");

$req = cubrid_execute($conn, "SELECT * FROM foo", CUBRID_INCLUDE_OID);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$oid = cubrid_current_oid($req);

$attr = cubrid_col_get($conn, $oid, "c");
var_dump($attr);

cubrid_seq_drop($conn, $oid, "c", 4);

$attr = cubrid_col_get($conn, $oid, "c");
var_dump($attr);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
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
array(3) {
  [0]=>
  string(2) "11"
  [1]=>
  string(2) "22"
  [2]=>
  string(2) "33"
}
```

### Veja também

- [cubrid\_seq\_insert()](function.cubrid-seq-insert.md) - Insere um elemento em uma coluna tipo sequência usando OID
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
