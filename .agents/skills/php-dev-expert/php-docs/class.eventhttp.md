# A classe EventHttp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventhttp.php

---

# A classe EventHttp

(PECL event >= 1.4.0-beta)

## Introdução

Representa o servidor HTTP.

## Resumo da classe

final
class **EventHttp**
{

/\* Métodos \*/

public
function [accept](eventhttp.accept.md)(
[mixed](language.types.mixed.md) `$socket`
): [bool](language.types.boolean.md)

public
function [addServerAlias](eventhttp.addserveralias.md)(
[string](language.types.string.md) `$alias`
): [bool](language.types.boolean.md)

public
function [bind](eventhttp.bind.md)(
[string](language.types.string.md) `$address`
, 
[int](language.types.integer.md) `$port`
): [void](language.types.void.md)

public
function [\_\_construct](eventhttp.construct.md)(
[EventBase](class.eventbase.md) `$base`
, 
[EventSslContext](class.eventsslcontext.md) `$ctx`
 = **`null`**
)

public
function [removeServerAlias](eventhttp.removeserveralias.md)(
[string](language.types.string.md) `$alias`
): [bool](language.types.boolean.md)

public
function [setAllowedMethods](eventhttp.setallowedmethods.md)(
[int](language.types.integer.md) `$methods`
): [void](language.types.void.md)

public
function [setCallback](eventhttp.setcallback.md)(
[string](language.types.string.md) `$path`
, 
[string](language.types.string.md) `$cb`
, 
[string](language.types.string.md) `$arg`
 = ?): [void](language.types.void.md)

public
function [setDefaultCallback](eventhttp.setdefaultcallback.md)(
[string](language.types.string.md) `$cb`
, 
[string](language.types.string.md) `$arg`
 = ?): [void](language.types.void.md)

public
function [setMaxBodySize](eventhttp.setmaxbodysize.md)(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

public
function [setMaxHeadersSize](eventhttp.setmaxheaderssize.md)(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

public
function [setTimeout](eventhttp.settimeout.md)(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

}

## Índice

- [EventHttp::accept](eventhttp.accept.md) — Faz com que um servidor HTTP aceite conexões no recurso ou fluxo de soquete especificado
- [EventHttp::addServerAlias](eventhttp.addserveralias.md) — Adiciona um sinônimo de servidor ao objeto do servidor HTTP
- [EventHttp::bind](eventhttp.bind.md) — Vincula um servidor HTTP no endereço e porta especificados
- [EventHttp::\_\_construct](eventhttp.construct.md) — Constrói objeto EventHttp (o servidor HTTP)
- [EventHttp::removeServerAlias](eventhttp.removeserveralias.md) — Remove sinônimo do servidor
- [EventHttp::setAllowedMethods](eventhttp.setallowedmethods.md) — Define quais métodos HTTP são suportados em solicitações aceitas por este servidor e passadas para funções de retorno do usuário
- [EventHttp::setCallback](eventhttp.setcallback.md) — Define uma função de retorno para o URI especificado
- [EventHttp::setDefaultCallback](eventhttp.setdefaultcallback.md) — Define a função de retorno padrão para lidar com solicitações que não são capturadas por funções de retorno específicas
- [EventHttp::setMaxBodySize](eventhttp.setmaxbodysize.md) — Define o tamanho máximo do corpo da solicitação
- [EventHttp::setMaxHeadersSize](eventhttp.setmaxheaderssize.md) — Define o tamanho máximo do cabeçalho HTTP
- [EventHttp::setTimeout](eventhttp.settimeout.md) — Define o tempo limite para uma solicitação HTTP

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
