# A classe Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.event.php

---

# A classe Event

(PECL event >= 1.2.6-beta)

## Introdução

A classe **Event**
representa um evento disparado em um descritor de arquivo pronto para leitura
ou escrita; um descritor de arquivo ficando pronto para leitura ou gravação
(somente E/S acionada por alteração de status); um tempo limite expirando; um sinal ocorrendo; um
evento acionado pelo usuário.

Cada evento está associado a
[EventBase](class.eventbase.md).
Entretanto, o evento nunca será acionado até que seja
*adicionado*
(via
[Event::add()](event.add.md)).
Um evento adicionado permanece no estado
*pendente*
até que o evento registrado ocorra, passando assim para o estado
*ativo*.
Para lidar com eventos, o usuário pode registrar uma função de retorno que é chamada quando
o evento se torna ativo. Se o evento estiver configurado
como *persistente*,
ele permanecerá pendente. Se não for persistente, ele deixa de ficar pendente quando
a função de retorno for executada.
O método
[Event::del()](event.del.md)
*exclui*
o evento, tornando-o não pendente. Através do método
[Event::add()](event.add.md)
ele pode ser adicionado novamente.

## Resumo da classe

final
class **Event**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[ET](class.event.md#event.constants.et) = 32;

const
[int](language.types.integer.md)
[PERSIST](class.event.md#event.constants.persist) = 16;

const
[int](language.types.integer.md)
[READ](class.event.md#event.constants.read) = 2;

const
[int](language.types.integer.md)
[WRITE](class.event.md#event.constants.write) = 4;

const
[int](language.types.integer.md)
[SIGNAL](class.event.md#event.constants.signal) = 8;

const
[int](language.types.integer.md)
[TIMEOUT](class.event.md#event.constants.timeout) = 1;

/\* Propriedades \*/

public
readonly
[bool](language.types.boolean.md)
[$pending](class.event.md#event.props.pending);

/\* Métodos \*/

public
function [add](event.add.md)(
[float](language.types.float.md) `$timeout`
 = ?): [bool](language.types.boolean.md)

public
function [\_\_construct](event.construct.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$what`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = NULL
  
)

public
function [del](event.del.md)(): [bool](language.types.boolean.md)

public
function [free](event.free.md)(): [void](language.types.void.md)

public
static
function [getSupportedMethods](event.getsupportedmethods.md)(): [array](language.types.array.md)

public
function [pending](event.pending.md)(
[int](language.types.integer.md) `$flags`
): [bool](language.types.boolean.md)

public
function [set](event.set.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$what`
 = ?,  
    
[callable](language.types.callable.md) `$cb`
 = ?,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [bool](language.types.boolean.md)

public
function [setPriority](event.setpriority.md)(
[int](language.types.integer.md) `$priority`
): [bool](language.types.boolean.md)

public
function [setTimer](event.settimer.md)(
[EventBase](class.eventbase.md) `$base`
, 
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = ?): [bool](language.types.boolean.md)

public
static
function [signal](event.signal.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [Event](class.event.md)

public
static
function [timer](event.timer.md)(
[EventBase](class.eventbase.md) `$base`
, 
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = ?): [Event](class.event.md)

}

## Propriedades

pending
:   Informa se o evento está pendente.
    Consulte [sobre persistência de eventos](event.persistence.md).

## Constantes predefinidas

**`Event::ET`**
:   Indica que o evento deve ser acionado por alteração de sinal, se o back-end da base de
    eventos subjacente suportar eventos acionados por alteração de sinal. Isso afeta a
    semântica
    de **`Event::READ`**
    e
    **`Event::WRITE`**.

**`Event::PERSIST`**
:   Indica que o evento é persistente. Consulte
    [sobre persistência de eventos](event.persistence.md).

**`Event::READ`**
:   Esta opção indica um evento que se torna ativo quando o descritor de arquivo fornecido
    (geralmente um recurso de fluxo ou soquete) está pronto para leitura.

**`Event::WRITE`**
:   Esta opção indica um evento que se torna ativo quando o descritor de arquivo fornecido
    (geralmente um recurso de fluxo ou soquete) está pronto para escrita.

**`Event::SIGNAL`**
:   Usado para implementar a detecção de sinal. Consulte "Construindo eventos de sinal"
    abaixo.

**`Event::TIMEOUT`**
:   Esta opção indica um evento que se torna ativo depois de decorrido um tempo
    limite.

    A
    flag **`Event::TIMEOUT`**
    é ignorada ao construir um evento: pode-se definir um
    tempo limite quando o evento é
    *adicionado*, ou não.
    É definido no argumento
    `$what`
    para a função de retorno quando ocorre um tempo limite.

## Índice

- [Event::add](event.add.md) — Torna o evento pendente
- [Event::addSignal](event.addsignal.md) — Sinônimo de Event::add
- [Event::addTimer](event.addtimer.md) — Sinônimo de Event::add
- [Event::\_\_construct](event.construct.md) — Constrói o objeto Event
- [Event::del](event.del.md) — Torna o evento não pendente
- [Event::delSignal](event.delsignal.md) — Sinônimo de Event::del
- [Event::delTimer](event.deltimer.md) — Sinônimo de Event::del
- [Event::free](event.free.md) — Torna o evento não pendente e libera recursos alocados para este
  evento
- [Event::getSupportedMethods](event.getsupportedmethods.md) — Retorna um array com nomes de métodos suportados nesta versão do Libevent
- [Event::pending](event.pending.md) — Detecta se o evento está pendente ou agendado
- [Event::set](event.set.md) — Reconfigura o evento
- [Event::setPriority](event.setpriority.md) — Define a prioridade do evento
- [Event::setTimer](event.settimer.md) — Reconfigura o evento do temporizador
- [Event::signal](event.signal.md) — Constrói objeto de evento de sinal
- [Event::timer](event.timer.md) — Constrói objeto de evento de temporizador

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
