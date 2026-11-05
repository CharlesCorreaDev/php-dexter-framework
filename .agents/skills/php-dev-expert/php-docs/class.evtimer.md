# A classe EvTimer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evtimer.php

---

# A classe EvTimer

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvTimer**
são temporizadores relativos simples que geram um evento após um determinado
tempo e, opcionalmente, repetem-se em intervalos regulares depois disso.

Os cronômetros são baseados em tempo real, ou seja, se alguém registrar um evento que
expire após uma hora e redefinir o relógio do sistema para
*janeiro do ano passado*,
o tempo limite ainda expirará após (aproximadamente) uma hora. "Aproximadamente" porque
detectar saltos no tempo é difícil e algumas imprecisões são inevitáveis.

É garantido que o retorno de chamada seja invocado somente após o tempo limite ter passado
(não em, portanto, em sistemas com relógios de resolução muito baixa, isso pode
introduzir um pequeno atraso). Se vários temporizadores ficarem prontos durante a mesma
iteração do laço, então aqueles com valores de tempo limite anteriores serão invocados
antes daqueles de mesma prioridade com valores de tempo limite posteriores (mas isso
não é mais verdade quando um retorno de chamada chama
**EvLoop:: execute()**
recursivamente).

O próprio cronômetro fará o melhor esforço para evitar desvios, ou seja, se um
cronômetro estiver configurado para disparar a cada
`10`
segundos, ele normalmente disparará exatamente em intervalos de
`10`
segundos. Se, no entanto, o script não conseguir acompanhar o cronômetro
porque leva mais do que esses
`10`
segundos para fazer isso, o cronômetro não será acionado mais de uma vez por iteração do laço
de eventos.

## Resumo da classe

class **EvTimer**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$repeat](class.evtimer.md#evtimer.props.repeat);

public
[$remaining](class.evtimer.md#evtimer.props.remaining);

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
function [\_\_construct](evtimer.construct.md)(  
    
[float](language.types.float.md) `$after`
,  
    
[float](language.types.float.md) `$repeat`
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
function [again](evtimer.again.md)(): [void](language.types.void.md)

final
public
static
function [createStopped](evtimer.createstopped.md)(  
    
[float](language.types.float.md) `$after`
,  
    
[float](language.types.float.md) `$repeat`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvTimer](class.evtimer.md)

public
function [set](evtimer.set.md)(
[float](language.types.float.md) `$after`
, 
[float](language.types.float.md) `$repeat`
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

repeat
:   Se a repetição for
    `0.0`,
    ela será interrompida automaticamente quando o tempo limite for atingido. Se
    for positivo, o temporizador será automaticamente configurado para
    disparar novamente a cada repetição, segundos depois, até ser interrompido manualmente.

remaining
:   Retorna o tempo restante até que um cronômetro seja acionado. Se o temporizador estiver ativo,
    esse tempo será relativo ao tempo atual do laço de eventos, caso contrário,
    será o valor de tempo limite atualmente configurado.

    Isto é, depois de instanciar um
    **EvTimer**
    com um
    valor `after`
    de
    `5.0`
    e
    um valor `repeat`
    de
    `7.0`,
    remaining
    retorna
    `5.0`.
    Quando o cronômetro for iniciado e um segundo passar,
    remaining
    retornará
    `4.0`.
    Quando o cronômetro expirar e for reiniciado, ele retornará aproximadamente
    `7.0`
    (provavelmente um pouco menos, pois a invocação de retorno de chamada também leva algum tempo) e assim
    por diante.

## Índice

- [EvTimer::again](evtimer.again.md) — Reinicia o observador do temporizador
- [EvTimer::\_\_construct](evtimer.construct.md) — Contrói objeto observador EvTimer
- [EvTimer::createStopped](evtimer.createstopped.md) — Cria objeto observador EvTimer parado
- [EvTimer::set](evtimer.set.md) — Configura o observador

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
