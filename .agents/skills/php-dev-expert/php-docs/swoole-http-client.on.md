# Registra função de retorno de chamada pelo nome do evento.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-http-client.on.php

---

# Swoole\Http\Client::on

(PECL swoole >= 1.9.0)

Swoole\Http\Client::on — Registra função de retorno de chamada pelo nome do evento.

### Descrição

public function **Swoole\Http\Client::on**([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

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
