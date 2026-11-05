# A Classe Dom\DocumentType

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-documenttype.php

---

# A Classe Dom\DocumentType

(PHP 8 >= 8.4.0)

## Introdução

Cada [Dom\Document](class.dom-document.md) tem um atributo `doctype`
cujo valor é **`null`** ou um objeto **Dom\DocumentType**.

Este é o equivalente moderno e compatível com as especificações de
[DOMImplementation](class.domimplementation.md).

## Resumo da classe

class ****Dom\DocumentType****
extends
[Dom\Node](class.dom-node.md)
implements
[Dom\ChildNode](class.dom-childnode.md) {

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
[string](language.types.string.md)
[$name](class.dom-documenttype.md#dom-documenttype.props.name);

public
readonly
[Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md)
[$entities](class.dom-documenttype.md#dom-documenttype.props.entities);

public
readonly
[Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md)
[$notations](class.dom-documenttype.md#dom-documenttype.props.notations);

public
readonly
[string](language.types.string.md)
[$publicId](class.dom-documenttype.md#dom-documenttype.props.publicid);

public
readonly
[string](language.types.string.md)
[$systemId](class.dom-documenttype.md#dom-documenttype.props.systemid);

public
readonly
?[string](language.types.string.md)
[$internalSubset](class.dom-documenttype.md#dom-documenttype.props.internalsubset);

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

publicId
:   O identificador público do subconjunto externo.

systemId
:   O identificador do sistema do subconjunto externo. Isso pode ser um
    URI absoluto ou não.

name
:   O nome do DTD, ou seja, o nome imediatamente após a
    palavra-chave `DOCTYPE`.

entities
:   Um [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md) contendo as entidades
    gerais, tanto externas quanto externas, declaradas no DTD.

notations
:   Um [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md) contendo as notações
    declaradas no DTD.

internalSubset
:   O subconjunto interno como uma string, ou **`null`** se não houver nenhum. Isso
    não contém os colchetes delimitadores.

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
