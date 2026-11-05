# Obtém o número de nós na lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnodelist.count.php

---

# DOMNodeList::count

(PHP 7 >= 7.2.0, PHP 8)

DOMNodeList::count — Obtém o número de nós na lista

### Descrição

public function **DOMNodeList::count**(): [int](language.types.integer.md)

Obtém o número de nós na lista.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de nós na lista, que é idêntico à propriedade
[length](class.domnodelist.md#domnodelist.props.length).

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
