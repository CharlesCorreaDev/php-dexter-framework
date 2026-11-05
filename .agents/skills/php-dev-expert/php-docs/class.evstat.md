# A classe EvStat

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.evstat.php

---

# A classe EvStat

(PECL ev >= 0.2.0)

## Introdução

**EvStat**
monitora um caminho do sistema de arquivos para alterações de atributos. Ele chama
*stat()*
nesse caminho em intervalos regulares (ou quando o sistema operacional sinaliza que mudou) e
vê se mudou em comparação com a última vez, invocando o retorno de chamada se isso
aconteceu.

O caminho não precisa existir: mudar de “caminho existe” para “caminho
não existe” é uma mudança de status como qualquer outra. A condição "caminho não
existe" é representada pelo item
`'nlink'`
sendo 0 (retornado pelo
método
[EvStat::attr()](evstat.attr.md)).

O caminho não deve terminar com uma barra nem conter componentes especiais como
`'.'`
ou
`..`.
O caminho deve ser absoluto: se for relativo e o diretório de trabalho
mudar, o comportamento será indefinido.

Como não existe uma interface portátil de notificação de alterações disponível, a
implementação portátil simplesmente chama
*stat()*
regularmente no caminho para ver se ele mudou de alguma forma. Para este caso, um
intervalo de pesquisa recomendado pode ser especificado. Se for especificado um intervalo
de pesquisa de
`0.0`
(altamente recomendado), então um valor padrão adequado e não especificado será
usado (que pode ser esperado em torno de 5 segundos, embora isso possa
mudar dinamicamente).
*libev*
também imporá um intervalo mínimo que atualmente está em torno de
`0.1`,
mas isso geralmente é um exagero.

Este tipo de observador não se destina a um grande número de
observadores **EvStat**,
pois mesmo com notificações de alteração suportadas pelo sistema operacional, isso pode
consumir muitos recursos.

## Resumo da classe

class **EvStat**

extends
[EvWatcher](class.evwatcher.md)
{

/\* Propriedades \*/

public
[$path](class.evstat.md#evstat.props.path);

public
[$interval](class.evstat.md#evstat.props.interval);

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
function [\_\_construct](evstat.construct.md)(  
    
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
  
)

public
function [attr](evstat.attr.md)(): [array](language.types.array.md)

final
public
static
function [createStopped](evstat.createstopped.md)(  
    
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
  
): [void](language.types.void.md)

public
function [prev](evstat.prev.md)(): [void](language.types.void.md)

public
function [set](evstat.set.md)(
[string](language.types.string.md) `$path`
, 
[float](language.types.float.md) `$interval`
): [void](language.types.void.md)

public
function [stat](evstat.stat.md)(): [bool](language.types.boolean.md)

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

interval
:   *Somente leitura*.
    Uma dica sobre a rapidez com que uma mudança deve ser detectada e
    normalmente deve ser especificada como
    `0.0`
    para permitir que
    *libev*
    escolha um valor adequado.

path
:   *Somente leitura*.
    O caminho para aguardar alterações de status.

## Índice

- [EvStat::attr](evstat.attr.md) — Retorna os valores detectados mais recentemente por Ev
- [EvStat::\_\_construct](evstat.construct.md) — Contrói objeto observador EvStat
- [EvStat::createStopped](evstat.createstopped.md) — Cria um objeto observador EvStat parado
- [EvStat::prev](evstat.prev.md) — Retorna o conjunto anterior de valores retornados por EvStat::attr
- [EvStat::set](evstat.set.md) — Configura o observador
- [EvStat::stat](evstat.stat.md) — Inicia a chamada stat

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
