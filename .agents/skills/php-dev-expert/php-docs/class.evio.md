# A classe EvIo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evio.php

---

# A classe EvIo

(PECL ev >= 0.2.0)

## Introdução

Os observadores **EvIo**
verificam se um descritor de arquivo (ou soquete, ou um fluxo convertível
em descritor de arquivo numérico) pode ser lido ou escrito em cada iteração do
laço de eventos, ou, mais precisamente, quando a leitura não bloquearia o
processo e a escrita seria pelo menos capaz de gravar alguns dados. Esse
comportamento é chamado de
*acionamento de nível*
porque os eventos continuam sendo recebidos enquanto a condição persistir. Para
parar de receber eventos, basta parar o observador.

O número de observadores de eventos de leitura e/ou gravação por
`fd`
é ilimitado. Definir todos os descritores de arquivo para o modo sem bloqueio também
costuma ser uma boa ideia (mas não é obrigatório).

Outra coisa a observar é que é muito fácil receber falsas
notificações de prontidão, ou seja, o retorno de chamada pode ser chamado com
**`Ev::READ`**
mas um
*read()*
subsequente irá na verdade, bloquear porque não há dados. É muito fácil entrar
nesta situação. Portanto, é melhor sempre usar E/S sem bloqueio: Um
*read()*
extra retornando
**`EAGAIN`**
(ou similar) é muito preferível a um programa suspenso até que alguns dados
cheguem.

Se por algum motivo for impossível executar o
`fd`
no modo sem bloqueio, teste novamente separadamente se um descritor de arquivo está
realmente pronto. Algumas pessoas usam
**`SIGALRM`**
e um temporizador de intervalo, apenas para ter certeza de que eles não bloquearão infinitamente.

Sempre considere usar o modo sem bloqueio.

## Resumo da classe

class **EvIo**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$fd](class.evio.md#evio.props.fd);

public
[$events](class.evio.md#evio.props.events);

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
function [\_\_construct](evio.construct.md)(  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$events`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
)

final
public
static
function [createStopped](evio.createstopped.md)(  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$events`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvIo](class.evio.md)

public
function [set](evio.set.md)(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$events`
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

fd

events

## Índice

- [EvIo::\_\_construct](evio.construct.md) — Constrói objeto observador EvIo
- [EvIo::createStopped](evio.createstopped.md) — Cria objeto observador EvIo parado
- [EvIo::set](evio.set.md) — Configura o observador

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
