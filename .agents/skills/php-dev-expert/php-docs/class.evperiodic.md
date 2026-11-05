# A classe EvPeriodic

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evperiodic.php

---

# A classe EvPeriodic

(PECL ev >= 0.2.0)

## Introdução

Os observadores periódicos também são uma espécie de cronômetros, mas são muito versáteis.

Ao contrário do
[EvTimer](class.evtimer.md),
os observadores **EvPeriodic**
não são baseados em tempo real (ou tempo relativo, o tempo físico
que passa), mas no tempo do relógio de parede (tempo absoluto, calendário ou relógio). A
diferença é que o tempo do relógio de parede pode ser mais rápido ou mais lento que o tempo
real, e os saltos no tempo não são incomuns (por exemplo, ao ajustá-lo).

O observador **EvPeriodic** p
ode ser configurado para ser acionado após algum momento específico.
Por exemplo, se um
observador **EvPeriodic**
estiver configurado para acionar
*"em 10 segundos"*
(por exemplo,
[EvLoop::now()](evloop.now.md)
+
`10.0`,
ou seja, um tempo absoluto, não um atraso), e o relógio do sistema for redefinido para
*janeiro do ano anterior*,
então levará um ano ou mais para acionar o evento (diferentemente de um
[EvTimer](class.evtimer.md),
que ainda seria acionado aproximadamente
`10`
segundos após iniciá-lo, pois usa um tempo limite relativo).

Assim como com os temporizadores, é garantido que o retorno de chamada seja invocado somente quando o
momento em que ele deveria ser acionado tiver passado. Se vários
temporizadores ficarem prontos durante a mesma iteração do laço, então aqueles com
valores de tempo limite anteriores serão invocados antes daqueles com valores de tempo
limite posteriores (mas isso não é mais verdade quando um retorno de chamada chama
[EvLoop::run()](evloop.run.md)
recursivamente).

## Resumo da classe

class **EvPeriodic**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$offset](class.evperiodic.md#evperiodic.props.offset);

public
[$interval](class.evperiodic.md#evperiodic.props.interval);

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
function [\_\_construct](evperiodic.construct.md)(  
    
[float](language.types.float.md) `$offset`
,  
    
[string](language.types.string.md) `$interval`
,  
    
[callable](language.types.callable.md) `$reschedule_cb`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
)

public
function [again](evperiodic.again.md)(): [void](language.types.void.md)

public
function [at](evperiodic.at.md)(): [float](language.types.float.md)

final
public
static
function [createStopped](evperiodic.createstopped.md)(  
    
[float](language.types.float.md) `$offset`
,  
    
[float](language.types.float.md) `$interval`
,  
    
[callable](language.types.callable.md) `$reschedule_cb`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvPeriodic](class.evperiodic.md)

public
function [set](evperiodic.set.md)(
[float](language.types.float.md) `$offset`
, 
[float](language.types.float.md) `$interval`
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

offset
:   Ao repetir, contém o valor de deslocamento, caso contrário, este é o
    ponto absoluto no tempo (o valor de deslocamento passado para
    [EvPeriodic::set()](evperiodic.set.md),
    embora
    *libev*
    possa modificar este valor para melhor estabilidade numérica).

interval
:   O valor do intervalo atual. Pode ser modificado a qualquer momento, mas as alterações só
    terão efeito quando o cronômetro periódico for acionado ou
    [EvPeriodic::again()](evperiodic.again.md)
    estiver sendo chamado.

## Índice

- [EvPeriodic::again](evperiodic.again.md) — Simplesmente para e reinicia o observador periódico novamente
- [EvPeriodic::at](evperiodic.at.md) — Retorna o tempo absoluto em que este observador
  deve disparar em seguida
- [EvPeriodic::\_\_construct](evperiodic.construct.md) — Constrói objeto observador EvPeriodic
- [EvPeriodic::createStopped](evperiodic.createstopped.md) — Cria um observador EvPeriodic parado
- [EvPeriodic::set](evperiodic.set.md) — Configura o observador

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
