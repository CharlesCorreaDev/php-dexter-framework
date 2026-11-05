# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Stomp**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [stomp.default\_broker](stomp.configuration.md#ini.stomp.default-broker) | tcp://localhost:61613 | **`INI_ALL`** |  |
| [stomp.default\_connection\_timeout\_sec](stomp.configuration.md#ini.stomp.default-connection-timeout-sec) | 2 | **`INI_ALL`** |  |
| [stomp.default\_connection\_timeout\_usec](stomp.configuration.md#ini.stomp.default-connection-timeout-usec) | 0 | **`INI_ALL`** |  |
| [stomp.default\_read\_timeout\_sec](stomp.configuration.md#ini.stomp.default-read-timeout-sec) | 2 | **`INI_ALL`** |  |
| [stomp.default\_read\_timeout\_usec](stomp.configuration.md#ini.stomp.default-read-timeout-usec) | 0 | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`stomp.default_broker` [string](language.types.string.md)
:   O URI do broker padrão a ser usado ao conectar-se ao broker de mensagens se nenhum outro URI for especificado.

`stomp.default_connection_timeout_sec` [int](language.types.integer.md)
:   A parte dos segundos do tempo limite de conexão padrão.

`stomp.default_connection_timeout_usec` [int](language.types.integer.md)
:   A parte em microssegundos do tempo limite de conexão padrão.

`stomp.default_read_timeout_sec` [int](language.types.integer.md)
:   A parte dos segundos do tempo limite de leitura padrão.

`stomp.default_read_timeout_usec` [int](language.types.integer.md)
:   A parte em microssegundos do tempo limite de leitura padrão.

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
