# Move o cursor no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-move-cursor.php

---

# cubrid\_move\_cursor

(PECL CUBRID >= 8.3.0)

cubrid\_move\_cursor — Move o cursor no resultado

### Descrição

function **cubrid\_move\_cursor**([resource](language.types.resource.md) `$req_identifier`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$origin` = CUBRID\_CURSOR\_CURRENT): [bool](language.types.boolean.md)

A função **cubrid\_move\_cursor()** é usada para mover a
posição atual do cursor de `req_identifier` pelo
valor definido no argumento `offset`, na direção
definida no argumento `origin`. Para definir o
argumento `origin`, pode-se usar **`CUBRID_CURSOR_FIRST`**
para a primeira parte do resultado, **`CUBRID_CURSOR_CURRENT`** para a posição
atual do resultado ou **`CUBRID_CURSOR_LAST`** para a última parte do
resultado. Se o argumento `origin` não for explicitamente
designado, a função usará **`CUBRID_CURSOR_CURRENT`** como seu valor
padrão.

Se o valor da faixa de movimento do cursor ultrapassar o limite válido, o
cursor será movido para a próxima posição após a faixa válida para o cursor.
Por exemplo, se a intenção for mover 20 unidades no resultado com tamanho de 10,
o cursor será movido para a 11ª posição e retornará **`CUBRID_NO_MORE_DATA`**.

### Parâmetros

`req_identifier`
:   Identificador da requisição.

`offset`
:   Número de unidades que se deseja mover o cursor.

`origin`
:   Posição a partir da qual se deseja mover o cursor: **`CUBRID_CURSOR_FIRST`**, **`CUBRID_CURSOR_CURRENT`** ou **`CUBRID_CURSOR_LAST`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_move\_cursor()****

```
<?php
$conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");

$req = cubrid_execute($conn, "SELECT * FROM code");
cubrid_move_cursor($req, 1, CUBRID_CURSOR_LAST);

$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_FIRST);
$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_move_cursor($req, 1, CUBRID_CURSOR_CURRENT);
$result = cubrid_fetch_row($req);
var_dump($result);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  string(1) "G"
  [1]=>
  string(4) "Gold"
}
array(2) {
  [0]=>
  string(1) "X"
  [1]=>
  string(5) "Mixed"
}
array(2) {
  [0]=>
  string(1) "M"
  [1]=>
  string(3) "Man"
}
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL

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
