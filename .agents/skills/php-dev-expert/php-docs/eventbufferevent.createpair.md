# Cria dois eventos de buffer conectados um ao outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.createpair.php

---

# EventBufferEvent::createPair

(PECL event >= 1.2.6-beta)

EventBufferEvent::createPair — Cria dois eventos de buffer conectados um ao outro

### Descrição

public
static
function **EventBufferEvent::createPair**(
[EventBase](class.eventbase.md) `$base`
, 
[int](language.types.integer.md) `$options`
 = 0
): [array](language.types.array.md)

Retorna um array de dois
objeto [EventBufferEvent](class.eventbufferevent.md)
conectados um ao outro. Todas as opções usuais são suportadas,
exceto para
**`EventBufferEvent::OPT_CLOSE_ON_FREE`**,
que não tem efeito e
**`EventBufferEvent::OPT_DEFER_CALLBACKS`**
que está sempre ligado.

### Parâmetros

`base`
:   Base de eventos associados

`options`
:   Constantes EventBufferEvent::OPT\_\*
    combinadas com o operador
    binário
    `OR`.

### Valor Retornado

Retorna um array de dois
objetos [EventBufferEvent](class.eventbufferevent.md)
conectados um ao outro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.9.0 | O método se tornou estático. |

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
