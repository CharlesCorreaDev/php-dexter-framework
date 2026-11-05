# A Interface Dom\ChildNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-childnode.php

---

# A Interface Dom\ChildNode

(PHP 8 >= 8.4.0)

## Introdução

Este é o equivalente moderno e compatível com as especificações de
[DOMChildNode](class.domchildnode.md).

## Resumo da Interface

interface ****Dom\ChildNode**** {

/\* Métodos \*/

public function [after](dom-childnode.after.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [before](dom-childnode.before.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [remove](dom-childnode.remove.md)(): [void](language.types.void.md)

public function [replaceWith](dom-childnode.replacewith.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

}

## Índice

- [Dom\ChildNode::after](dom-childnode.after.md) — Adiciona nós após o nó
- [Dom\ChildNode::before](dom-childnode.before.md) — Adiciona nós antes do nó
- [Dom\ChildNode::remove](dom-childnode.remove.md) — Remove o nó
- [Dom\ChildNode::replaceWith](dom-childnode.replacewith.md) — Substitui o nó por novos nós

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
