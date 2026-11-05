# Obtém o status atual do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-stat.php

---

# mysql\_stat

(PHP 4 >= 4.3.0, PHP 5)

mysql\_stat — Obtém o status atual do sistema

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_stat()](mysqli.stat.md)
- [PDO::getAttribute()](pdo.getattribute.md)
  com `attribute` igual a **`PDO::ATTR_SERVER_INFO`**

### Descrição

function **mysql\_stat**([resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)

**mysql\_stat()** retorna o status atual do servidor.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna uma string com o status de tempo de atividade, threads, consultas, tabelas abertas,
tabelas de liberação e consultas por segundo. Para obter uma lista completa de outras
variáveis ​​de status, deve ser usado o comando SQL `SHOW STATUS`.
Se `link_identifier` for inválido, **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo de **mysql\_stat()****

```
<?php
$link   = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$status = explode('  ', mysql_stat($link));
print_r($status);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Uptime: 5380
    [1] => Threads: 2
    [2] => Questions: 1321299
    [3] => Slow queries: 0
    [4] => Opens: 26
    [5] => Flush tables: 1
    [6] => Open tables: 17
    [7] => Queries per second avg: 245.595
)
```

**Exemplo #2 Exemplo alternativo a **mysql\_stat()****

```
<?php
$link   = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$result = mysql_query('SHOW STATUS', $link);
while ($row = mysql_fetch_assoc($result)) {
    echo $row['Variable_name'] . ' = ' . $row['Value'] . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
back_log = 50
basedir = /usr/local/
bdb_cache_size = 8388600
bdb_log_buffer_size = 32768
bdb_home = /var/db/mysql/
bdb_max_lock = 10000
bdb_logdir =
bdb_shared_data = OFF
bdb_tmpdir = /var/tmp/
...
```

### Veja também

- [mysql\_get\_server\_info()](function.mysql-get-server-info.md) - Obtém informações do servidor MySQL
- [mysql\_list\_processes()](function.mysql-list-processes.md) - Lista os processos MySQL

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
