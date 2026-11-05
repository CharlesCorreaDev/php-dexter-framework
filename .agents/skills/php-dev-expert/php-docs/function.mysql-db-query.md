# Seleciona um banco de dados e executa uma consulta nele

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-db-query.php

---

# mysql\_db\_query

(PHP 4, PHP 5)

mysql\_db\_query — Seleciona um banco de dados e executa uma consulta nele

**Aviso**

Esta função foi descontinuada a partir do PHP 5.3.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_select\_db()](mysqli.select-db.md) e depois a consulta
- [PDO::\_\_construct()](pdo.construct.md)

### Descrição

function **mysql\_db\_query**([string](language.types.string.md) `$database`, [string](language.types.string.md) `$query`, [resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)|[bool](language.types.boolean.md)

**mysql\_db\_query()** seleciona um banco de dados e executa
uma consulta nele.

### Parâmetros

`database`
:   O nome do banco de dados que será selecionado.

`query`
:   A consulta MySQL.

    Os dados dentro da consulta devem estar [adequadamente escapados](function.mysql-real-escape-string.md).

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna um recurso de resultado MySQL com o resultado da consulta,
ou **`false`** em caso de erro. A função também retorna **`true`**/**`false`** para consultas
`INSERT`/`UPDATE`/`DELETE`
para indicar sucesso/falha.

### Examples

**Exemplo #1 Exemplo alternativo de **mysql\_db\_query()****

```
<?php

if (!$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
    echo 'Não foi possível conectar ao mysql';
    exit;
}

if (!mysql_select_db('mysql_dbname', $link)) {
    echo 'Não foi possível selecionar o banco de dados';
    exit;
}

$sql    = 'SELECT foo FROM bar WHERE id = 42';
$result = mysql_query($sql, $link);

if (!$result) {
    echo "Erro do banco de dados, não foi possível consultar o banco de dados\n";
    echo 'Erro MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['foo'];
}

mysql_free_result($result);

?>
```

### Notas

> **Nota**:
>
> Deve-se ter atenção pois esta função **NÃO**
> muda de volta para o banco de dados que estava conectado anteriormente. Em outras palavras,
> esta função não pode ser usada executar *temporariamente*
> uma consulta SQL em outro banco de dados, o retorno ao banco anterior deve ser feito manualmente.
> É fortemente recomendado usar a sintaxe
> `bancodedados.tabela` nas consultas SQL ou
> [mysql\_select\_db()](function.mysql-select-db.md) ao invés desta função.

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
