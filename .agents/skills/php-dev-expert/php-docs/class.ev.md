# A classe Ev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ev.php

---

# A classe Ev

(PECL ev >= 0.2.0)

## Introdução

Ev é uma classe estática que fornece acesso ao laço padrão e a algumas
operações comuns.

## Resumo da classe

final
class **Ev**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[FLAG\_AUTO](class.ev.md#ev.constants.flag-auto) = 0;

const
[int](language.types.integer.md)
[FLAG\_NOENV](class.ev.md#ev.constants.flag-noenv) = 16777216;

const
[int](language.types.integer.md)
[FLAG\_FORKCHECK](class.ev.md#ev.constants.flag-forkcheck) = 33554432;

const
[int](language.types.integer.md)
[FLAG\_NOINOTIFY](class.ev.md#ev.constants.flag-noinotify) = 1048576;

const
[int](language.types.integer.md)
[FLAG\_SIGNALFD](class.ev.md#ev.constants.flag-signalfd) = 2097152;

const
[int](language.types.integer.md)
[FLAG\_NOSIGMASK](class.ev.md#ev.constants.flag-nosigmask) = 4194304;

const
[int](language.types.integer.md)
[RUN\_NOWAIT](class.ev.md#ev.constants.run-nowait) = 1;

const
[int](language.types.integer.md)
[RUN\_ONCE](class.ev.md#ev.constants.run-once) = 2;

const
[int](language.types.integer.md)
[BREAK\_CANCEL](class.ev.md#ev.constants.break-cancel) = 0;

const
[int](language.types.integer.md)
[BREAK\_ONE](class.ev.md#ev.constants.break-one) = 1;

const
[int](language.types.integer.md)
[BREAK\_ALL](class.ev.md#ev.constants.break-all) = 2;

const
[int](language.types.integer.md)
[MINPRI](class.ev.md#ev.constants.minpri) = -2;

const
[int](language.types.integer.md)
[MAXPRI](class.ev.md#ev.constants.maxpri) = 2;

const
[int](language.types.integer.md)
[READ](class.ev.md#ev.constants.read) = 1;

const
[int](language.types.integer.md)
[WRITE](class.ev.md#ev.constants.write) = 2;

const
[int](language.types.integer.md)
[TIMER](class.ev.md#ev.constants.timer) = 256;

const
[int](language.types.integer.md)
[PERIODIC](class.ev.md#ev.constants.periodic) = 512;

const
[int](language.types.integer.md)
[SIGNAL](class.ev.md#ev.constants.signal) = 1024;

const
[int](language.types.integer.md)
[CHILD](class.ev.md#ev.constants.child) = 2048;

const
[int](language.types.integer.md)
[STAT](class.ev.md#ev.constants.stat) = 4096;

const
[int](language.types.integer.md)
[IDLE](class.ev.md#ev.constants.idle) = 8192;

const
[int](language.types.integer.md)
[PREPARE](class.ev.md#ev.constants.prepare) = 16384;

const
[int](language.types.integer.md)
[CHECK](class.ev.md#ev.constants.check) = 32768;

const
[int](language.types.integer.md)
[EMBED](class.ev.md#ev.constants.embed) = 65536;

const
[int](language.types.integer.md)
[CUSTOM](class.ev.md#ev.constants.custom) = 16777216;

const
[int](language.types.integer.md)
[ERROR](class.ev.md#ev.constants.error) = 2147483648;

const
[int](language.types.integer.md)
[BACKEND\_SELECT](class.ev.md#ev.constants.backend-select) = 1;

const
[int](language.types.integer.md)
[BACKEND\_POLL](class.ev.md#ev.constants.backend-poll) = 2;

const
[int](language.types.integer.md)
[BACKEND\_EPOLL](class.ev.md#ev.constants.backend-epoll) = 4;

const
[int](language.types.integer.md)
[BACKEND\_KQUEUE](class.ev.md#ev.constants.backend-kqueue) = 8;

const
[int](language.types.integer.md)
[BACKEND\_DEVPOLL](class.ev.md#ev.constants.backend-devpoll) = 16;

const
[int](language.types.integer.md)
[BACKEND\_PORT](class.ev.md#ev.constants.backend-port) = 32;

const
[int](language.types.integer.md)
[BACKEND\_ALL](class.ev.md#ev.constants.backend-all) = 63;

const
[int](language.types.integer.md)
[BACKEND\_MASK](class.ev.md#ev.constants.backend-mask) = 65535;

/\* Métodos \*/

final
public
static
function [backend](ev.backend.md)(): [int](language.types.integer.md)

final
public
static
function [depth](ev.depth.md)(): [int](language.types.integer.md)

final
public
static
function [embeddableBackends](ev.embeddablebackends.md)(): [int](language.types.integer.md)

final
public
static
function [feedSignal](ev.feedsignal.md)(
[int](language.types.integer.md) `$signum`
): [void](language.types.void.md)

final
public
static
function [feedSignalEvent](ev.feedsignalevent.md)(
[int](language.types.integer.md) `$signum`
): [void](language.types.void.md)

final
public
static
function [iteration](ev.iteration.md)(): [int](language.types.integer.md)

final
public
static
function [now](ev.now.md)(): [float](language.types.float.md)

final
public
static
function [nowUpdate](ev.nowupdate.md)(): [void](language.types.void.md)

final
public
static
function [recommendedBackends](ev.recommendedbackends.md)(): [int](language.types.integer.md)

final
public
static
function [resume](ev.resume.md)(): [void](language.types.void.md)

final
public
static
function [run](ev.run.md)(
[int](language.types.integer.md) `$flags`
 = ?): [void](language.types.void.md)

final
public
static
function [sleep](ev.sleep.md)(
[float](language.types.float.md) `$seconds`
): [void](language.types.void.md)

final
public
static
function [stop](ev.stop.md)(
[int](language.types.integer.md) `$how`
 = ?): [void](language.types.void.md)

final
public
static
function [supportedBackends](ev.supportedbackends.md)(): [int](language.types.integer.md)

final
public
static
function [suspend](ev.suspend.md)(): [void](language.types.void.md)

final
public
static
function [time](ev.time.md)(): [float](language.types.float.md)

final
public
static
function [verify](ev.verify.md)(): [void](language.types.void.md)

}

## Constantes predefinidas

Opções passadas para criar um laço:

**`Ev::FLAG_AUTO`**
:   O valor das opções padrão

**`Ev::FLAG_NOENV`**
:   Se esta opção for usada (ou o programa executar setuid ou setgid),
    `libev`
    não irá olhar para a variável de ambiente
    LIBEV\_FLAGS.
    Caso contrário (por padrão),
    LIBEV\_FLAGS
    substituirá as opções completamente se for encontrado. Útil para
    testes de desempenho e busca de bugs.

**`Ev::FLAG_FORKCHECK`**
:   Faz com que a libev verifique se há uma bifurcação em cada iteração, em vez de chamar
    [EvLoop::fork()](evloop.fork.md)
    manualmente. Isso funciona chamando
    `getpid()`
    em cada iteração do laço e, portanto, isso pode desacelerar o
    laço de eventos com muitas iterações de laço, mas geralmente não é
    perceptível. Esta configuração de opção não pode ser substituída ou especificada na
    variável de ambiente
    LIBEV\_FLAGS.

**`Ev::FLAG_NOINOTIFY`**
:   Quando esta opção é especificada,
    `libev`
    não tentará usar a API
    `inotify`
    para seus observadores
    [» ev\_stat](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_stat_code_did_the_file_attri).
    A opção pode ser útil para conservar descritores de arquivo inotify,
    caso contrário, cada laço usando observadores
    `ev_stat`
    consome um
    identificador
    `inotify`.

**`Ev::FLAG_SIGNALFD`**
:   Quando esta opção for especificada,
    `libev`
    tentará usar a API
    `signalfd`
    para seus observadores
    [» ev\_signal](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_signal_code_signal_me_when_a)
    (e
    [» ev\_child](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_child_code_watch_out_for_pro)).
    Essa API fornece sinais de forma síncrona, o que a torna
    mais rápida e pode possibilitar a obtenção dos dados do sinal enfileirados.
    Também pode simplificar o tratamento de sinais com threads, desde que os sinais
    sejam bloqueados adequadamente nos threads.
    `Signalfd`
    não será usado por padrão.

**`Ev::FLAG_NOSIGMASK`**
:   Quando esta opção for especificada,
    `libev`
    evitará modificar a máscara do sinal. Especificamente, isso significa ter
    certeza de que os sinais estão desbloqueados antes de recebê-los.

    Esse comportamento é útil para manipulação de sinal personalizado ou manipulação
    de sinais apenas em threads específicos.

Opções passadas para
[Ev::run()](ev.run.md)
ou
[EvLoop::run()](evloop.run.md)

**`Ev::RUN_NOWAIT`**
:   Significa que o laço de eventos irá procurar novos eventos, irá tratar esses
    eventos e quaisquer outros já pendentes, mas não irá esperar e bloquear
    o processo caso não haja eventos e retornará após uma
    iteração do laço. Às vezes, isso é útil para pesquisar e lidar com novos
    eventos ao fazer cálculos demorados, para manter o programa
    responsivo.

**`Ev::RUN_ONCE`**
:   Significa que o laço de eventos procurará novos eventos (aguardando se necessário)
    e tratará desses e de quaisquer outros já pendentes. Ele bloqueará
    o processo até que pelo menos um novo evento chegue (que pode ser um
    evento interno ao próprio libev, portanto não há garantia de que um
    retorno de chamada registrado pelo usuário será chamado) e retornará após uma
    iteração do laço.

Opção passada para
[Ev::stop()](ev.stop.md)
, ou
[EvLoop::stop()](evloop.stop.md)

**`Ev::BREAK_CANCEL`**
:   Cancele a operação de interrupção.

**`Ev::BREAK_ONE`**
:   Faz com que a chamada
    [Ev::run()](ev.run.md)
    (ou
    [EvLoop::run()](evloop.run.md))
    mais interna retorne.

**`Ev::BREAK_ALL`**
:   Faz com que todas as chamadas
    [Ev::run()](ev.run.md)
    (ou
    [EvLoop::run()](evloop.run.md))
    aninhadas retornem.

Prioridades do observador:

**`Ev::MINPRI`**
:   Prioridade mínima permitida do observador.

**`Ev::MAXPRI`**
:   Prioridade máxima permitida do observador.

Máscaras de bits de eventos (recebidos):

**`Ev::READ`**
:   O descritor de arquivo no
    observador [EvIo](class.evio.md)
    tornou-se legível.

**`Ev::WRITE`**
:   O descritor de arquivo no
    observador [EvIo](class.evio.md)
    tornou-se gravável.

**`Ev::TIMER`**
:   O tempo do observador [EvTimer](class.evtimer.md)
    expirou.

**`Ev::PERIODIC`**
:   O tempo do observador [EvPeriodic](class.evperiodic.md)
    expirou.

**`Ev::SIGNAL`**
:   Um sinal especificado em
    [EvSignal::\_\_construct()](evsignal.construct.md)
    foi recebido.

**`Ev::CHILD`**
:   O
    `pid`
    especificado em
    [EvChild::\_\_construct()](evchild.construct.md)
    recebeu uma alteração de status.

**`Ev::STAT`**
:   O caminho especificado no
    observador [EvStat](class.evstat.md)
    alterou seus atributos.

**`Ev::IDLE`**
:   O observador [EvIdle](class.evidle.md)
    funciona quando não há nada a fazer com outros observadores.

**`Ev::PREPARE`**
:   Todos
    os observadores [EvPrepare](class.evprepare.md)
    são invocados logo antes do início de
    [Ev::run()](ev.run.md).
    Assim,
    os observadores [EvPrepare](class.evprepare.md)
    são os últimos observadores invocados antes do laço de eventos dormir ou
    pesquisar novos eventos.

**`Ev::CHECK`**
:   Todos
    os observadores [EvCheck](class.evcheck.md)
    são enfileirados logo após
    [Ev::run()](ev.run.md)
    reunir os novos eventos, mas antes de enfileirar quaisquer retornos de chamada para
    quaisquer eventos recebidos. Assim,
    os observadores [EvCheck](class.evcheck.md)
    serão invocados antes de quaisquer outros observadores de prioridade igual ou
    inferior dentro de uma iteração do laço de eventos.

**`Ev::EMBED`**
:   O laço de eventos incorporado especificado no
    observador [EvEmbed](class.evembed.md)
    precisa de atenção.

**`Ev::CUSTOM`**
:   Nunca enviado (ou usado de outra forma) pela
    própria `libev`,
    mas pode ser usado livremente por usuários da
    `libev`
    para sinalizar observadores
    (por exemplo, via
    [EvWatcher::feed()](evwatcher.feed.md)).

**`Ev::ERROR`**
:   Ocorreu um erro não especificado, o observador foi interrompido. Isto
    pode acontecer porque o observador não pôde ser iniciado corretamente porque
    `libev`
    ficou sem memória, um descritor de arquivo foi fechado ou qualquer
    outro problema.
    `Libev`
    considera esses bugs de aplicação. Veja também
    [» ANATOMIA
    DE UM OBSERVADOR](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#ANATOMY_OF_A_WATCHER_CONTENT)

Opções de backend:

**`Ev::BACKEND_SELECT`**
:   `select(2) backend`

**`Ev::BACKEND_POLL`**
:   `poll(2) backend`

**`Ev::BACKEND_EPOLL`**
:   Backend
    `epoll(7)`
    específico do Linux para kernels pré e pós-2.6.9

**`Ev::BACKEND_KQUEUE`**
:   Backend `kqueue`
    usado na maioria dos sistemas BSD.
    O observador [EvEmbed](class.evembed.md)
    pode ser usado para incorporar um laço (com backend kqueue) em
    outro. Por exemplo, pode-se tentar criar um laço de eventos com backend
    `kqueue`
    e usá-lo apenas para soquetes.

**`Ev::BACKEND_DEVPOLL`**
:   Back-end do Solaris 8. Isso ainda não foi implementado.

**`Ev::BACKEND_PORT`**
:   Mecanismo de porta de eventos Solaris 10 com bom dimensionamento.

**`Ev::BACKEND_ALL`**
:   Experimente todos os back-ends (mesmo os corrompidos). Não é recomendado usá-lo
    explicitamente. Operadores bit a bit devem ser aplicados aqui (por exemplo,
    **`Ev::BACKEND_ALL`**
    & ~
    **`Ev::BACKEND_KQUEUE`**).
    Use
    [Ev::recommendedBackends()](ev.recommendedbackends.md)
    ou não não especifique nenhum back-end.

**`Ev::BACKEND_MASK`**
:   Não é um backend, mas uma máscara para selecionar todos os bits de
    backend do valor `flags`
    para mascarar quaisquer backends (por exemplo, ao modificar
    a variável de ambiente
    LIBEV\_FLAGS).

> **Nota**:
>
> Para o laço padrão durante a fase de inicialização do módulo,
> `Ev`
> registra
> [» ev\_loop\_fork](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS_CO)
> chamada por meio de
> `pthread_atfork`
> (se disponível).

> **Nota**:
>
> Existem métodos que fornecem acesso ao
> *laço de eventos
> padrão*
> na classe
> **Ev**
> (por exemplo,
> [Ev::iteration()](ev.iteration.md),
> [Ev::depth()](ev.depth.md)
> etc.) Para
> *laços personalizados*
> (criados com
> [EvLoop::\_\_construct()](evloop.construct.md))
> esses valores podem ser acessados através de propriedades e métodos
> correspondentes da
> classe
> [EvLoop](class.evloop.md).
>
> A instância do laço de eventos padrão em si pode ser obtida por meio do
> método
> [EvLoop::defaultLoop()](evloop.defaultloop.md).

## Índice

- [Ev::backend](ev.backend.md) — Retorna um inteiro descrevendo o backend usado por libev
- [Ev::depth](ev.depth.md) — Retorna profundidade de recursão
- [Ev::embeddableBackends](ev.embeddablebackends.md) — Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos
- [Ev::feedSignal](ev.feedsignal.md) — Alimenta um evento de sinal no Ev
- [Ev::feedSignalEvent](ev.feedsignalevent.md) — Alimenta o evento de sinal no laço padrão
- [Ev::iteration](ev.iteration.md) — Retorna o número de vezes que o laço de eventos padrão pesquisou novos
  eventos
- [Ev::now](ev.now.md) — Retorna o horário em que a última iteração do laço de eventos padrão
  foi iniciada
- [Ev::nowUpdate](ev.nowupdate.md) — Estabelece a hora atual consultando o kernel, atualizando o horário
  retornado por Ev::now no progresso
- [Ev::recommendedBackends](ev.recommendedbackends.md) — Retorna uma máscara de bits de backends recomendados para a
  plataforma atual
- [Ev::resume](ev.resume.md) — Retoma o laço de eventos padrão suspenso anteriormente
- [Ev::run](ev.run.md) — Começa a verificar eventos e chamar funções de retorno para o
  laço padrão
- [Ev::sleep](ev.sleep.md) — Bloqueia o processo pelo número de segundos fornecido
- [Ev::stop](ev.stop.md) — Interrompe o laço de eventos padrão
- [Ev::supportedBackends](ev.supportedbackends.md) — Retorna o conjunto de backends suportados pela configuração atual
  do libev
- [Ev::suspend](ev.suspend.md) — Suspende o laço de eventos padrão
- [Ev::time](ev.time.md) — Retorna o horário atual em segundos fracionários desde a época
- [Ev::verify](ev.verify.md) — Executa verificações de consistência interna (para depuração)

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
