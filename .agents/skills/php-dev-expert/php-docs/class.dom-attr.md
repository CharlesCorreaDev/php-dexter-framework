# A Classe Dom\Attr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-attr.php

---

# A Classe [Dom\Attr](class.dom-attr.md)

(PHP 8 >= 8.4.0)

## Introdução

**Dom\Attr** representa um atributo no
objeto [Dom\Element](class.dom-element.md).

Este é o equivalente moderno e compatível com as
especificações do [DOMAttr](class.domattr.md).

## Resumo da classe

class ****Dom\Attr****
extends
[Dom\Node](class.dom-node.md)
{

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
?[string](language.types.string.md)
[$namespaceURI](class.dom-attr.md#dom-attr.props.namespaceuri);

public
readonly
?[string](language.types.string.md)
[$prefix](class.dom-attr.md#dom-attr.props.prefix);

public
readonly
[string](language.types.string.md)
[$localName](class.dom-attr.md#dom-attr.props.localname);

public
readonly
[string](language.types.string.md)
[$name](class.dom-attr.md#dom-attr.props.name);

public
[string](language.types.string.md)
[$value](class.dom-attr.md#dom-attr.props.value);

public
readonly
?[Dom\Element](class.dom-element.md)
[$ownerElement](class.dom-attr.md#dom-attr.props.ownerelement);

public
readonly
[bool](language.types.boolean.md)
[$specified](class.dom-attr.md#dom-attr.props.specified);

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

public function [isId](dom-attr.isid.md)(): [bool](language.types.boolean.md)

public function [rename](dom-attr.rename.md)([?](language.types.null.md)[string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$qualifiedName`): [void](language.types.void.md)

/\* Métodos herdados \*/

/\* Not documented yet \*/

}

## Propriedades

namespaceURI
:   O URI do namespace do atributo.

prefix
:   O prefixo do namespace do atributo.

localName
:   O nome local do atributo.

name
:   O nome qualificado do atributo.

value
:   O valor do atributo.

    > **Nota**:
    >
    > Ao contrário da propriedade equivalente em [DOMAttr](class.domattr.md),
    > esta não substitui entidades.

ownerElement
:   O elemento que contém o atributo ou **`null`**.

specified
:   Opção legada, sempre é **`true`**.

## Veja também

- [» Especificação WHATWG de Attr](https://dom.spec.whatwg.org/#interface-attr)

## Índice

- [Dom\Attr::isId](dom-attr.isid.md) — Verifica se o atributo é um ID definido
- [Dom\Attr::rename](dom-attr.rename.md) — Altera o nome qualificado ou namespace de um atributo

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
