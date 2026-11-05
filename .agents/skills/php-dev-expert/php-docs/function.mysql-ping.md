# Pinga uma conexão com o servidor ou reconecta se não houver conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-ping.php

---

# mysql\_ping

(PHP 4 >= 4.3.0, PHP 5)

mysql\_ping — Pinga uma conexão com o servidor ou reconecta se não houver conexão

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_ping()](mysqli.ping.md)

### Descrição

function **mysql\_ping**([resource](language.types.resource.md) `$link_identifier` = NULL): [bool](language.types.boolean.md)

Confere se a conexão com o
servidor está funcionando ou não. Se ela tiver caído, tenta realizar uma conexão
automática. Esta função pode ser usada em scripts que permanecem inativos por
um longo tempo, para verificar se o servidor fechou ou não a conexão
e reconectar se necessário.

> **Nota**:
>
> A reconexão automática está desabilitada por padrão em versões do Mysql >= 5.0.3.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna **`true`** se a conexão com o servidor MySQL estiver funcionando,
caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo **mysql\_ping()****

```
<?php
set_time_limit(0);

$conn = mysql_connect('localhost', 'usuario', 'senha');
$db   = mysql_select_db('mydb');

/* Supondo que esta consulta levará muito tempo */
$result = mysql_query($sql);
if (!$result) {
    echo 'Consulta #1 falhou, saindo.';
    exit;
}

/* Certifique-se de que a conexão ainda esteja ativa; caso contrário, tente reconectar */
if (!mysql_ping($conn)) {
    echo 'Conexão perdida, saindo após consulta #1';
    exit;
}
mysql_free_result($result);

/* Então a conexão ainda está ativa, vamos executar outra consulta */
$result2 = mysql_query($sql2);
?>
```

### Veja também

- [mysql\_thread\_id()](function.mysql-thread-id.md) - Retorna o ID da thread atual
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
