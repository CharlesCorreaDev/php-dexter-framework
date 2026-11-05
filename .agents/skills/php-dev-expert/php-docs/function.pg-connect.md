# Abre uma conexão PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-connect.php

---

# pg\_connect

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_connect — Abre uma conexão PostgreSQL

### Descrição

function **pg\_connect**([string](language.types.string.md) `$connection_string`, [int](language.types.integer.md) `$flags` = 0): [PgSql\Connection](class.pgsql-connection.md)|[false](language.types.singleton.md)

**pg\_connect()** abre uma conexão com um
banco de dados PostgreSQL especificado pelo
`connection_string`.

Se uma segunda chamada for feita para **pg\_connect()** com
o mesmo `connection_string` de uma conexão existente, a
conexão existente será retornada a menos que você passe
**`PGSQL_CONNECT_FORCE_NEW`** como
`flags`.

A sintaxe antiga com múltiplos parâmetros
**$conn = pg\_connect("host", "port", "options", "tty", "dbname")** foi descontinuada.

### Parâmetros

`connection_string`
:   O `connection_string` pode estar vazio para usar todos os parâmetros padrão ou
    pode conter uma ou mais configurações de parâmetro separadas por espaços em branco.
    Cada configuração de parâmetro está no formato `palavra-chave = valor`. Os espaços ao redor
    do sinal de igual são opcionais. Para escrever um valor vazio ou
    contendo espaços, coloque-o entre aspas simples, por exemplo, `palavra-chave =
    'um valor'`. Aspas simples e barras invertidas dentro do valor devem ser
    escapadas com uma barra invertida, ou seja, \' e \\.

    As palavras-chave de parâmetro atualmente reconhecidas são:
    `host`, `hostaddr`, `port`,
    `dbname` (o padrão é o valor de `user`),
    `user`,
    `password`, `connect_timeout`,
    `options`, `tty` (ignorado), `sslmode`,
    `requiressl` (descontinuado em favor de `sslmode`) e
    `service`. Quais desses argumentos existem depende
    da sua versão do PostgreSQL.

    O parâmetro `options` pode ser usado para definir parâmetros de linha de comando
    a serem invocados pelo servidor.

`flags`
:   Se **`PGSQL_CONNECT_FORCE_NEW`** for passado, então uma nova conexão
    será criada, mesmo que `connection_string` seja idêntico a
    uma conexão existente.

    Se **`PGSQL_CONNECT_ASYNC`** for fornecido, então a
    conexão será estabelecida de forma assíncrona. O estado da conexão
    pode então ser verificado via [pg\_connect\_poll()](function.pg-connect-poll.md) ou
    [pg\_connection\_status()](function.pg-connection-status.md).

### Valor Retornado

Retorna uma instância [PgSql\Connection](class.pgsql-connection.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [PgSql\Connection](class.pgsql-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Usando **pg\_connect()****

```
<?php
$dbconn = pg_connect("dbname=mary");
//conecta-se a um banco de dados chamado "mary"

$dbconn2 = pg_connect("host=localhost port=5432 dbname=mary");
//conecta-se a um banco de dados chamado "mary" em "localhost" na porta "5432"

$dbconn3 = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
///conecta-se a um banco de dados chamado "mary" no host "sheep" com um usuário e senha

$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
$dbconn4 = pg_connect($conn_string);
//conecta-se a um banco de dados chamado "test" no host "sheep" com um usuário e senha

$dbconn5 = pg_connect("host=localhost options='--client_encoding=UTF8'");
//conecta-se a um banco de dados em "localhost" e define o parâmetro da linha de comando que informa que a codificação está em UTF-8
?>
```

### Veja também

- [pg\_pconnect()](function.pg-pconnect.md) - Abre uma conexão PostgreSQL persistente
- [pg\_close()](function.pg-close.md) - Fecha uma conexão PostgreSQL
- [pg\_host()](function.pg-host.md) - Retorna o nome do host associado à conexão
- [pg\_port()](function.pg-port.md) - Retorne o número da porta associada à conexão
- [pg\_tty()](function.pg-tty.md) - Retorna o nome TTY associado à conexão
- [pg\_options()](function.pg-options.md) - Obtém as opções associadas à conexão
- [pg\_dbname()](function.pg-dbname.md) - Obtém o nome do banco de dados

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
