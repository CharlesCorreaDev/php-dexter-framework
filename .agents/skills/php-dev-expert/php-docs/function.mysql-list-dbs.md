# Lista os bancos de dados disponíveis em um servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-list-dbs.php

---

# mysql\_list\_dbs

(PHP 4, PHP 5)

mysql\_list\_dbs — Lista os bancos de dados disponíveis em um servidor MySQL

**Aviso**

Esta função foi descontinuada a partir do PHP 5.4.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- SQL Query: `SHOW DATABASES`

### Descrição

function **mysql\_list\_dbs**([resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)

Retorna um ponteiro de resultado contendo os bancos de dados disponíveis
atualmente no servidor MySQL.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna um ponteiro de resultado [resource](language.types.resource.md) em caso de sucesso, ou **`false`** em
caso de falha. Use a função [mysql\_tablename()](function.mysql-tablename.md) para lidar
com este ponteiro de resultado, ou qualquer função para tabelas com resultados, como
[mysql\_fetch\_array()](function.mysql-fetch-array.md).

### Examples

**Exemplo #1 Exemplo **mysql\_list\_dbs()****

```
<?php
// Uso sem mysql_list_dbs()
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$res = mysql_query("SHOW DATABASES");

while ($row = mysql_fetch_assoc($res)) {
    echo $row['Database'] . "\n";
}

// Descontinuado a partir do PHP 5.4.0
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {
     echo $row->Database . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
database1
database2
database3
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_listdbs()**

### Veja também

- [mysql\_db\_name()](function.mysql-db-name.md) - Obtém o nome do banco de dados a partir da chamada à mysql\_list\_dbs
- [mysql\_select\_db()](function.mysql-select-db.md) - Seleciona um banco de dados MySQL

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
