# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Swoole**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [swoole.enable\_library](swoole.configuration.md#ini.swoole.enable-library) | On | **`INI_ALL`** |  |
| [swoole.enable\_fiber\_mock](swoole.configuration.md#ini.swoole.enable-fiber-mock) | Off | **`INI_ALL`** |  |
| [swoole.enable\_preemptive\_scheduler](swoole.configuration.md#ini.swoole.enable-preemptive-scheduler) | Off | **`INI_ALL`** |  |
| [swoole.display\_errors](swoole.configuration.md#ini.swoole.display-errors) | On | **`INI_ALL`** |  |
| [swoole.use\_shortname](swoole.configuration.md#ini.swoole.use-shortname) | On | **`INI_SYSTEM`** |  |
| [swoole.unixsock\_buffer\_size](swoole.configuration.md#ini.swoole.unixsock-buffer-size) | 8388608 | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`swoole.enable_library` [string](language.types.string.md)
:   Habilita/desabilita a biblioteca interna da extensão.

`swoole.enable_fiber_mock` [string](language.types.string.md)
:   Habilita/desabilita o uso da extensão xdebug para depurar aplicações Swoole.

`swoole.enable_preemptive_scheduler` [string](language.types.string.md)
:   Evita que algumas corrotinas consumam tempo de CPU por muito tempo em um loop apertado (10 ms de tempo de CPU), impedindo que outras corrotinas sejam agendadas.

`swoole.display_errors` [string](language.types.string.md)
:   Habilita/desabilita a exibição de mensagens de erro do Swoole.

`swoole.use_shortname` [string](language.types.string.md)
:   Habilita/desabilita apelidos abreviados.

`swoole.unixsock_buffer_size` [int](language.types.integer.md)
:   Define o tamanho do buffer do Socket para comunicação entre processos.

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
