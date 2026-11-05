# Abre uma conexão PostgreSQL persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-pconnect.php

---

# pg\_pconnect

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_pconnect — Abre uma conexão PostgreSQL persistente

### Descrição

function **pg\_pconnect**([string](language.types.string.md) `$connection_string`, [int](language.types.integer.md) `$flags` = 0): [PgSql\Connection](class.pgsql-connection.md)|[false](language.types.singleton.md)

**pg\_pconnect()** abre uma conexão com um
banco de dados PostgreSQL. Ele retorna uma instância [PgSql\Connection](class.pgsql-connection.md) que é
necessária para outras funções do PostgreSQL.

Se uma segunda chamada for feita para **pg\_pconnect()** com
o mesmo `connection_string` de uma conexão existente, a
conexão existente será retornada a menos que você passe
**`PGSQL_CONNECT_FORCE_NEW`** como
`flags`.

Para ativar a conexão persistente, a diretiva
[pgsql.allow\_persistent](pgsql.configuration.md#ini.pgsql.allow-persistent)
no php.ini deve ser definida como `"On"` (que é o padrão).
O número máximo de conexões persistentes pode ser definido com a diretiva
[pgsql.max\_persistent](pgsql.configuration.md#ini.pgsql.max-persistent)
no php.ini (o padrão é `-1` para nenhum limite).
O número total de conexões pode ser definido com a diretiva
[pgsql.max\_links](pgsql.configuration.md#ini.pgsql.max-links)
no php.ini.

[pg\_close()](function.pg-close.md) não irá fechar conexões persistentes
geradas por **pg\_pconnect()**.

### Parâmetros

`connection_string`
:   O `connection_string` pode estar vazio para usar todos os parâmetros padrão ou
    pode conter uma ou mais configurações de parâmetro separadas por espaços em branco.
    Cada configuração de parâmetro está no formato `palavra-chave = valor`. Os espaços ao redor
    do sinal de igual são opcionais. Para escrever um valor vazio ou
    contendo espaços, coloque-o entre aspas simples, por exemplo, `palavra-chave =
    'um valor'`. Aspas simples e barras invertidas dentro do valor devem ser
    escapadas com uma barra invertida, ou seja, `\'` e `\\`.

    As palavras-chave de parâmetro atualmente reconhecidas são:
    `host`, `hostaddr`, `port`,
    `dbname`, `user`,
    `password`, `connect_timeout`,
    `options`, `tty` (ignorada), `sslmode`,
    `requiressl` (descontinuada em favor de `sslmode`), e
    `service`.
    Quais desses argumentos existem depende da sua versão do PostgreSQL.

`flags`
:   Se **`PGSQL_CONNECT_FORCE_NEW`** for passado, então uma nova conexão
    será criada, mesmo que `connection_string` seja idêntico a
    uma conexão existente.

### Valor Retornado

Retorna uma instância [PgSql\Connection](class.pgsql-connection.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [PgSql\Connection](class.pgsql-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Usando **pg\_pconnect()****

```
<?php
// Conecta a um banco de dados chamado "mary"
$dbconn = pg_pconnect("dbname=mary");

// Conecta a um banco de dados chamado "mary" em "localhost" na porta "5432"
$dbconn2 = pg_pconnect("host=localhost port=5432 dbname=mary");

// Conecta a um banco de dados chamado "mary" no host "sheep" com usuário e senha
$dbconn3 = pg_pconnect("host=sheep port=5432 dbname=mary user=lamb password=foo");

//Conecta a um banco de dados chamado "test" no host "sheep" com usuário e senha
$conn_string = "host=sheep port=5432 dbname=test user=lamb password=bar";
$dbconn4 = pg_pconnect($conn_string);
?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL
- [Conexões de banco de dados persistentes](features.persistent-connections.md)

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
