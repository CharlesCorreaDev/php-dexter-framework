# Vincula a função de retorno ao servidor HTTP pelo nome do evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-http-server.on.php

---

# Swoole\Http\Server::on

(PECL swoole >= 1.9.0)

Swoole\Http\Server::on — Vincula a função de retorno ao servidor HTTP pelo nome do evento

### Descrição

public function **Swoole\Http\Server::on**([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Vincula a função de retorno ao servidor HTTP pelo nome do evento.

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
