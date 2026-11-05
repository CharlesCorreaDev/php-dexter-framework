# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Yar Opções de Configuração**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [yar.packager](yar.configuration.md#ini.yar.packager) | php | **`INI_SYSTEM`** |  |
| [yar.debug](yar.configuration.md#ini.yar.debug) | Off | **`INI_ALL`** |  |
| [yar.connect\_timeout](yar.configuration.md#ini.yar.connect-timeout) | 1000 | **`INI_ALL`** |  |
| [yar.timeout](yar.configuration.md#ini.yar.timeout) | 5000 | **`INI_ALL`** |  |
| [yar.expose\_info](yar.configuration.md#ini.yar.expose-info) | On | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`yar.packager` [string](language.types.string.md)
:   pode ser php, json e msgpack (requer construção com suporte a msgpack)

`yar.debug` [string](language.types.string.md)

`yar.connect_timeout` [int](language.types.integer.md)
:   tempo limite em ms

`yar.timeout` [int](language.types.integer.md)
:   tempo limite em ms

`yar.expose_info` [bool](language.types.boolean.md)
:   informa se as informações do serviço devem ser expostas (ao acessar o servidor via GET)

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
