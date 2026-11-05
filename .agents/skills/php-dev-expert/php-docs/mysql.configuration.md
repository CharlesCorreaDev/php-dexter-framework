# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do MySQL**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mysql.allow\_local\_infile](mysql.configuration.md#ini.mysql.allow-local-infile) | "1" | **`INI_SYSTEM`** |  |
| [mysql.allow\_persistent](mysql.configuration.md#ini.mysql.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [mysql.max\_persistent](mysql.configuration.md#ini.mysql.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [mysql.max\_links](mysql.configuration.md#ini.mysql.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [mysql.trace\_mode](mysql.configuration.md#ini.mysql.trace-mode) | "0" | **`INI_ALL`** |  |
| [mysql.default\_port](mysql.configuration.md#ini.mysql.default-port) | NULL | **`INI_ALL`** |  |
| [mysql.default\_socket](mysql.configuration.md#ini.mysql.default-socket) | NULL | **`INI_ALL`** |  |
| [mysql.default\_host](mysql.configuration.md#ini.mysql.default-host) | NULL | **`INI_ALL`** |  |
| [mysql.default\_user](mysql.configuration.md#ini.mysql.default-user) | NULL | **`INI_ALL`** |  |
| [mysql.default\_password](mysql.configuration.md#ini.mysql.default-password) | NULL | **`INI_ALL`** |  |
| [mysql.connect\_timeout](mysql.configuration.md#ini.mysql.connect-timeout) | "60" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mysql.allow_local_infile` [int](language.types.integer.md)
:   Permite acessar, da perspectiva do PHP, arquivos locais com declarações LOAD
    DATA

`mysql.allow_persistent` [bool](language.types.boolean.md)
:   Se deve-se permitir
    [conexões persistentes](features.persistent-connections.md)
    para MySQL.

`mysql.max_persistent` [int](language.types.integer.md)
:   O número máximo de conexões persistentes com o MySQL
    por processo.

`mysql.max_links` [int](language.types.integer.md)
:   O número máximo de conexões com o MYSQL por processo, incluindo
    conexões persistentes.

`mysql.trace_mode` [bool](language.types.boolean.md)
:   Modo de rastreamento. Quando `mysql.trace_mode` está ativado, alertas
    para pesquisas em tabelas/índices, conjuntos de resultados não liberados, e erros de SQL
    serão exibidos.

`mysql.default_port` [string](language.types.string.md)
:   O número padrão da porta TCP a usar quando conectar com
    o servidor do banco de dados se nenhuma outra porta for especificada.
    Se nenhum padrão for especificado, a porta será obtida
    da variável de ambiente MYSQL\_TCP\_PORT,
    da entrada `mysql-tcp` em
    /etc/services ou da constante da compilação
    **`MYSQL_PORT`**, nesta ordem. Windows irá usar somente
    a constante **`MYSQL_PORT`**.

`mysql.default_socket` [string](language.types.string.md)
:   O nome padrão do socket para usar quando conectar com um servidor de banco de dados
    local se outro nome de socket não for especificado.

`mysql.default_host` [string](language.types.string.md)
:   O servidor padrão para usar quando conectar com um servidor de banco de dados
    se outro servidor não for encontrado. Não se aplica em
    [modo seguro do SQL](ini.core.md#ini.sql.safe-mode).

`mysql.default_user` [string](language.types.string.md)
:   O nome padrão de usuário para conectar ao servidor de banco de dados
    se outro nome não for especificado. Não se aplica em
    [modo seguro do SQL](ini.core.md#ini.sql.safe-mode).

`mysql.default_password` [string](language.types.string.md)
:   A senha padrão para usar ao conectar ao servidor de banco de dados
    se outra senha não for especificada. Não se aplica em
    [modo seguro do SQL](ini.core.md#ini.sql.safe-mode).

`mysql.connect_timeout` [int](language.types.integer.md)
:   Limite de tempo da conexão em segundos. No Linux este limite é também usado para
    a espera da primeira resposta do servidor.

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
