# Obtém o resultado de uma linha como um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-object.php

---

# mysql\_fetch\_object

(PHP 4, PHP 5)

mysql\_fetch\_object — Obtém o resultado de uma linha como um objeto

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_object()](mysqli-result.fetch-object.md)
- [PDOStatement::fetch()](pdostatement.fetch.md)
  com `mode` como **`PDO::FETCH_OBJ`**

### Descrição

function **mysql\_fetch\_object**([resource](language.types.resource.md) `$result`, [string](language.types.string.md) `$class_name` = ?, [array](language.types.array.md) `$params` = ?): [object](language.types.object.md)

Retorna um objeto com propriedades que correspondem a linha obtida e
move o ponteiro interno dos dados adiante.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`class_name`
:   O nome de classe para instanciar, definir as propriedades e retornar.
    Se não for especificado, um objeto [stdClass](class.stdclass.md) é retornado.

`params`
:   Um [array](language.types.array.md) opcional de parâmetros para passar para o
    construtor do objeto `class_name`.

### Valor Retornado

Retorna um [object](language.types.object.md) com propriedades strings que correspondem a
linha obtida, ou **`false`** se não houverem mais linhas.

### Examples

**Exemplo #1 Exemplo **mysql\_fetch\_object()****

```
<?php
mysql_connect("hostname", "user", "password");
mysql_select_db("mydb");
$result = mysql_query("select * from mytable");
while ($row = mysql_fetch_object($result)) {
    echo $row->user_id;
    echo $row->fullname;
}
mysql_free_result($result);
?>
```

**Exemplo #2 Exemplo **mysql\_fetch\_object()****

```
<?php
class foo {
    public $name;
}

mysql_connect("hostname", "user", "password");
mysql_select_db("mydb");

$result = mysql_query("select name from mytable limit 1");
$obj = mysql_fetch_object($result, 'foo');
var_dump($obj);
?>
```

### Notas

> **Nota**:
> **Performance**  
>
> Em termos de velocidade, a função é idêntica à
> [mysql\_fetch\_array()](function.mysql-fetch-array.md), e quase tão rápida quanto
> [mysql\_fetch\_row()](function.mysql-fetch-row.md) (a diferença é
> insignificante).

> **Nota**:
>
> **mysql\_fetch\_object()** é similar a
> [mysql\_fetch\_array()](function.mysql-fetch-array.md), com uma diferença - um
> objeto é retornado, ao invés de um array. Indiretamente, isto significa
> que você pode acessar os dados apenas pelo nome dos campos, e não por
> seus índices (números são ilegais como nomes de propriedades).

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Veja também

- [mysql\_fetch\_array()](function.mysql-fetch-array.md) - Obtém uma linha de resultado como um array associativo, numérico, ou ambos
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [mysql\_data\_seek()](function.mysql-data-seek.md) - Move o ponteiro interno do resultado
- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL

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
