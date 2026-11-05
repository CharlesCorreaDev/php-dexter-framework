# Obtém uma linha de resultado como um array associativo, numérico, ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-array.php

---

# mysql\_fetch\_array

(PHP 4, PHP 5)

mysql\_fetch\_array — Obtém uma linha de resultado como um array associativo, numérico, ou ambos

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md)
- [PDOStatement::fetch()](pdostatement.fetch.md)

### Descrição

function **mysql\_fetch\_array**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$result_type` = MYSQL\_BOTH): [array](language.types.array.md)

Retorna um array que corresponde à linha obtida
e move adiante o ponteiro interno dos dados.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`result_type`
:   O tipo de array que deve ser obtido. É uma constante e aceita
    os seguintes valores: **`MYSQL_ASSOC`**,
    **`MYSQL_NUM`** e
    **`MYSQL_BOTH`**.

### Valor Retornado

Retorna um array que corresponde à linha obtida ou **`false`**
se não houver mais linhas. O tipo da array retornado depende de
como `result_type` estiver definido. Usando
**`MYSQL_BOTH`** (padrão), será obtido um array com ambos os
índices, numérico e associativo. Usando **`MYSQL_ASSOC`**, somente
índices associativos serão obtidos (da mesma forma que [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md)
funciona), e usando **`MYSQL_NUM`**, somente os índices numéricos
(como [mysql\_fetch\_row()](function.mysql-fetch-row.md) funciona).

Se duas ou mais colunas do resultado tiverem os mesmos nomes de campos,
a última coluna terá precedência. Para acessar a(s) outra(s) coluna(s)
de mesmo nome, o índice numérico da coluna deve ser usado ou
um apelido para a coluna deve ser especificado. Para colunas com apelidos, o conteúdo
não poderá ser acessado com o nome original da coluna.

### Examples

**Exemplo #1 Consulta com nomes de campos duplicados usando apelidos**

```
SELECT table1.field AS foo, table2.field AS bar FROM table1, table2
```

**Exemplo #2 **mysql\_fetch\_array()** com **`MYSQL_NUM`****

```
<?php
mysql_connect("localhost", "mysql_user", "mysql_password") or
    die("Não foi possível conectar: " . mysql_error());
mysql_select_db("mydb");

$result = mysql_query("SELECT id, name FROM mytable");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Nome: %s", $row[0], $row[1]);
}

mysql_free_result($result);
?>
```

**Exemplo #3 **mysql\_fetch\_array()** com **`MYSQL_ASSOC`****

```
<?php
mysql_connect("localhost", "mysql_user", "mysql_password") or
    die("Não foi possível conectar: " . mysql_error());
mysql_select_db("mydb");

$result = mysql_query("SELECT id, name FROM mytable");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("ID: %s  Nome: %s", $row["id"], $row["name"]);
}

mysql_free_result($result);
?>
```

**Exemplo #4 **mysql\_fetch\_array()** com **`MYSQL_BOTH`****

```
<?php
mysql_connect("localhost", "mysql_user", "mysql_password") or
    die("Não foi possível conectar: " . mysql_error());
mysql_select_db("mydb");

$result = mysql_query("SELECT id, name FROM mytable");

while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    printf ("ID: %s  Nome: %s", $row[0], $row["name"]);
}

mysql_free_result($result);
?>
```

### Notas

> **Nota**:
> **Desempenho**  
>
> É importante observar que
> **mysql\_fetch\_array()** *não
> é significativamente* mais lento do que
> [mysql\_fetch\_row()](function.mysql-fetch-row.md), enquanto que a primeira
> fornece um valor agregado significativo.

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Veja também

- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
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
