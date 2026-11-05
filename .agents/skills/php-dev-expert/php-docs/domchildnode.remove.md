# Remove o nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domchildnode.remove.php

---

# DOMChildNode::remove

(PHP 8)

DOMChildNode::remove — Remove o nó

### Descrição

public function **DOMChildNode::remove**(): [void](language.types.void.md)

Remove o nó.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [DOMChildNode::after()](domchildnode.after.md) - Adiciona nós após o nó
- [DOMChildNode::before()](domchildnode.before.md) - Adiciona nós antes do nó
- [DOMChildNode::replaceWith()](domchildnode.replacewith.md) - Substitui o nó por novos nós
- [DOMNode::removeChild()](domnode.removechild.md) - Remove um filho da lista de filhos

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
