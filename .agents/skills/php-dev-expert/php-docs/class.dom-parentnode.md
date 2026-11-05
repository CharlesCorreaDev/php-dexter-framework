# A Interface Dom\ParentNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-parentnode.php

---

# A Interface Dom\ParentNode

(PHP 8 >= 8.4.0)

## Introdução

Este é o equivalente moderno e compatível com as especificações de
[DOMParentNode](class.domparentnode.md).

## Resumo da Interface

interface ****Dom\ParentNode**** {

/\* Propriedades \*/

public
readonly
[Dom\HTMLCollection](class.dom-htmlcollection.md)
[$children](class.dom-parentnode.md#dom-parentnode.props.children);

/\* Métodos \*/

public function [append](dom-parentnode.append.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [prepend](dom-parentnode.prepend.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [querySelector](dom-parentnode.queryselector.md)([string](language.types.string.md) `$selectors`): [?](language.types.null.md)[Dom\Element](class.dom-element.md)

public function [querySelectorAll](dom-parentnode.queryselectorall.md)([string](language.types.string.md) `$selectors`): [Dom\NodeList](class.dom-nodelist.md)

public function [replaceChildren](dom-parentnode.replacechildren.md)([Dom\Node](class.dom-node.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

}

## Propriedades

children
:   Um objeto [Dom\HTMLCollection](class.dom-htmlcollection.md) contendo todos os elementos
    filhos deste nó. Disponível a partir do PHP 8.5.0.

## Índice

- [Dom\ParentNode::append](dom-parentnode.append.md) — Acrescenta nós após o último nó filho
- [Dom\ParentNode::prepend](dom-parentnode.prepend.md) — Insere nós antes do primeiro nó filho
- [Dom\ParentNode::querySelector](dom-parentnode.queryselector.md) — Retorna o primeiro elemento que corresponde aos seletores CSS
- [Dom\ParentNode::querySelectorAll](dom-parentnode.queryselectorall.md) — Retorna uma coleção de elementos que correspondem aos seletores CSS
- [Dom\ParentNode::replaceChildren](dom-parentnode.replacechildren.md) — Substitui filhos no nó

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
