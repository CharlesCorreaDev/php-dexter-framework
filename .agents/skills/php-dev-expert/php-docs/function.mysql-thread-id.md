# Retorna o ID da thread atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-thread-id.php

---

# mysql\_thread\_id

(PHP 4 >= 4.3.0, PHP 5)

mysql\_thread\_id — Retorna o ID da thread atual

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_thread\_id()](mysqli.thread-id.md)

### Descrição

function **mysql\_thread\_id**([resource](language.types.resource.md) `$link_identifier` = NULL): [int](language.types.integer.md)|[false](language.types.singleton.md)

Recupera o ID da thread atual. Se a conexão for perdida e uma reconexão
com [mysql\_ping()](function.mysql-ping.md) for executada, o ID da thread será
alterado. Isso significa que é melhor recuperar o ID da thread apenas quando necessário.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

O ID da thread em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_thread\_id()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysql_thread_id($link);
if ($thread_id){
    printf("ID da thread atual é %d\n", $thread_id);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
ID da thread atual é 73
```

### Veja também

- [mysql\_ping()](function.mysql-ping.md) - Pinga uma conexão com o servidor ou reconecta se não houver conexão
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
