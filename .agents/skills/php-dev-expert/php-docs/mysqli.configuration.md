# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do MySQLi**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mysqli.allow\_local\_infile](mysqli.configuration.md#ini.mysqli.allow-local-infile) | "0" | **`INI_SYSTEM`** | Antes do PHP 7.2.16 e 7.3.3 o padrão era "1". |
| [mysqli.local\_infile\_directory](mysqli.configuration.md#ini.mysqli.local-infile-directory) |  | **`INI_SYSTEM`** | Disponível desde o PHP 8.1.0. |
| [mysqli.allow\_persistent](mysqli.configuration.md#ini.mysqli.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [mysqli.max\_persistent](mysqli.configuration.md#ini.mysqli.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [mysqli.max\_links](mysqli.configuration.md#ini.mysqli.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port) | "3306" | **`INI_ALL`** |  |
| [mysqli.default\_socket](mysqli.configuration.md#ini.mysqli.default-socket) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_host](mysqli.configuration.md#ini.mysqli.default-host) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_user](mysqli.configuration.md#ini.mysqli.default-user) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_pw](mysqli.configuration.md#ini.mysqli.default-pw) | NULL | **`INI_ALL`** |  |
| [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect) | "0" | **`INI_SYSTEM`** | Removido no PHP 8.2.0 |
| [mysqli.rollback\_on\_cached\_plink](mysqli.configuration.md#ini.mysqli.rollback-on-cached-plink) | "0" | **`INI_SYSTEM`** |  |

Para maiores detalhes e definições das constantes INI\_\* acima, veja
o capítulo sobre [mudanças de
configuração](configuration.changes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mysqli.allow_local_infile` [bool](language.types.boolean.md)
:   Permite acessar, direto do PHP, arquivos locais com comandos
    LOAD DATA

`mysqli.local_infile_directory` [string](language.types.string.md)
:   Permite restringir o carregamento de LOCAL DATA para arquivos localizados
    neste diretório.

`mysqli.allow_persistent` [bool](language.types.boolean.md)
:   Habilita a possibilidade de criar conexões persistentes usando
    [mysqli\_connect()](function.mysqli-connect.md).

`mysqli.max_persistent` [int](language.types.integer.md)
:   Número máximo de conexões simultâneas que podem ser estabelecidas. Definir como
    0 para ilimitadas.

`mysqli.max_links` [int](language.types.integer.md)
:   O número máximo de conexões por processo.

`mysqli.default_port` [int](language.types.integer.md)
:   O número da porta TCP padrão para usar ao conectar ao
    servidor de banco de dados se não for especificada outra porta. Se
    não for especificado um padrão, então a porta será obtida da
    variável de ambiênte `MYSQL_TCP_PORT`,
    a entrada `mysql-tcp` em
    /etc/services ou a constante em tempo de compilação
    `MYSQL_PORT`, nesta ordem. Em Win32
    será usada apenas a constante `MYSQL_PORT`.

`mysqli.default_socket` [string](language.types.string.md)
:   O nome padrão do socket para usar ao conectar com um servidor
    de banco de dados local, se não for especificado outro nome de socket.

`mysqli.default_host` [string](language.types.string.md)
:   O servidor padrão para usar ao conectar com o servidor
    de banco de dados se não for especificado um servidor. Não se aplica em

`mysqli.default_user` [string](language.types.string.md)
:   O nome de usuário padrão para usar ao conectar com o
    servidor de banco de dados. Não se aplica em

`mysqli.default_pw` [string](language.types.string.md)
:   A senha padrão para usar ao conectar ao servidor de
    banco de dados se não for especificado outra senha. Não se aplica em

`mysqli.reconnect` [int](language.types.integer.md)
:   Reconectar automaticamente ao perder a conexão.

    > **Nota**:
    >
    > Esta configuração do php.ini é ignorada pelo driver mysqlnd,
    > e foi removida no PHP 8.2.0.

`mysqli.rollback_on_cached_plink` [bool](language.types.boolean.md)
:   Se essa opção for ativada, o fechamento de uma conexão persistente fará o rollback
    de todas as transações pendentes dessa conexão antes que
    ela seja colocada de volta no pool de conexão persistente.
    Caso contrário, as transações pendentes serão revertidas apenas quando a conexão for reutilizada ou quando for realmente fechada.

Usuários não podem modificar `MYSQL_OPT_READ_TIMEOUT` via chamada de API
ou configuração em tempo de execução. Note que se fosse possível haveria
diferenças entre como a `libmysqlclient` e
os fluxos iriam interpretar o valor de `MYSQL_OPT_READ_TIMEOUT`.

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
