# Habilita eventos de leitura, escrita ou ambos em um evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.enable.php

---

# EventBufferEvent::enable

(PECL event >= 1.2.6-beta)

EventBufferEvent::enable — Habilita eventos de leitura, escrita ou ambos em um evento de buffer

### Descrição

public
function **EventBufferEvent::enable**(
[int](language.types.integer.md) `$events`
): [bool](language.types.boolean.md)

Habilita eventos
**`Event::READ`**,
**`Event::WRITE`**
ou
**`Event::READ`**
`|`
**`Event::WRITE`**
em um evento de buffer.

### Parâmetros

`events`
:   **`Event::READ`**,
    **`Event::WRITE`**
    ou
    **`Event::READ`**
    `|`
    **`Event::WRITE`**
    em um evento de buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBufferEvent::disable()](eventbufferevent.disable.md) - Desabilita eventos de leitura, escrita ou ambos em um evento de buffer

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
