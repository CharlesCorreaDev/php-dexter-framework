# Verifica se o nó possui filhos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.haschildnodes.php

---

# DOMNode::hasChildNodes

(PHP 5, PHP 7, PHP 8)

DOMNode::hasChildNodes — 
Verifica se o nó possui filhos

### Descrição

public function **DOMNode::hasChildNodes**(): [bool](language.types.boolean.md)

Esta função verifica se o nó possui filhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMNode::hasAttributes()](domnode.hasattributes.md) - Verifica se o nó possui atributos

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
