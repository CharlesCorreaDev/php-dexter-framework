# A classe parallel\Events

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parallel-events.php

---

# A classe parallel\Events

(0.9.0)

## O loop de eventos

O loop de eventos monitora o estado de conjuntos de futures e/ou channels (targets) para realizar a leitura ([parallel\Future::value()](parallel-future.value.md), [parallel\Channel::recv()](parallel-channel.recv.md)) e escreva operações ([parallel\Channel::send()](parallel-channel.send.md)) à medida que os destinos se tornam disponíveis e as operações podem ser executadas sem bloquear o loop de eventos.

## Resumo da classe

final
class **parallel\Events**
implements
[Countable](class.countable.md), [Traversable](class.traversable.md) {

/\* Input \*/

public function [setInput](parallel-events.setinput.md)(Input `$input`): [void](language.types.void.md)

/\* Targets \*/

public function [addChannel](parallel-events.addchannel.md)([parallel\Channel](class.parallel-channel.md) `$channel`): [void](language.types.void.md)

public function [addFuture](parallel-events.addfuture.md)([string](language.types.string.md) `$name`, [parallel\Future](class.parallel-future.md) `$future`): [void](language.types.void.md)

public function [remove](parallel-events.remove.md)([string](language.types.string.md) `$target`): [void](language.types.void.md)

/\* Behaviour \*/

public function [setBlocking](parallel-events.setblocking.md)([bool](language.types.boolean.md) `$blocking`): [void](language.types.void.md)

public function [setTimeout](parallel-events.settimeout.md)([int](language.types.integer.md) `$timeout`): [void](language.types.void.md)

/\* Polling \*/

public function [poll](parallel-events.poll.md)(): [?](language.types.null.md)[parallel\Events\Event](class.parallel-events-event.md)

}

## Índice

- [parallel\Events::setBlocking](parallel-events.setblocking.md) — Comportamento
- [parallel\Events::setTimeout](parallel-events.settimeout.md) — Comportamento
- [parallel\Events::setInput](parallel-events.setinput.md) — Entrada
- [parallel\Events::addChannel](parallel-events.addchannel.md) — Alvos
- [parallel\Events::addFuture](parallel-events.addfuture.md) — Alvos
- [parallel\Events::remove](parallel-events.remove.md) — Alvos
- [parallel\Events::poll](parallel-events.poll.md) — Pesquisa

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
