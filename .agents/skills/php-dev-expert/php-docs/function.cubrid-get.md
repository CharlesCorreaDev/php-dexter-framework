# Obtém um atributo usando OID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-get.php

---

# cubrid\_get

(PECL CUBRID >= 8.3.0)

cubrid\_get — Obtém um atributo usando OID

### Descrição

function **cubrid\_get**([resource](language.types.resource.md) `$conn_identifier`, [string](language.types.string.md) `$oid`, [mixed](language.types.mixed.md) `$attr` = ?): [mixed](language.types.mixed.md)

A função **cubrid\_get()** é usada para obter o atributo
da instância do `oid` informado. Pode-se obter
um atributo único usando o tipo de dados string para o
argumento `attr`, ou vários atributos usando o tipo
de dados array para o argumento `attr`.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`oid`
:   OID da instância a ser lida.

`attr`
:   Nome do atributo a ser lido.

### Valor Retornado

Conteúdo do atributo solicitado, quando o processo for bem-sucedido; Quando
`attr` for definido com o tipo de dados string, o resultado será
retornado como uma string; quando `attr` for definido com tipo
de dados array (array numérico com base 0), o resultado será retornado em
um array associativo. Quando `attr` for omitido, todos os
atributos serão recebidos em forma de array.

**`false`** em caso de falha ou quando o resultado for NULL. (Se um erro ocorrer, para
distinguir entre string vazia e NULL, uma mensagem de alerta é mostrada.
Pode-se verificar o erro com a função [cubrid\_error\_code()](function.cubrid-error-code.md).)

### Examples

**Exemplo #1 Exemplo de **cubrid\_get()****

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

$attr = cubrid_get($conn, $oid, "b");
var_dump($attr);

$attr = cubrid_get($conn, $oid);
var_dump($attr);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
string(9) "{1, 2, 3}"
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
```

### Veja também

- [cubrid\_put()](function.cubrid-put.md) - Atualiza uma coluna usando OID

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
