# Retorna se o contexto é persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqcontext.ispersistent.php

---

# ZMQContext::isPersistent

(PECL zmq >= 0.5.0)

ZMQContext::isPersistent — Retorna se o contexto é persistente

### Descrição

public function **ZMQContext::isPersistent**(): [bool](language.types.boolean.md)

Retorna se o contexto é persistente. É necessário um contexto persistente para uma conexão persistente pois cada
socket é alocado a partir de um contexto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o contexto for persistente e **`false`** caso contrário.

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
