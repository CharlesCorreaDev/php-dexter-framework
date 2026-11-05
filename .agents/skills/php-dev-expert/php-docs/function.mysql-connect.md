# Abre uma conexão a um servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-connect.php

---

# mysql\_connect

(PHP 4, PHP 5)

mysql\_connect — Abre uma conexão a um servidor MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_connect()](function.mysqli-connect.md)
- [PDO::\_\_construct()](pdo.construct.md)

### Descrição

function **mysql\_connect**(  
    [string](language.types.string.md) `$server` = ini\_get("mysql.default\_host"),  
    [string](language.types.string.md) `$username` = ini\_get("mysql.default\_user"),  
    [string](language.types.string.md) `$password` = ini\_get("mysql.default\_password"),  
    [bool](language.types.boolean.md) `$new_link` = **`false`**,  
    [int](language.types.integer.md) `$client_flags` = 0  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre ou reutiliza uma conexão a um servidor MySQL.

### Parâmetros

`server`
:   O servidor MySQL. Também pode incluir um número de porta, por exemplo,
    "servidor:porta" ou um caminho para um soquete local, por exemplo ":/caminho/para/socquete" para
    o servidor local.

    Se a diretiva do PHP [mysql.default\_host](mysql.configuration.md#ini.mysql.default-host) não estiver definida (padrão), o valor
    padrão é 'localhost:3306'. No [modo seguro do SQL](ini.core.md#ini.sql.safe-mode), este parâmetro é ignorado
    e o valor 'localhost:3306' é sempre usado.

`username`
:   O nome de usuário. O valor padrão é definido pela diretiva [mysql.default\_user](mysql.configuration.md#ini.mysql.default-user). No
    [modo seguro do SQL](ini.core.md#ini.sql.safe-mode), este parâmetro é ignorado e o nome do usuário
    proprietário do processo do servidor é usado.

`password`
:   A senha. O valor padrão é definido pela diretiva [mysql.default\_password](mysql.configuration.md#ini.mysql.default-password). No
    [modo seguro do SQL](ini.core.md#ini.sql.safe-mode), este parâmetro é ignorado e uma senha vazia é usada.

`new_link`
:   Se uma segunda chamada for feita a **mysql\_connect()**
    com os mesmos argumentos, não é estabelecida uma nova conexão, mas
    ao invés disso, o identificador da conexão que já estiver aberta
    será retornado. O parâmetro `new_link` modifica este
    comportamento e faz com que **mysql\_connect()** sempre abra
    uma nova conexão, mesmo se **mysql\_connect()** tiver sido chamada
    antes com os mesmos parâmetros.
    No [modo seguro do SQL](ini.core.md#ini.sql.safe-mode), este parâmetro é ignorado.

`client_flags`
:   O parâmetro `client_flags` pode ser uma combinação
    das seguintes constantes:
    128 (habilita uso de `LOAD DATA LOCAL`),
    **`MYSQL_CLIENT_SSL`**,
    **`MYSQL_CLIENT_COMPRESS`**,
    **`MYSQL_CLIENT_IGNORE_SPACE`** ou
    **`MYSQL_CLIENT_INTERACTIVE`**.
    Leia a seção sobre [Constantes do cliente MySQL](mysql.constants.md#mysql.client-flags) para mais informações.
    No [modo seguro do SQL](ini.core.md#ini.sql.safe-mode), este parâmetro é ignorado.

### Valor Retornado

Retorna um identificador de conexão MySQL em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_connect()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>
```

**Exemplo #2 Exemplo de **mysql\_connect()** usando a a sintaxe `servidor:porta`**

```
<?php
// Conexão a example.com na porta 3307
$link = mysql_connect('example.com:3307', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);

// Conexão com servidor local na porta 3307
$link = mysql_connect('127.0.0.1:3307', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>
```

**Exemplo #3 Exemplo de **mysql\_connect()** usando a sintaxe ":/caminho/para/soquete"**

```
<?php
// Conexão ao servidor local e soquete, ex.: /tmp/mysql.sock

// Variação 1: omitindo localhost
$link = mysql_connect('/tmp/mysql', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);

// Variação 2: com localhost
$link = mysql_connect('localhost:/tmp/mysql.sock', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>
```

### Notas

> **Nota**:
>
> Em qualquer lugar que for especificado "localhost" ou
> "localhost:porta" como servidor, a biblioteca cliente do MySQL irá
> sobrescrever isso e tentar se conectar a um soquete local (pipe nomeado no
> Windows). Se for desejado usar TCP/IP, deve-se usar "127.0.0.1"
> ao invés de "localhost". Se a biblioteca cliente do MySQL tentar
> se conectar com o soquete local errado, o caminho correto deve ser definido como
> [mysql.default\_host](mysql.configuration.md#ini.mysql.default-host) no php.ini e o campo do servidor
> deve ser deixado em branco.

> **Nota**:
>
> A conexão com o servidor será fechada assim que a execução do
> script terminar, a menos que tenha sido fechada anteriormente chamando-se
> [mysql\_close()](function.mysql-close.md) explicitamente.

> **Nota**:
>
> O erro "Can't create TCP/IP socket (10106)" normalmente significa que a diretiva de configuração [variables\_order](ini.core.md#ini.variables-order)
> não contém o caractere `E`. No Windows, se o
> ambiente não for copiado, a variável de ambiente `SYSTEMROOT`
> não estará disponível e o PHP terá problemas para carregar o Winsock.

### Veja também

- [mysql\_pconnect()](function.mysql-pconnect.md) - Abre uma conexão persistente a um servidor MySQL
- [mysql\_close()](function.mysql-close.md) - Fecha a conexão MySQL

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
