# A classe EvPrepare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evprepare.php

---

# A classe EvPrepare

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvPrepare**
e
[EvCheck](class.evcheck.md)
são geralmente usados em pares.
Os observadores **EvPrepare**
são invocados antes do bloqueio do processo,
[EvCheck](class.evcheck.md)
depois.

Não é permitido chamar
[EvLoop::run()](evloop.run.md)
ou métodos ou funções similares que entrem no laço de eventos atual dos
observadores
**EvPrepare**
ou
[EvCheck](class.evcheck.md).
Outros laços além do atual são adequados, entretanto. A
lógica por trás disso é que não é necessário verificar a recursão
nesses observadores, ou seja, a sequência será sempre:
**EvPrepare**
-> bloqueando ->
[EvCheck](class.evcheck.md),
portanto, tendo um observador de cada tipo, eles sempre serão chamados em pares,
colocando entre colchetes a chamada de bloqueio.

O objetivo principal é integrar outros mecanismos de eventos no
*libev*
e seu uso está um tanto avançado. Eles poderiam ser usados, por exemplo, para
rastrear alterações de variáveis, implementar observadores personalizados, integrar net-snmp ou uma
biblioteca de corrotinas e muito mais. Ocasionalmente, eles também são úteis para
armazenar alguns dados em cache e deseja liberá-los antes de bloqueá-los.

É recomendado dar aos observadores
[EvCheck](class.evcheck.md)
a prioridade mais alta (
**`Ev::MAXPRI`**),
para garantir que eles estejam sendo executados antes de qualquer outro observador
após o poll (isso não importa para
observadores
**EvPrepare**).

Além disso,
os observadores do [EvCheck](class.evcheck.md)
não devem ativar/alimentar eventos. Embora
*libev*
suporte totalmente isso, eles podem ser executados antes que outros
observadores [EvCheck](class.evcheck.md)
façam seu trabalho.

## Resumo da classe

class **EvPrepare**

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
function [\_\_construct](evprepare.construct.md)(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?)

final
public
static
function [createStopped](evprepare.createstopped.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvPrepare](class.evprepare.md)

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

- [EvPrepare::\_\_construct](evprepare.construct.md) — Constrói objeto observador EvPrepare
- [EvPrepare::createStopped](evprepare.createstopped.md) — Cria uma instância parada do observador EvPrepare

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
