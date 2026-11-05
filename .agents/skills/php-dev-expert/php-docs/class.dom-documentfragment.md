# A Classe Dom\DocumentFragment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-documentfragment.php

---

# A Classe Dom\DocumentFragment

(PHP 8 >= 8.4.0)

## Introdução

Isto representa um fragmento de documento, que pode ser usado como contêiner
para outros nós.

Este é o equivalente moderno e compatível com as especificações de
[DOMDocumentFragment](class.domdocumentfragment.md).

## Resumo da classe

class ****Dom\DocumentFragment****
extends
[Dom\Node](class.dom-node.md)
implements
[Dom\ParentNode](class.dom-parentnode.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_DISCONNECTED](class.dom-node.md#dom-node.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_PRECEDING](class.dom-node.md#dom-node.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_FOLLOWING](class.dom-node.md#dom-node.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_CONTAINS](class.dom-node.md#dom-node.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_CONTAINED\_BY](class.dom-node.md#dom-node.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[Dom\Node::DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.dom-node.md#dom-node.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
readonly
?[Dom\Element](class.dom-element.md)
[$firstElementChild](class.dom-documentfragment.md#dom-documentfragment.props.firstelementchild);

public
readonly
?[Dom\Element](class.dom-element.md)
[$lastElementChild](class.dom-documentfragment.md#dom-documentfragment.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.dom-documentfragment.md#dom-documentfragment.props.childelementcount);

public
readonly
[Dom\HTMLCollection](class.dom-htmlcollection.md)
[$children](class.dom-documentfragment.md#dom-documentfragment.props.children);

/\* Propriedades herdadas \*/

public
readonly
[int](language.types.integer.md)
[$nodeType](class.dom-node.md#dom-node.props.nodetype);

public
readonly
[string](language.types.string.md)
[$nodeName](class.dom-node.md#dom-node.props.nodename);

public
readonly
[string](language.types.string.md)
[$baseURI](class.dom-node.md#dom-node.props.baseuri);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.dom-node.md#dom-node.props.isconnected);

public
readonly
?[Dom\Document](class.dom-document.md)
[$ownerDocument](class.dom-node.md#dom-node.props.ownerdocument);

public
readonly
?[Dom\Node](class.dom-node.md)
[$parentNode](class.dom-node.md#dom-node.props.parentnode);

public
readonly
?[Dom\Element](class.dom-element.md)
[$parentElement](class.dom-node.md#dom-node.props.parentelement);

public
readonly
[Dom\NodeList](class.dom-nodelist.md)
[$childNodes](class.dom-node.md#dom-node.props.childnodes);

public
readonly
?[Dom\Node](class.dom-node.md)
[$firstChild](class.dom-node.md#dom-node.props.firstchild);

public
readonly
?[Dom\Node](class.dom-node.md)
[$lastChild](class.dom-node.md#dom-node.props.lastchild);

public
readonly
?[Dom\Node](class.dom-node.md)
[$previousSibling](class.dom-node.md#dom-node.props.previoussibling);

public
readonly
?[Dom\Node](class.dom-node.md)
[$nextSibling](class.dom-node.md#dom-node.props.nextsibling);

public
?[string](language.types.string.md)
[$nodeValue](class.dom-node.md#dom-node.props.nodevalue);

public
?[string](language.types.string.md)
[$textContent](class.dom-node.md#dom-node.props.textcontent);

/\* Métodos \*/

/\* Not documented yet \*/

/\* Métodos herdados \*/

/\* Not documented yet \*/

}

## Propriedades

firstElementChild
:   Primeiro elemento filho ou **`null`**.

lastElementChild
:   Último elemento filho ou **`null`**.

childElementCount
:   O número de elementos filhos.

children
:   Um objeto [Dom\HTMLCollection](class.dom-htmlcollection.md) contendo todos os elementos
    filhos deste nó. Disponível a partir do PHP 8.5.0.

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
