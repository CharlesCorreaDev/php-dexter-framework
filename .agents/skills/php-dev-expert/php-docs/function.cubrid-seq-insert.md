# Insere um elemento em uma coluna tipo sequência usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-seq-insert.php

---

# cubrid\_seq\_insert

(PECL CUBRID >= 8.3.0)

cubrid\_seq\_insert — Insere um elemento em uma coluna tipo sequência usando OID

### Descrição

function **cubrid\_seq\_insert**(  
    [resource](language.types.resource.md) `$conn_identifier`,  
    [string](language.types.string.md) `$oid`,  
    [string](language.types.string.md) `$attr_name`,  
    [int](language.types.integer.md) `$index`,  
    [string](language.types.string.md) `$seq_element`  
): [bool](language.types.boolean.md)

A função **cubrid\_seq\_insert()** é usada para inserir um
elemento em um atributo tipo sequência na posição especificada.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser trabalhada.

`attr_name`
:   Nome do atributo ao qual a instância deve ser inserida.

`index`
:   Posição do elemento na qual o elemento deve ser inserido (inicia em 1).

`seq_element`
:   Conteúdo do elemento a ser inserido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_seq\_insert()****

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

cubrid_seq_insert($conn, $oid, "c", 5, "44");

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
array(5) {
  [0]=>
  string(2) "11"
  [1]=>
  string(2) "22"
  [2]=>
  string(2) "33"
  [3]=>
  string(3) "333"
  [4]=>
  string(2) "44"
}
```

### Veja também

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
