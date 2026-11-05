# Adiciona funções de retorno de chamada acionadas por eventos.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-client.on.php

---

# Swoole\Client::on

(PECL swoole >= 1.9.0)

Swoole\Client::on — Adiciona funções de retorno de chamada acionadas por eventos.

### Descrição

public function **Swoole\Client::on**([string](language.types.string.md) `$event`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

### Parâmetros

`event`

`callback`

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
