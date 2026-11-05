# A classe EvFork

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evfork.php

---

# A classe EvFork

(PECL ev >= 0.2.0)

## Introdução

Os observadores de fork são chamados quando um
`fork()`
foi detectado (geralmente porque quem sinalizou
*libev*
sobre isso chamando
[EvLoop::fork()](evloop.fork.md)).
A invocação é feita antes do próximo bloco do laço de eventos e antes dos observadores
[EvCheck](class.evcheck.md)
serem chamados, e somente no filho após o fork. Observe
que se quem estiver chamando
[EvLoop::fork()](evloop.fork.md)
o chamar no processo errado, os manipuladores de fork também serão invocados.

## Resumo da classe

class **EvFork**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades herdadas \*/

public
[$is\_active](class.evwatcher.md#evwatcher.props.is-active);

public
[$data](class.evwatcher.md#evwatcher.props.data);

public
[$is\_pending](class.evwatcher.md#evwatcher.props.is-pending);

public
[$priority](class.evwatcher.md#evwatcher.props.priority);

/\* Métodos \*/

public
function [\_\_construct](evfork.construct.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
)

final
public
static
function [createStopped](evfork.createstopped.md)(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?): [object](language.types.object.md)

/\* Métodos herdados \*/

public
function [EvWatcher::clear](evwatcher.clear.md)(): [int](language.types.integer.md)

public
function [EvWatcher::feed](evwatcher.feed.md)(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

public
function [EvWatcher::getLoop](evwatcher.getloop.md)(): [EvLoop](class.evloop.md)

public
function [EvWatcher::invoke](evwatcher.invoke.md)(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

public
function [EvWatcher::keepalive](evwatcher.keepalive.md)(
[bool](language.types.boolean.md) `$value`
 = ?): [bool](language.types.boolean.md)

public
function [EvWatcher::setCallback](evwatcher.setcallback.md)(
[callable](language.types.callable.md) `$callback`
): [void](language.types.void.md)

public
function [EvWatcher::start](evwatcher.start.md)(): [void](language.types.void.md)

public
function [EvWatcher::stop](evwatcher.stop.md)(): [void](language.types.void.md)

}

## Índice

- [EvFork::\_\_construct](evfork.construct.md) — Constrói o objeto observador EvFork
- [EvFork::createStopped](evfork.createstopped.md) — Cria uma instância parada da classe observadora EvFork

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
