# Obtém conteúdo de coluna tipo coleção usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-col-get.php

---

# cubrid\_col\_get

(PECL CUBRID >= 8.3.0)

cubrid\_col\_get — Obtém conteúdo de coluna tipo coleção usando OID

### Descrição

function **cubrid\_col\_get**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`, [string](language.types.string.md) `$attr_name`): [array](language.types.array.md)

A função **cubrid\_col\_get()** é usada para obter conteúdo
dos elementos do atributo tipo coleção (conjunto, multi-conjunto, sequência),
como um array.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser lida.

`attr_name`
:   Nome do atributo a ser lido da instância.

### Valor Retornado

Array (numérico, iniciando em 0) contendo os elementos solicitados
em caso de sucesso.

**`false`** (para distinguir entre um erro e uma situação em que o atributo tem
uma coleção vazia ou NULL, em caso de erro, uma mensagem de alerta é mostrada; neste
caso o erro pode ser verificado usando a função
[cubrid\_error\_code()](function.cubrid-error-code.md)), em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_col\_get()****

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
