# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de mysql\_xdevapi**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [xmysqlnd.collect\_memory\_statistics](mysql-xdevapi.configuration.md#ini.xmysqlnd.collect-memory-statistics) | 0 | **`INI_SYSTEM`** |  |
| [xmysqlnd.collect\_statistics](mysql-xdevapi.configuration.md#ini.xmysqlnd.collect-statistics) | 1 | **`INI_ALL`** |  |
| [xmysqlnd.debug](mysql-xdevapi.configuration.md#ini.xmysqlnd.debug) |  | **`INI_SYSTEM`** |  |
| [xmysqlnd.mempool\_default\_size](mysql-xdevapi.configuration.md#ini.xmysqlnd.mempool-default-size) | 16000 | **`INI_ALL`** |  |
| [xmysqlnd.net\_read\_timeout](mysql-xdevapi.configuration.md#ini.xmysqlnd.net-read-timeout) | 31536000 | **`INI_SYSTEM`** |  |
| [xmysqlnd.trace\_alloc](mysql-xdevapi.configuration.md#ini.xmysqlnd.trace-alloc) |  | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`xmysqlnd.collect_memory_statistics` [int](language.types.integer.md)

`xmysqlnd.collect_statistics` [int](language.types.integer.md)

`xmysqlnd.debug` [string](language.types.string.md)

`xmysqlnd.mempool_default_size` [int](language.types.integer.md)

`xmysqlnd.net_read_timeout` [int](language.types.integer.md)

`xmysqlnd.trace_alloc` [string](language.types.string.md)

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
