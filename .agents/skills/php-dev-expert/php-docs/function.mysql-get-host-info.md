# Obtém informações do servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-get-host-info.php

---

# mysql\_get\_host\_info

(PHP 4 >= 4.0.5, PHP 5)

mysql\_get\_host\_info — Obtém informações do servidor MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_get\_host\_info()](mysqli.get-host-info.md)
- [PDO::getAttribute()](pdo.getattribute.md)
  com `attribute` como **`PDO::ATTR_CONNECTION_STATUS`**

### Descrição

function **mysql\_get\_host\_info**([resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)|[false](language.types.singleton.md)

Descreve o tipo de conexão em uso para a conexão, incluindo o
nome do servidor.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna uma string descrevendo o tipo da conexão MySQL em uso para a
conexão ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_get\_host\_info()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
printf("MySQL host info: %s\n", mysql_get_host_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
MySQL host info: Localhost via UNIX socket
```

### Veja também

- [mysql\_get\_client\_info()](function.mysql-get-client-info.md) - Obtém informações do cliente MySQL
- [mysql\_get\_proto\_info()](function.mysql-get-proto-info.md) - Obtém informações do protocolo MySQL
- [mysql\_get\_server\_info()](function.mysql-get-server-info.md) - Obtém informações do servidor MySQL

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
