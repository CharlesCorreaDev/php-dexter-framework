# Obtém as informações da conexão pelo descritor de arquivo.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-server.getclientinfo.php

---

# Swoole\Server::getClientInfo

(PECL swoole >= 1.9.0)

Swoole\Server::getClientInfo — Obtém as informações da conexão pelo descritor de arquivo.

### Descrição

public function **Swoole\Server::getClientInfo**([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$reactor_id` = ?, [bool](language.types.boolean.md) `$ignore_error` = ?): [array](language.types.array.md)

### Parâmetros

`fd`
:   Descritores de arquivo.

`reactor_id`
:   O ID do thread do Reactor onde a conexão é feita.

`ignore_error`
:   Se deve ignorar erros, se definido como true,
    as informações da conexão serão retornadas mesmo se a conexão estiver fechada.

### Valor Retornado

Retorna informações sobre a conexão do cliente.

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
