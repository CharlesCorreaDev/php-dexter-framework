# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Yac**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [yac.compress\_threshold](yac.configuration.md#ini.yac.compress-threshold) | -1 | **`INI_SYSTEM`** |  |
| [yac.debug](yac.configuration.md#ini.yac.debug) | 0 | **`INI_ALL`** |  |
| [yac.enable](yac.configuration.md#ini.yac.enable) | 1 | **`INI_SYSTEM`** |  |
| [yac.enable\_cli](yac.configuration.md#ini.yac.enable-cli) | 0 | **`INI_SYSTEM`** |  |
| [yac.keys\_memory\_size](yac.configuration.md#ini.yac.keys-memory-size) | 4M | **`INI_SYSTEM`** |  |
| [yac.serializer](yac.configuration.md#ini.yac.serializer) | php | **`INI_SYSTEM`** |  |
| [yac.values\_memory\_size](yac.configuration.md#ini.yac.values-memory-size) | 64M | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`yac.compress_threshold` [int](language.types.integer.md)

`yac.debug` [int](language.types.integer.md)

`yac.enable` [int](language.types.integer.md)

`yac.enable_cli` [int](language.types.integer.md)

`yac.keys_memory_size` [string](language.types.string.md)

`yac.serializer` [string](language.types.string.md)

`yac.values_memory_size` [string](language.types.string.md)

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
