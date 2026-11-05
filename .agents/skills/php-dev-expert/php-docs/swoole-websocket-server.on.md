# Registra função de retorno de chamada de evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-websocket-server.on.php

---

# Swoole\WebSocket\Server::on

(PECL swoole >= 1.9.0)

Swoole\WebSocket\Server::on — Registra função de retorno de chamada de evento

### Descrição

public function **Swoole\WebSocket\Server::on**([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): ReturnType

Registra função de retorno de chamada de evento

### Parâmetros

`event_name`

`callback`

### Valor Retornado

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
