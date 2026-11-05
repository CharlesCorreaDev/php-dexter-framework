# Recupera um nó especificado pelo índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnamednodemap.item.php

---

# DOMNamedNodeMap::item

(PHP 5, PHP 7, PHP 8)

DOMNamedNodeMap::item — Recupera um nó especificado pelo índice

### Descrição

public function **DOMNamedNodeMap::item**([int](language.types.integer.md) `$index`): [?](language.types.null.md)[DOMNode](class.domnode.md)

Recupera um nó especificado pelo `index` dentro do
objeto [DOMNamedNodeMap](class.domnamednodemap.md).

### Parâmetros

`index`
:   Índice dentro deste mapa.

### Valor Retornado

O nó na posição `index` no mapa, ou **`null`**
se esse não for um índice válido (maior ou igual ao número de nós
neste mapa).

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
