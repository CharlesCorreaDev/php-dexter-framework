# A classe ZMQPoll

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zmqpoll.php

---

# A classe ZMQPoll

(PECL zmq >= 0.5.0)

## Introdução

## Resumo da classe

class **ZMQPoll**
{

/\* Métodos \*/

public function [add](zmqpoll.add.md)([mixed](language.types.mixed.md) `$entry`, [int](language.types.integer.md) `$type`): [string](language.types.string.md)

public function [clear](zmqpoll.clear.md)(): [ZMQPoll](class.zmqpoll.md)

public function [count](zmqpoll.count.md)(): [int](language.types.integer.md)

public function [getLastErrors](zmqpoll.getlasterrors.md)(): [array](language.types.array.md)

public function [poll](zmqpoll.poll.md)([array](language.types.array.md) `&$readable`, [array](language.types.array.md) `&$writable`, [int](language.types.integer.md) `$timeout` = -1): [int](language.types.integer.md)

public function [remove](zmqpoll.remove.md)([mixed](language.types.mixed.md) `$item`): [bool](language.types.boolean.md)

}

## Índice

- [ZMQPoll::add](zmqpoll.add.md) — Adiciona o item na lista de pesquisa
- [ZMQPoll::clear](zmqpoll.clear.md) — Limpa a lista de consulta
- [ZMQPoll::count](zmqpoll.count.md) — Conta os itens na lista de consulta
- [ZMQPoll::getLastErrors](zmqpoll.getlasterrors.md) — Obtém erros da consulta
- [ZMQPoll::poll](zmqpoll.poll.md) — Consulta os itens
- [ZMQPoll::remove](zmqpoll.remove.md) — Remove um item da lista de consulta

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
