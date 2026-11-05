# Obtém o número de nós no mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnamednodemap.count.php

---

# DOMNamedNodeMap::count

(PHP 7 >= 7.2.0, PHP 8)

DOMNamedNodeMap::count — Obtém o número de nós no mapa

### Descrição

public function **DOMNamedNodeMap::count**(): [int](language.types.integer.md)

Obtém o número de nós no mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de nós no mapa, que é idêntico à propriedade
[length](class.domnamednodemap.md#domnamednodemap.props.length).

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
