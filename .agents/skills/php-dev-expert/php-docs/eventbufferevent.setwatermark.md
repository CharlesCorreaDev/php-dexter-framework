# Ajusta marcas d'água de leitura e/ou gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.setwatermark.php

---

# EventBufferEvent::setWatermark

(PECL event >= 1.2.6-beta)

EventBufferEvent::setWatermark — Ajusta marcas d'água de leitura e/ou gravação

### Descrição

public
function **EventBufferEvent::setWatermark**(
[int](language.types.integer.md) `$events`
, 
[int](language.types.integer.md) `$lowmark`
, 
[int](language.types.integer.md) `$highmark`
): [void](language.types.void.md)

Ajusta as marcas d'água de leitura, as
*marcas d'água* de gravação,
ou ambas, de um único evento de buffer.

Uma marca d'água de evento de buffer é uma borda, um valor que especifica o número de bytes a
serem lidos ou escritos antes que a função de retorno seja chamada. Por padrão, cada evento de leitura/escrita
dispara uma chamada de função de retorno. Consulte
[» Programação de rede rápida
portátil e sem bloqueio com Libevent: Funções de retorno e marcas d’água](http://www.wangafu.net/~nickm/libevent-book/Ref6_bufferevent.html#_callbacks_and_watermarks)

### Parâmetros

`events`
:   Máscara de bits de
    **`Event::READ`**,
    **`Event::WRITE`**
    ou ambas.

`lowmark`
:   Valor mínimo da marca d'água.

`highmark`
:   Valor máximo de marca d'água.
    `0`
    significa "ilimitado".

### Valor Retornado

Nenhum valor é retornado.

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
