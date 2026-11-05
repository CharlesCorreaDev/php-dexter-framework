# Fecha o descritor de arquivo associado ao evento de buffer atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.close.php

---

# EventBufferEvent::close

(PECL event >= 1.10.0)

EventBufferEvent::close — Fecha o descritor de arquivo associado ao evento de buffer atual

### Descrição

public
function **EventBufferEvent::close**(): [void](language.types.void.md)

Fecha o descritor de arquivo associado ao evento de buffer atual.

Este método pode ser usado em casos em que a opção
**`EventBufferEvent::OPT_CLOSE_ON_FREE`** não é apropriada.

### Parâmetros

Esta função não possui parâmetros.

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
