# A classe EventBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventbase.php

---

# A classe EventBase

(PECL event >= 1.2.6-beta)

## Introdução

A classe **EventBase**
representa a estrutura base de eventos do libevent. Ele contém um conjunto de eventos
e pode pesquisar para determinar quais eventos estão ativos.

Cada base de eventos tem um
*método*,
ou um
*back-end*
que usa para determinar quais eventos estão prontos. Os métodos reconhecidos
são:
`select`,
`poll`,
`epoll`,
`kqueue`,
`devpoll`,
`evport`
e
`win32`.

Para configurar a base de eventos a ser usada ou evitar um back-end específico,
a classe [EventConfig](class.eventconfig.md)
pode ser usada.

**Aviso**

*NÃO*
destrua o
objeto
**EventBase**
enquanto os recursos dos objetos
`Event`
associados não forem liberados. Caso contrário, isso levará a resultados
imprevisíveis!

## Resumo da classe

final
class **EventBase**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[LOOP\_ONCE](class.eventbase.md#eventbase.constants.loop-once) = 1;

const
[int](language.types.integer.md)
[LOOP\_NONBLOCK](class.eventbase.md#eventbase.constants.loop-nonblock) = 2;

const
[int](language.types.integer.md)
[NOLOCK](class.eventbase.md#eventbase.constants.nolock) = 1;

const
[int](language.types.integer.md)
[STARTUP\_IOCP](class.eventbase.md#eventbase.constants.startup-iocp) = 4;

const
[int](language.types.integer.md)
[NO\_CACHE\_TIME](class.eventbase.md#eventbase.constants.no-cache-time) = 8;

const
[int](language.types.integer.md)
[EPOLL\_USE\_CHANGELIST](class.eventbase.md#eventbase.constants.epoll-use-changelist) = 16;

/\* Métodos \*/

public
function [\_\_construct](eventbase.construct.md)(
[EventConfig](class.eventconfig.md) `$cfg`
 = ?)

public
function [dispatch](eventbase.dispatch.md)(): [void](language.types.void.md)

public
function [exit](eventbase.exit.md)(
[float](language.types.float.md) `$timeout`
 = ?): [bool](language.types.boolean.md)

public
function [free](eventbase.free.md)(): [void](language.types.void.md)

public
function [getFeatures](eventbase.getfeatures.md)(): [int](language.types.integer.md)

public
function [getMethod](eventbase.getmethod.md)(): [string](language.types.string.md)

public
function [getTimeOfDayCached](eventbase.gettimeofdaycached.md)(): [float](language.types.float.md)

public
function [gotExit](eventbase.gotexit.md)(): [bool](language.types.boolean.md)

public
function [gotStop](eventbase.gotstop.md)(): [bool](language.types.boolean.md)

public
function [loop](eventbase.loop.md)(
[int](language.types.integer.md) `$flags`
 = ?): [bool](language.types.boolean.md)

public
function [priorityInit](eventbase.priorityinit.md)(
[int](language.types.integer.md) `$n_priorities`
): [bool](language.types.boolean.md)

public
function [reInit](eventbase.reinit.md)(): [bool](language.types.boolean.md)

public
function [stop](eventbase.stop.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`EventBase::LOOP_ONCE`**
:   Opção usada com o método
    [EventBase::loop()](eventbase.loop.md)
    que significa: "bloquear até que libevent tenha um evento ativo e então
    sair quando todos os eventos ativos tiverem suas funções de retorno executadas".

**`EventBase::LOOP_NONBLOCK`**
:   Opção usada com o método
    [EventBase::loop()](eventbase.loop.md)
    que significa: "não bloquear: veja quais eventos estão prontos agora, execute
    as funções de retorno de maior prioridade e depois saia".

**`EventBase::NOLOCK`**
:   Opção de configuração. Não aloque um bloqueio para a base de eventos, mesmo que
    se tenha um bloqueio configurado".

**`EventBase::STARTUP_IOCP`**
:   Opção de configuração somente do Windows. Ativa o despachante IOCP na
    inicialização.

**`EventBase::NO_CACHE_TIME`**
:   Opção de configuração. Em vez de verificar o horário atual sempre que o laço de
    eventos estiver pronto para executar funções de retorno de tempo limite, verifica após cada
    função de retorno de tempo limite.

**`EventBase::EPOLL_USE_CHANGELIST`**
:   Se estivermos usando o
    back-end `epoll`,
    este sinalizador diz que é seguro usar o código interno da lista de
    alterações do Libevent para agrupar adições e exclusões, a fim de tentar fazer o
    menor número possível de chamadas de sistema.

    Definir esta opção pode tornar o código executado mais rápido, mas pode desencadear um problema do Linux:
    não é seguro usar este sinalizador se houver algum descritor de arquivo clonado por
    dup() ou suas variantes. Fazer isso produzirá problemas estranhos e
    difíceis de diagnosticar.

    Esta opção também pode ser ativada configurando a
    variável de ambiente
    `EVENT_EPOLL_USE_CHANGELIST`.

    Esta opção não tem efeito se for usado um back-end
    diferente de `epoll`.

## Índice

- [EventBase::\_\_construct](eventbase.construct.md) — Constrói objeto EventBase
- [EventBase::dispatch](eventbase.dispatch.md) — Despacha eventos pendentes
- [EventBase::exit](eventbase.exit.md) — Para de despachar eventos
- [EventBase::free](eventbase.free.md) — Libera recursos alocados para esta base de eventos
- [EventBase::getFeatures](eventbase.getfeatures.md) — Retorna a máscara de bits dos recursos suportados
- [EventBase::getMethod](eventbase.getmethod.md) — Retorna o método de evento em uso
- [EventBase::getTimeOfDayCached](eventbase.gettimeofdaycached.md) — Retorna o horário base do evento atua
- [EventBase::gotExit](eventbase.gotexit.md) — Verifica se o laço de eventos foi informado para sair
- [EventBase::gotStop](eventbase.gotstop.md) — Verifica se o laço de eventos foi informado para sair
- [EventBase::loop](eventbase.loop.md) — Despacha eventos pendentes
- [EventBase::priorityInit](eventbase.priorityinit.md) — Define o número de prioridades por base de eventos
- [EventBase::reInit](eventbase.reinit.md) — Reinicializa a base de eventos (após um "fork")
- [EventBase::stop](eventbase.stop.md) — Informa ao event\_base para parar de despachar eventos

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
