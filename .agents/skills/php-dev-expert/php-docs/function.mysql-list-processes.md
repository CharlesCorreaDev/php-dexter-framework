# Lista os processos MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-list-processes.php

---

# mysql\_list\_processes

(PHP 4 >= 4.3.0, PHP 5)

mysql\_list\_processes — Lista os processos MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_thread\_id()](mysqli.thread-id.md)

### Descrição

function **mysql\_list\_processes**([resource](language.types.resource.md) `$link_identifier` = NULL): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Obtém as threads atuais do servidor MySQL.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Um ponteiro de resultado [resource](language.types.resource.md) em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_list\_processes()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');

$result = mysql_list_processes($link);
while ($row = mysql_fetch_assoc($result)){
    printf("%s %s %s %s %s\n", $row["Id"], $row["Host"], $row["db"],
        $row["Command"], $row["Time"]);
}
mysql_free_result($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1 localhost test Processlist 0
4 localhost mysql sleep 5
```

### Veja também

- [mysql\_thread\_id()](function.mysql-thread-id.md) - Retorna o ID da thread atual
- [mysql\_stat()](function.mysql-stat.md) - Obtém o status atual do sistema

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
