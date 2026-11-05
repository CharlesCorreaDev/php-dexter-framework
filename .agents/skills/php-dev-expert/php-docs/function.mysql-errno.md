# Retorna o valor numérico da mensagem de erro da operação MySQL anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-errno.php

---

# mysql\_errno

(PHP 4, PHP 5)

mysql\_errno — Retorna o valor numérico da mensagem de erro da operação MySQL anterior

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_errno()](mysqli.errno.md)
- [PDO::errorCode()](pdo.errorcode.md)

### Descrição

function **mysql\_errno**([resource](language.types.resource.md) `$link_identifier` = NULL): [int](language.types.integer.md)

Retorna o número do erro da última função MySQL.

Erros vindos do banco de dados MySQL não
geram mais avisos. Ao invés disso, use **mysql\_errno()** para
obter o código do erro. Note que esta função retorna o
código apenas da função MySQL mais recentemente usada (não
incluindo [mysql\_error()](function.mysql-error.md) e
**mysql\_errno()**), assim se você quiser usá-la,
tenha certeza de verificar o valor antes de executar outra
função MySQL.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna o número de erro da última função MySQL, ou
`0` (zero) se não houve erro.

### Examples

**Exemplo #1 Exemplo **mysql\_errno()****

```
<?php
$link = mysql_connect("localhost", "mysql_user", "mysql_password");

if (!mysql_select_db("nonexistentdb", $link)) {
    echo mysql_errno($link) . ": " . mysql_error($link). "\n";
}

mysql_select_db("kossu", $link);
if (!mysql_query("SELECT * FROM nonexistenttable", $link)) {
    echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1049: Unknown database 'nonexistentdb'
1146: Table 'kossu.nonexistenttable' doesn't exist
```

### Veja também

- [mysql\_error()](function.mysql-error.md) - Retorna o texto da mensagem de erro da operação MySQL anterior
- [» códigos de erro MySQL](https://dev.mysql.com/doc/mysql/en/error-handling.html)

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
