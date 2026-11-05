# A classe EvEmbed

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evembed.php

---

# A classe EvEmbed

(PECL ev >= 0.2.0)

## Introdução

Usado para incorporar um laço de eventos em outro.

## Resumo da classe

class **EvEmbed**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$embed](class.evembed.md#evembed.props.embed);

/\* Métodos \*/

public
function [\_\_construct](evembed.construct.md)(  
    
[object](language.types.object.md) `$other`
,  
    
[callable](language.types.callable.md) `$callback`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
)

final
public
static
function [createStopped](evembed.createstopped.md)(  
    
[object](language.types.object.md) `$other`
,  
    
[callable](language.types.callable.md) `$callback`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
): [void](language.types.void.md)

public
function [set](evembed.set.md)(
[object](language.types.object.md) `$other`
): [void](language.types.void.md)

public
function [sweep](evembed.sweep.md)(): [void](language.types.void.md)

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

## Propriedades

is\_active

data

is\_pending

priority

embed

## Índice

- [EvEmbed::\_\_construct](evembed.construct.md) — Constrói o objeto EvEmbed
- [EvEmbed::createStopped](evembed.createstopped.md) — Cria objeto observador EvEmbed parado
- [EvEmbed::set](evembed.set.md) — Configura o observador
- [EvEmbed::sweep](evembed.sweep.md) — Faz uma varredura única e sem bloqueio sobre o laço incorporado

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
