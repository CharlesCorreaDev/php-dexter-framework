# Obtém informações do servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-get-server-info.php

---

# mysql\_get\_server\_info

(PHP 4 >= 4.0.5, PHP 5)

mysql\_get\_server\_info — Obtém informações do servidor MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_get\_server\_info()](mysqli.get-server-info.md)
- [PDO::getAttribute()](pdo.getattribute.md)
  com `attribute` como **`PDO::ATTR_SERVER_VERSION`**

### Descrição

function **mysql\_get\_server\_info**([resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém a versão do servidor MySQL.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna a versão do servidor MySQL em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_get\_server\_info()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
printf("Versão do servidor MySQL: %s\n", mysql_get_server_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Versão do servidor MySQL: 4.0.1-alpha
```

### Veja também

- [mysql\_get\_client\_info()](function.mysql-get-client-info.md) - Obtém informações do cliente MySQL
- [mysql\_get\_host\_info()](function.mysql-get-host-info.md) - Obtém informações do servidor MySQL
- [mysql\_get\_proto\_info()](function.mysql-get-proto-info.md) - Obtém informações do protocolo MySQL
- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP

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
