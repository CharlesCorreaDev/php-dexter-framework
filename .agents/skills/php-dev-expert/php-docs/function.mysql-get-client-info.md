# Obtém informações do cliente MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-get-client-info.php

---

# mysql\_get\_client\_info

(PHP 4 >= 4.0.5, PHP 5)

mysql\_get\_client\_info — Obtém informações do cliente MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_get\_client\_info()](mysqli.get-client-info.md)
- [PDO::getAttribute()](pdo.getattribute.md)
  com `attribute` como **`PDO::ATTR_CLIENT_VERSION`**

### Descrição

function **mysql\_get\_client\_info**(): [string](language.types.string.md)

**mysql\_get\_client\_info()** retorna uma string que
representa a versão da biblioteca do cliente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A versão do cliente MySQL.

### Examples

**Exemplo #1 Exemplo **mysql\_get\_client\_info()****

```
<?php
printf("MySQL client info: %s\n", mysql_get_client_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
MySQL client info: 3.23.39
```

### Veja também

- [mysql\_get\_host\_info()](function.mysql-get-host-info.md) - Obtém informações do servidor MySQL
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
