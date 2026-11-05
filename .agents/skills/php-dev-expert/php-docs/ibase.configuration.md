# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibase.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração InterBase**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [ibase.allow\_persistent](ibase.configuration.md#ini.ibase.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [ibase.max\_persistent](ibase.configuration.md#ini.ibase.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [ibase.max\_links](ibase.configuration.md#ini.ibase.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [ibase.default\_db](ibase.configuration.md#ini.ibase.default-db) | NULL | **`INI_SYSTEM`** |  |
| [ibase.default\_user](ibase.configuration.md#ini.ibase.default-user) | NULL | **`INI_ALL`** |  |
| [ibase.default\_password](ibase.configuration.md#ini.ibase.default-password) | NULL | **`INI_ALL`** |  |
| [ibase.default\_charset](ibase.configuration.md#ini.ibase.default-charset) | NULL | **`INI_ALL`** |  |
| [ibase.timestampformat](ibase.configuration.md#ini.ibase.timestampformat) | "%Y-%m-%d %H:%M:%S" | **`INI_ALL`** |  |
| [ibase.dateformat](ibase.configuration.md#ini.ibase.dateformat) | "%Y-%m-%d" | **`INI_ALL`** |  |
| [ibase.timeformat](ibase.configuration.md#ini.ibase.timeformat) | "%H:%M:%S" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`ibase.allow_persistent` [bool](language.types.boolean.md)
:   Define se as
    [conexões persistentes](features.persistent-connections.md)
    serão permitidas para Firebird/InterBase.

`ibase.max_persistent` [int](language.types.integer.md)
:   O número máximo de conexões persistentes Firebird/InterBase por
    processo. Novas conexões criadas com ibase\_pconnect() serão não-persistentes
    se este número for excedido.

`ibase.max_links` [int](language.types.integer.md)
:   O número máximo de conexões Firebird/InterBase por, incluindo
    conexões persistentes.

`ibase.default_db` [string](language.types.string.md)
:   O banco padrão a se conectar quando ibase\_[p]connect() for chamada
    sem especificar um nome de banco. Se este valor estiver definido e o modo seguro
    do SQL estiver habilitado, nenhuma outra conexão além desta a este banco será permitida.

`ibase.default_user` [string](language.types.string.md)
:   O nome de usuário a ser usado ao conectar ao banco
    se nenhum nome for especificado.

`ibase.default_password` [string](language.types.string.md)
:   A senha a ser usada ao conectar ao banco
    se nenhuma for especificada.

`ibase.default_charset` [string](language.types.string.md)
:   O conjunto de caratcteres a ser usado na conexão ao banco
    se nenhum for especificado.

`ibase.timestampformat` [string](language.types.string.md)

`ibase.dateformat` [string](language.types.string.md)

`ibase.timeformat` [string](language.types.string.md)
:   Estas diretivas são usadas para definir os formatos de data e horário
    no retorno de conjunto de resultados,
    ou ao vincular argumentos a parâmetros de data e horário.

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
