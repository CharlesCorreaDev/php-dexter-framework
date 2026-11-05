# Retorna a máscara de bits dos eventos atualmente habilitados no evento do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.getenabled.php

---

# EventBufferEvent::getEnabled

(PECL event >= 1.2.6-beta)

EventBufferEvent::getEnabled — Retorna a máscara de bits dos eventos atualmente habilitados no evento do buffer

### Descrição

public
function **EventBufferEvent::getEnabled**(): [int](language.types.integer.md)

Retorna a máscara de bits dos eventos atualmente habilitados no evento do buffer.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro representando uma máscara de bits de eventos atualmente habilitados no
evento de buffer

### Veja também

- [EventBufferEvent::enable()](eventbufferevent.enable.md) - Habilita eventos de leitura, escrita ou ambos em um evento de buffer
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
