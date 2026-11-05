# Remove o nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-childnode.remove.php

---

# Dom\ChildNode::remove

(PHP 8 >= 8.4.0)

Dom\ChildNode::remove — Remove o nó

### Descrição

public function **Dom\ChildNode::remove**(): [void](language.types.void.md)

Remove o nó.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Dom\ChildNode::after()](dom-childnode.after.md) - Adiciona nós após o nó
- [Dom\ChildNode::before()](dom-childnode.before.md) - Adiciona nós antes do nó
- [Dom\ChildNode::replaceWith()](dom-childnode.replacewith.md) - Substitui o nó por novos nós
- **Dom\Node::removeChild()**

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
