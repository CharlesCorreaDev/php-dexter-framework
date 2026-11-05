# Drop (exclui) um banco de dados MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-drop-db.php

---

# mysql\_drop\_db

(PHP 4, PHP 5)

mysql\_drop\_db — Drop (exclui) um banco de dados MySQL

**Aviso**

Esta função foi descontinuada a partir do PHP 4.3.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- Executa um query `DROP DATABASE`

### Descrição

function **mysql\_drop\_db**([string](language.types.string.md) `$database_name`, [resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

**mysql\_drop\_db()** tenta executar um drop (remover) todo um
banco de dados do servidor associado ao identificador de
conexão especificado. Esta função foi descontinuada, é preferível usar
[mysql\_query()](function.mysql-query.md) para realilar um comando
`DROP DATABASE`.

### Parâmetros

`database_name`
:   O nome do banco de dados que será excluído.

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

**Exemplo #1 Exemplo alternativo de **mysql\_drop\_db()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

$sql = 'DROP DATABASE my_db';
if (mysql_query($sql, $link)) {
    echo "Banco de dados my_db foi excluído com sucesso\n";
} else {
    echo 'Erro ao excluir o banco de dados: ' . mysql_error() . "\n";
}
?>
```

### Notas

**Aviso**

Esta função não estará disponível se a extensão MySQL foi compilada
com a versão da biblioteca de cliente MySQL 4.x.

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_dropdb()**

### Veja também

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
