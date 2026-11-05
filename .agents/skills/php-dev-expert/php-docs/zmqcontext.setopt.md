# Define uma opção de socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqcontext.setopt.php

---

# ZMQContext::setOpt

(PECL zmq >= 1.0.4)

ZMQContext::setOpt — Define uma opção de socket

### Descrição

public function **ZMQContext::setOpt**([int](language.types.integer.md) `$key`, [mixed](language.types.mixed.md) `$value`): [ZMQContext](class.zmqcontext.md)

Define uma opção de contexto ZMQ. O tipo do parâmetro `value` depende do parâmetro `key`.
Consulte os [Tipos de Constantes ZMQ](class.zmq.md#zmq.constants) para mais informações.

### Parâmetros

`key`
:   Uma das constantes **`ZMQ::CTXOPT_*`**.

`value`
:   O valor do parâmetro.

### Valor Retornado

Retorna o objeto atual. Lança uma exceção do tipo ZMQContextException caso haja erro.

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
