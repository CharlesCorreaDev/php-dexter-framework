# A classe EventListener

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventlistener.php

---

# A classe EventListener

(PECL event >= 1.5.0)

## Introdução

Representa um observador de conexão.

## Resumo da classe

final
class **EventListener**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[OPT\_LEAVE\_SOCKETS\_BLOCKING](class.eventlistener.md#eventlistener.constants.opt-leave-sockets-blocking) = 1;

const
[int](language.types.integer.md)
[OPT\_CLOSE\_ON\_FREE](class.eventlistener.md#eventlistener.constants.opt-close-on-free) = 2;

const
[int](language.types.integer.md)
[OPT\_CLOSE\_ON\_EXEC](class.eventlistener.md#eventlistener.constants.opt-close-on-exec) = 4;

const
[int](language.types.integer.md)
[OPT\_REUSEABLE](class.eventlistener.md#eventlistener.constants.opt-reuseable) = 8;

const
[int](language.types.integer.md)
[OPT\_THREADSAFE](class.eventlistener.md#eventlistener.constants.opt-threadsafe) = 16;

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)
[$fd](class.eventlistener.md#eventlistener.props.fd);

/\* Métodos \*/

public
function [\_\_construct](eventlistener.construct.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$data`
,  
    
[int](language.types.integer.md) `$flags`
,  
    
[int](language.types.integer.md) `$backlog`
,  
    
[mixed](language.types.mixed.md) `$target`
  
)

public
function [disable](eventlistener.disable.md)(): [bool](language.types.boolean.md)

public
function [enable](eventlistener.enable.md)(): [bool](language.types.boolean.md)

public
function [getBase](eventlistener.getbase.md)(): [void](language.types.void.md)

public
static
function [getSocketName](eventlistener.getsocketname.md)(
[string](language.types.string.md) `&$address`
, 
[mixed](language.types.mixed.md) `&$port`
 = ?): [bool](language.types.boolean.md)

public
function [setCallback](eventlistener.setcallback.md)(
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

public
function [setErrorCallback](eventlistener.seterrorcallback.md)(
[string](language.types.string.md) `$cb`
): [void](language.types.void.md)

}

## Propriedades

fd
:   Descritor de arquivo numérico do soquete subjacente. (Adicionado em
    `event-1.6.0`
    .)

## Constantes predefinidas

**`EventListener::OPT_LEAVE_SOCKETS_BLOCKING`**
:   Por padrão, o Libevent transforma descritores de arquivo subjacentes, ou soquetes, em
    modo sem bloqueio. Este sinalizador diz ao Libevent para deixá-los em modo
    bloqueante.

**`EventListener::OPT_CLOSE_ON_FREE`**
:   Se esta opção estiver definida, o observador de conexão fecha seu
    soquete subjacente quando o
    objeto **EventListener**
    é liberado.

**`EventListener::OPT_CLOSE_ON_EXEC`**
:   Se esta opção for definida, o observador de conexão definirá o sinalizador de fechamento na execução
    no soquete do observador subjacente. Consulte a documentação da plataforma para
    `fcntl`
    e
    **`FD_CLOEXEC`**
    para mais informações.

**`EventListener::OPT_REUSEABLE`**
:   Por padrão, em algumas plataformas, depois que um soquete de observador é fechado, nenhum
    outro soquete pode ser vinculado à mesma porta até que um tempo passe.
    Definir esta opção faz com que o Libevent marque o soquete como reutilizável, para que
    uma vez fechado, outro soquete possa ser aberto para escutar na mesma
    porta.

**`EventListener::OPT_THREADSAFE`**
:   Aloca bloqueios para o observador, para que seja seguro usá-lo em
    vários threads.

## Índice

- [EventListener::\_\_construct](eventlistener.construct.md) — Cria um novo ouvinte de conexão associado a uma base de eventos
- [EventListener::disable](eventlistener.disable.md) — Desabilita um objeto ouvinte de conexão de evento
- [EventListener::enable](eventlistener.enable.md) — Habilita um objeto ouvinte de conexão de evento
- [EventListener::getBase](eventlistener.getbase.md) — Retorna a base de eventos associada ao ouvinte de eventos
- [EventListener::getSocketName](eventlistener.getsocketname.md) — Recupera o endereço atual ao qual o
  soquete do ouvinte está vinculado
- [EventListener::setCallback](eventlistener.setcallback.md) — Define função de retorno
- [EventListener::setErrorCallback](eventlistener.seterrorcallback.md) — Define a função de retorno de erro do ouvinte de eventos

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
