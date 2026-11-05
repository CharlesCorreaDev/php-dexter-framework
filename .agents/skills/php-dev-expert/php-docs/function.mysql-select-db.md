# Seleciona um banco de dados MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-select-db.php

---

# mysql\_select\_db

(PHP 4, PHP 5)

mysql\_select\_db — Seleciona um banco de dados MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_select\_db()](mysqli.select-db.md)
- [PDO::\_\_construct()](pdo.construct.md) (parte da dsn)

### Descrição

function **mysql\_select\_db**([string](language.types.string.md) `$database_name`, [resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

Define o banco de dados ativo atual no servidor associado ao
identificador de conexão especificado. Cada chamada subsequente a
[mysql\_query()](function.mysql-query.md) será feita no banco de dados ativo.

### Parâmetros

`database_name`
:   O nome do banco de dados que será selecionado.

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

**Exemplo #1 Exemplo de **mysql\_select\_db()****

```
<?php

$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não conectado : ' . mysql_error());
}

// faz de 'foo' o banco de dados atual
$db_selected = mysql_select_db('foo', $link);
if (!$db_selected) {
    die ('Não foi possível usar foo : ' . mysql_error());
}
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_selectdb()**

### Veja também

- [mysql\_connect()](function.mysql-connect.md) - Abre uma conexão a um servidor MySQL
- [mysql\_pconnect()](function.mysql-pconnect.md) - Abre uma conexão persistente a um servidor MySQL
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
