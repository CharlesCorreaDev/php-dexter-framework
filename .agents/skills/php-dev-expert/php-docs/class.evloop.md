# A classe EvLoop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evloop.php

---

# A classe EvLoop

(PECL ev >= 0.2.0)

## Introdução

Representa um laço de eventos que é sempre distinto do
*laço
padrão*.
Ao contrário do
*laço padrão*,
ele não pode lidar
com observadores
[EvChild](class.evchild.md).

Tendo threads, temos que criar um laço por thread e usar o
*laço padrão*
no thread pai.

O
*laço de eventos padrão*
é inicializado automaticamente por
*Ev*.
É acessível através de métodos
da classe
[Ev](class.ev.md), ou através
do método
[EvLoop::defaultLoop()](evloop.defaultloop.md).

## Resumo da classe

final
class **EvLoop**
{

/\* Propriedades \*/

public
[$data](class.evloop.md#evloop.props.data);

public
[$backend](class.evloop.md#evloop.props.backend);

public
[$is\_default\_loop](class.evloop.md#evloop.props.is-default-loop);

public
[$iteration](class.evloop.md#evloop.props.iteration);

public
[$pending](class.evloop.md#evloop.props.pending);

public
[$io\_interval](class.evloop.md#evloop.props.io-interval);

public
[$timeout\_interval](class.evloop.md#evloop.props.timeout-interval);

public
[$depth](class.evloop.md#evloop.props.depth);

/\* Métodos \*/

public
function [\_\_construct](evloop.construct.md)(  
    
[int](language.types.integer.md) `$flags`
 = ?,  
    
[mixed](language.types.mixed.md) `$data`
 = NULL
,  
    
[float](language.types.float.md) `$io_interval`
 = 0.0
,  
    
[float](language.types.float.md) `$timeout_interval`
 = 0.0
  
)

public
function [backend](evloop.backend.md)(): [int](language.types.integer.md)

final
public
function [check](evloop.check.md)(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?): [EvCheck](class.evcheck.md)

final
public
function [child](evloop.child.md)(  
    
[string](language.types.string.md) `$pid`
,  
    
[string](language.types.string.md) `$trace`
,  
    
[string](language.types.string.md) `$callback`
,  
    
[string](language.types.string.md) `$data`
 = ?,  
    
[string](language.types.string.md) `$priority`
 = ?  
): [EvChild](class.evchild.md)

public
static
function [defaultLoop](evloop.defaultloop.md)(  
    
[int](language.types.integer.md) `$flags`
 = Ev::FLAG\_AUTO
,  
    
[mixed](language.types.mixed.md) `$data`
 = NULL
,  
    
[float](language.types.float.md) `$io_interval`
 = 0.
,  
    
[float](language.types.float.md) `$timeout_interval`
 = 0.
  
): [EvLoop](class.evloop.md)

final
public
function [embed](evloop.embed.md)(  
    
[string](language.types.string.md) `$other`
,  
    
[string](language.types.string.md) `$callback`
 = ?,  
    
[string](language.types.string.md) `$data`
 = ?,  
    
[string](language.types.string.md) `$priority`
 = ?  
): [EvEmbed](class.evembed.md)

final
public
function [fork](evloop.fork.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvFork](class.evfork.md)

final
public
function [idle](evloop.idle.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvIdle](class.evidle.md)

public
function [invokePending](evloop.invokepending.md)(): [void](language.types.void.md)

final
public
function [io](evloop.io.md)(  
    
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
function [loopFork](evloop.loopfork.md)(): [void](language.types.void.md)

public
function [now](evloop.now.md)(): [float](language.types.float.md)

public
function [nowUpdate](evloop.nowupdate.md)(): [void](language.types.void.md)

final
public
function [periodic](evloop.periodic.md)(  
    
[float](language.types.float.md) `$offset`
,  
    
[float](language.types.float.md) `$interval`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvPeriodic](class.evperiodic.md)

final
public
function [prepare](evloop.prepare.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvPrepare](class.evprepare.md)

public
function [resume](evloop.resume.md)(): [void](language.types.void.md)

public
function [run](evloop.run.md)(
[int](language.types.integer.md) `$flags`
 = 0
): [void](language.types.void.md)

final
public
function [signal](evloop.signal.md)(  
    
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

final
public
function [stat](evloop.stat.md)(  
    
[string](language.types.string.md) `$path`
,  
    
[float](language.types.float.md) `$interval`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvStat](class.evstat.md)

public
function [stop](evloop.stop.md)(
[int](language.types.integer.md) `$how`
 = ?): [void](language.types.void.md)

public
function [suspend](evloop.suspend.md)(): [void](language.types.void.md)

final
public
function [timer](evloop.timer.md)(  
    
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
function [verify](evloop.verify.md)(): [void](language.types.void.md)

}

## Propriedades

data
:   Dados personalizados anexados ao laço

backend
:   *Somente Leitura*.
    As
    [opções de backend](class.ev.md#ev.constants.watcher-backends)
    indicando o backend do evento em uso.

is\_default\_loop
:   *Somente Leitura*.
    **`true`** se for o laço de eventos padrão.

iteration
:   A contagem de iterações atuais do laço. Veja
    [Ev::iteration()](ev.iteration.md)

pending
:   O número de observadores pendentes.
    `0`
    indica que não há observadores pendentes.

io\_interval
:   Um
    io\_interval mais alto
    permite que
    *libev*
    gaste mais tempo coletando eventos
    [EvIo](class.evio.md),
    para que mais eventos possam ser tratados por iteração, ao custo de
    aumentar a latência. Os tempos limite
    ([EvPeriodic](class.evperiodic.md)
    e
    [EvTimer](class.evtimer.md))
    não serão afetados. Definir isso com um valor diferente de zero introduzirá
    uma chamada
    `sleep()`
    adicional na maioria das iterações de laço. O tempo de suspensão garante que
    *libev*
    não pesquisará eventos
    [EvIo](class.evio.md)
    mais de uma vez por esse intervalo, em média. Muitos
    programas geralmente podem se beneficiar configurando o
    io\_interval
    para um valor próximo de
    `0.1`,
    o que geralmente é suficiente para servidores interativos (não para jogos). Geralmente
    não faz muito sentido defini-lo com um valor inferior a
    `0.01`,
    pois isso se aproxima da granularidade de tempo da maioria dos sistemas.

    Veja também
    [» FUNÇÕES DE
    CONTROLE DE LAÇOS DE EVENTOS](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS).

timeout\_interval
:   Um
    timeout\_interval
    maior permite que
    *libev*
    gaste mais tempo coletando tempos limite, às custas de maior
    latência/jitter/inexatidão (o retorno de chamada do inspetor será chamado mais tarde).
    Os observadores de [EvIo](class.evio.md)
    não serão afetados. Definir isso como um valor não nulo não
    introduzirá nenhuma sobrecarga no
    *libev*.
    Veja também
    [» FUNÇÕES DE
    CONTROLE DE LAÇOS DE EVENTOS](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS).

depth
:   A profundidade da recursão. Veja
    [Ev::depth()](ev.depth.md).

## Índice

- [EvLoop::backend](evloop.backend.md) — Retorna um inteiro descrevendo o backend usado por libev
- [EvLoop::check](evloop.check.md) — Cria o objeto EvCheck associado à instância atual do laço
  de eventos
- [EvLoop::child](evloop.child.md) — Cria o objeto EvChild associado ao laço de eventos atual
- [EvLoop::\_\_construct](evloop.construct.md) — Constrói o objeto de laço de eventos
- [EvLoop::defaultLoop](evloop.defaultloop.md) — Retorna ou cria o laço de eventos padrão
- [EvLoop::embed](evloop.embed.md) — Cria uma instância do observador EvEmbed associado
  ao objeto EvLoop atual
- [EvLoop::fork](evloop.fork.md) — Cria um objeto observador EvFork associado à instância atual
  do laço de eventos
- [EvLoop::idle](evloop.idle.md) — Cria objeto observador EvIdle associado à instância de laço de evento
  atual
- [EvLoop::invokePending](evloop.invokepending.md) — Invoca todos os observadores pendentes enquanto redefine seu estado pendente
- [EvLoop::io](evloop.io.md) — Cria objeto observador EvIo associado à instância de laço de evento
  atual
- [EvLoop::loopFork](evloop.loopfork.md) — Deve ser chamado após um fork
- [EvLoop::now](evloop.now.md) — Retorna o "horário do laço de eventos" atual
- [EvLoop::nowUpdate](evloop.nowupdate.md) — Estabelece o horário atual consultando o kernel, atualizando o
  horário retornado por EvLoop::now no progresso
- [EvLoop::periodic](evloop.periodic.md) — Cria um objeto observador EvPeriodic associado à instância atual do
  laço de eventos
- [EvLoop::prepare](evloop.prepare.md) — Cria um objeto observador EvPrepare associado à instância atual do
  laço de eventos
- [EvLoop::resume](evloop.resume.md) — Retoma o laço de eventos padrão suspenso anteriormente
- [EvLoop::run](evloop.run.md) — Começa a verificar eventos e chamar funções de retorno para o laço
- [EvLoop::signal](evloop.signal.md) — Cria um objeto observador EvSignal associado à instância atual do
  laço de eventos
- [EvLoop::stat](evloop.stat.md) — Cria objeto observador EvStat associado à instância de laço de evento
  atual
- [EvLoop::stop](evloop.stop.md) — Interrompe o laço de eventos
- [EvLoop::suspend](evloop.suspend.md) — Suspende o laço
- [EvLoop::timer](evloop.timer.md) — Cria objeto observador EvTimer associado à instância de laço de evento
  atual
- [EvLoop::verify](evloop.verify.md) — Executa verificações de consistência interna (para depuração)

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
