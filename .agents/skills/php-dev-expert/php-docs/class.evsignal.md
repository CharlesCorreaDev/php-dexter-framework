# A classe EvSignal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evsignal.php

---

# A classe EvSignal

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvSignal**
irão acionar um evento quando o processo receber um sinal específico
uma ou mais vezes. Mesmo que os sinais sejam muito assíncronos,
*libev*
tentará o seu melhor para entregar sinais de forma síncrona, ou seja, como parte do
processamento normal de eventos, como qualquer outro evento.

Não há limite para o número de observadores para o mesmo sinal, mas apenas
dentro do mesmo laço, ou seja, pode-se observar
**`SIGINT`**
no laço padrão e
**`SIGIO`**
em outro laço, mas não é permitido observar
**`SIGINT`**
no laço padrão e em outro laço ao mesmo tempo. No momento,
**`SIGCHLD`**
está permanentemente vinculado ao laço padrão.

Se possível e suportado,
*libev*
instalará seus manipuladores com o comportamento
`SA_RESTART`
(ou equivalente) habilitado, portanto as chamadas do sistema não devem ser
interrompidas indevidamente. No caso de um problema com chamadas do sistema sendo interrompidas por
sinais, todos os sinais podem ser bloqueados em um
observador [EvCheck](class.evcheck.md)
e desbloqueados em um
observador
[EvPrepare](class.evprepare.md).

## Resumo da classe

class **EvSignal**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$signum](class.evsignal.md#evsignal.props.signum);

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
function [\_\_construct](evsignal.construct.md)(  
    
[int](language.types.integer.md) `$signum`
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
function [createStopped](evsignal.createstopped.md)(  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvSignal](class.evsignal.md)

public
function [set](evsignal.set.md)(
[int](language.types.integer.md) `$signum`
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

signum
:   Número do sinal. Veja as constantes exportadas pela
    extensão *pcntl*.
    Veja também
    a página de manual
    `signal(7)`.

## Índice

- [EvSignal::\_\_construct](evsignal.construct.md) — Constrói objeto observador EvSignal
- [EvSignal::createStopped](evsignal.createstopped.md) — Cria objeto observador EvSignal parado
- [EvSignal::set](evsignal.set.md) — Configura o observador

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
