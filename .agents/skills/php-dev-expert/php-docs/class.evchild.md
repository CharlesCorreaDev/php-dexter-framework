# A classe EvChild

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evchild.php

---

# A classe EvChild

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvChild**
são acionados quando o processo recebe um
**`SIGCHLD`**
em resposta a algumas mudanças no status do filho (geralmente quando um filho morre
ou sai). É permitido instalar um
observador **`EvChild`**
após o filho ter sido bifurcado(o que implica que ele já
pode ter saído), desde que o laço de eventos não seja inserido (ou seja continuado
a partir de um observador), ou seja, bifurcar e registrar imediatamente um observador
para o filho é bom, mas bifurcar e registrar um observador algumas iterações
do laço de eventos mais tarde ou na próxima invocação de retorno de chamada não é.

É permitido registrar observadores
**EvChild**
apenas
no
*laço padrão*.

## Resumo da classe

class **EvChild**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$pid](class.evchild.md#evchild.props.pid);

public
[$rpid](class.evchild.md#evchild.props.rpid);

public
[$rstatus](class.evchild.md#evchild.props.rstatus);

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
function [\_\_construct](evchild.construct.md)(  
    
[int](language.types.integer.md) `$pid`
,  
    
[bool](language.types.boolean.md) `$trace`
,  
    
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
function [createStopped](evchild.createstopped.md)(  
    
[int](language.types.integer.md) `$pid`
,  
    
[bool](language.types.boolean.md) `$trace`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
): [object](language.types.object.md)

public
function [set](evchild.set.md)(
[int](language.types.integer.md) `$pid`
, 
[bool](language.types.boolean.md) `$trace`
): [void](language.types.void.md)

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

pid
:   *Somente leitura*.
    O ID do processo que este observador observa, ou
    `0`,
    significando qualquer ID de processo.

rpid
:   *Somente leitura*.
    O ID do processo que detectou uma alteração de status.

rstatus
:   *Somente leitura*.
    O status de saída do processo causado por
    rpid.

## Índice

- [EvChild::\_\_construct](evchild.construct.md) — Constrói o objeto observador EvChild
- [EvChild::createStopped](evchild.createstopped.md) — Cria uma instância de um observador EvChild parado
- [EvChild::set](evchild.set.md) — Configura o observador

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
