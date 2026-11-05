# Lista as tabelas em um banco de dados MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-list-tables.php

---

# mysql\_list\_tables

(PHP 4, PHP 5)

mysql\_list\_tables — Lista as tabelas em um banco de dados MySQL

**Aviso**

Esta função foi descontinuada a partir do PHP 4.3.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- SQL Query: `SHOW TABLES FROM dbname`

### Descrição

function **mysql\_list\_tables**([string](language.types.string.md) `$database`, [resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Obtém uma lista de nomes de tabelas de um banco de dados MySQL.

Esta função foi preterida em favor de
[mysql\_query()](function.mysql-query.md) para emitir uma instrução SQL `SHOW TABLES
[FROM db_name] [LIKE 'pattern']` em seu lugar.

### Parâmetros

`database`
:   O nome do banco de dados

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Um ponteiro de resultado do tipo [resource](language.types.resource.md) em caso de sucesso ou **`false`** em caso de falha.

A função [mysql\_tablename()](function.mysql-tablename.md) deve ser usada para
navegar pelo ponteiro de resultados, ou qualquer função para tabelas de resultados,
como [mysql\_fetch\_array()](function.mysql-fetch-array.md).

### Examples

**Exemplo #1 Exemplo alternativo de **mysql\_list\_tables()****

```
<?php
$dbname = 'mysql_dbname';

if (!mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
    echo 'Não foi possível conectar ao MySQL';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "Erro de BD, não foi possível listar as tabelas\n";
    echo 'Erro do MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Tabela: {$row[0]}\n";
}

mysql_free_result($result);
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_listtables()**

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
