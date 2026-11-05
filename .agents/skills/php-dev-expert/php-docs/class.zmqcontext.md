# A classe ZMQContext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zmqcontext.php

---

# A classe ZMQContext

(PECL zmq >= 0.5.0)

## Introdução

## Resumo da classe

class **ZMQContext**
{

/\* Métodos \*/

public function [\_\_construct](zmqcontext.construct.md)([int](language.types.integer.md) `$io_threads` = 1, [bool](language.types.boolean.md) `$is_persistent` = **`true`**)

public function [getOpt](zmqcontext.getopt.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [getSocket](zmqcontext.getsocket.md)([int](language.types.integer.md) `$type`, [string](language.types.string.md) `$persistent_id` = **`null`**, [callable](language.types.callable.md) `$on_new_socket` = **`null`**): [ZMQSocket](class.zmqsocket.md)

public function [isPersistent](zmqcontext.ispersistent.md)(): [bool](language.types.boolean.md)

public function [setOpt](zmqcontext.setopt.md)([int](language.types.integer.md) `$key`, [mixed](language.types.mixed.md) `$value`): [ZMQContext](class.zmqcontext.md)

}

## Índice

- [ZMQContext::\_\_construct](zmqcontext.construct.md) — Constrói um novo objeto ZMQContext
- [ZMQContext::getOpt](zmqcontext.getopt.md) — Obtém uma opção de contexto
- [ZMQContext::getSocket](zmqcontext.getsocket.md) — Cria um novo socket
- [ZMQContext::isPersistent](zmqcontext.ispersistent.md) — Retorna se o contexto é persistente
- [ZMQContext::setOpt](zmqcontext.setopt.md) — Define uma opção de socket

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
