# Obtém o número de elementos de coluna tipo coleção usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-col-size.php

---

# cubrid\_col\_size

(PECL CUBRID >= 8.3.0)

cubrid\_col\_size — Obtém o número de elementos de coluna tipo coleção usando OID

### Descrição

function **cubrid\_col\_size**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`, [string](language.types.string.md) `$attr_name`): [int](language.types.integer.md)

A função **cubrid\_col\_size()** é usada para obter o
número de elementos em um atributo tipo coleção (conjunto, multi-conjunto,
sequência).

### Parâmetros

`conn_identifier`
:   Identificador de conexão.

`oid`
:   OID da instância a ser lida.

`attr_name`
:   Nome do atributo a ser lido da instância.

### Valor Retornado

Número de elementos em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.1 | Alteração no valor de retorno: em caso de falha, retorna false e não -1. |

### Examples

**Exemplo #1 Exemplo de **cubrid\_col\_size()****

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

$size = cubrid_col_size($conn, $oid, "b");
var_dump($size);

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
int(3)
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
