# Cria um banco de dados MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-create-db.php

---

# mysql\_create\_db

(PHP 4, PHP 5)

mysql\_create\_db — Cria um banco de dados MySQL

**Aviso**

Esta função foi descontinuada a partir do PHP 4.3.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_query()](mysqli.query.md)
- [PDO::query()](pdo.query.md)

### Descrição

function **mysql\_create\_db**([string](language.types.string.md) `$database_name`, [resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

**mysql\_create\_db()** tenta criar um novo
banco de dados no servidor associado com o identificador
de conexão especificado.

### Parâmetros

`database_name`
:   O nome do banco de dados a ser criado.

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo alternativo de **mysql\_create\_db()****

A função **mysql\_create\_db()** foi descontinuada. É
preferível usar a função [mysql\_query()](function.mysql-query.md) para executar
o comando `CREATE DATABASE`.

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

$sql = 'CREATE DATABASE my_db';
if (mysql_query($sql, $link)) {
    echo "Banco de dados my_db criado com sucesso\n";
} else {
    echo 'Erro ao criar banco de dados: ' . mysql_error() . "\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Banco de dados my_db criado com sucesso
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_createdb()**

> **Nota**:
>
> Esta função não estará disponível se a extensão MySQL foi compilada
> com a versão MySQL 4.x da biblioteca de cliente.

### Veja também

- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
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
