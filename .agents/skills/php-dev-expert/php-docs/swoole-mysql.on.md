# Registra uma função de retorno de chamada com base no nome do evento.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-mysql.on.php

---

# Swoole\MySQL::on

(PECL swoole >= 1.9.0)

Swoole\MySQL::on — Registra uma função de retorno de chamada com base no nome do evento.

### Descrição

public function **Swoole\MySQL::on**([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Registra uma função de retorno de chamada com base no nome do evento, atualmente apenas o evento 'close' é suportado.

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
