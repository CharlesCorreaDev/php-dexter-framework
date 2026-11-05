# A classe EvIdle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evidle.php

---

# A classe EvIdle

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvIdle**
acionam eventos quando nenhum outro evento de prioridade igual ou superior
está pendente (
[EvPrepare](class.evprepare.md),
[EvCheck](class.evcheck.md)
e outros observadores
**EvIdle**
não contam como
receptores
de *eventos*).

Assim, enquanto o processo estiver ocupado manipulando soquetes ou limites de tempo (ou mesmo
sinais) de prioridade igual ou superior, ele não será acionado. Mas quando
o processo está ocioso(ou apenas observadores de prioridade mais baixa estão pendentes), os
observadores **EvIdle**
estão sendo chamados uma vez por iteração do laço de eventos - até serem interrompidos,
isto é, ou o processo receber mais eventos e fica ocupado novamente com
coisas de maior prioridade.

Além de manter o processo sem bloqueio (o que às vezes é útil por
si só),
os observadores **EvIdle**
são um bom lugar para fazer
*"processamento de pseudo-background"*,
ou atrasar processando coisas depois que o laço de eventos tiver tratado todos
os eventos pendentes.

O efeito mais notável é que enquanto quaisquer observadores
*idle*
estiverem ativos, o processo
*não*
será bloqueado enquanto aguarda por novos eventos.

## Resumo da classe

class **EvIdle**

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
function [\_\_construct](evidle.construct.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?, 
[int](language.types.integer.md) `$priority`
 = ?)

final
public
static
function [createStopped](evidle.createstopped.md)(
[string](language.types.string.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?, 
[int](language.types.integer.md) `$priority`
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

- [EvIdle::\_\_construct](evidle.construct.md) — Constrói o objeto observador EvIdle
- [EvIdle::createStopped](evidle.createstopped.md) — Cria uma instância de um objeto observador EvIdle

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
