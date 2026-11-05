# Obtém o nome do banco de dados a partir da chamada à mysql_list_dbs

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-db-name.php

---

# mysql\_db\_name

(PHP 4, PHP 5)

mysql\_db\_name — Obtém o nome do banco de dados a partir da chamada à [mysql\_list\_dbs()](function.mysql-list-dbs.md)

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- Query: `SELECT DATABASE()`

### Descrição

function **mysql\_db\_name**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$row`, [mixed](language.types.mixed.md) `$field` = NULL): [string](language.types.string.md)

Obtém o nome do banco de dados a partir de uma chamada à
[mysql\_list\_dbs()](function.mysql-list-dbs.md).

### Parâmetros

`result`
:   O ponteiro de resultado de uma chamada à [mysql\_list\_dbs()](function.mysql-list-dbs.md).

`row`
:   O índice dentro do conjunto de resultados.

`field`
:   O nome do campo.

### Valor Retornado

Retorna o nome do banco de dados em caso de sucesso, e **`false`** em caso de falha. Se
for retornado **`false`**, utilize [mysql\_error()](function.mysql-error.md) para determinar a natureza
do erro.

### Examples

**Exemplo #1 Exemplo **mysql\_db\_name()****

```
<?php
error_reporting(E_ALL);

$link = mysql_connect('dbhost', 'username', 'password');
$db_list = mysql_list_dbs($link);

$i = 0;
$cnt = mysql_num_rows($db_list);
while ($i < $cnt) {
    echo mysql_db_name($db_list, $i) . "\n";
    $i++;
}
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_dbname()**

### Veja também

- [mysql\_list\_dbs()](function.mysql-list-dbs.md) - Lista os bancos de dados disponíveis em um servidor MySQL
- [mysql\_tablename()](function.mysql-tablename.md) - Obtém o nome da tabela do campo

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
