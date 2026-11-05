# Verifica se o nó possui atributos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.hasattributes.php

---

# DOMNode::hasAttributes

(PHP 5, PHP 7, PHP 8)

DOMNode::hasAttributes — 
Verifica se o nó possui atributos

### Descrição

public function **DOMNode::hasAttributes**(): [bool](language.types.boolean.md)

Este método verifica se o nó possui atributos. O nó testado deve ser
um **`XML_ELEMENT_NODE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMNode::hasChildNodes()](domnode.haschildnodes.md) - Verifica se o nó possui filhos

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
