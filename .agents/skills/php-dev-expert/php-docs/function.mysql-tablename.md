# Obtém o nome da tabela do campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-tablename.php

---

# mysql\_tablename

(PHP 4, PHP 5)

mysql\_tablename — Obtém o nome da tabela do campo

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- Consulta SQL: `SHOW TABLES`

### Descrição

function **mysql\_tablename**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$i`): [string](language.types.string.md)|[false](language.types.singleton.md)

Recupera o nome da tabela a partir de um resultado informado em `result`.

Esta função foi descontinuada. É preferível usar
[mysql\_query()](function.mysql-query.md) para emitir uma instrução SQL `SHOW TABLES
[FROM db_name] [LIKE 'pattern']` em seu lugar.

### Parâmetros

`result`
:   Um ponteiro de resultados do tipo [resource](language.types.resource.md) que é retornado por
    [mysql\_list\_tables()](function.mysql-list-tables.md).

`i`
:   O índice como um número inteiro (número da linha/tabela)

### Valor Retornado

O nome da tabela em caso de sucesso ou **`false`** em caso de falha.

Use a função **mysql\_tablename()** para percorrer
este ponteiro de resultado, ou qualquer função para tabelas de resultados,
como [mysql\_fetch\_array()](function.mysql-fetch-array.md).

### Examples

**Exemplo #1 Exemplo de **mysql\_tablename()****

```
<?php
mysql_connect("localhost", "mysql_user", "mysql_password");
$result = mysql_list_tables("mydb");
$num_rows = mysql_num_rows($result);
for ($i = 0; $i < $num_rows; $i++) {
    echo "Tabela: ", mysql_tablename($result, $i), "\n";
}

mysql_free_result($result);
?>
```

### Notas

> **Nota**:
>
> A função [mysql\_num\_rows()](function.mysql-num-rows.md) pode ser usada para
> determinar o número de tabelas no ponteiro de resultados.

### Veja também

- [mysql\_list\_tables()](function.mysql-list-tables.md) - Lista as tabelas em um banco de dados MySQL
- [mysql\_field\_table()](function.mysql-field-table.md) - Obtém o nome da tabela na qual o campo especificado esta
- [mysql\_db\_name()](function.mysql-db-name.md) - Obtém o nome do banco de dados a partir da chamada à mysql\_list\_dbs

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
