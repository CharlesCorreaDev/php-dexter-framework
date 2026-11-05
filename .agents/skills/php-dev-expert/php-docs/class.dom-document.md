# A Classe Dom\Document

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-document.php

---

# A Classe Dom\Document

(PHP 8 >= 8.4.0)

## Introdução

Representa um documento HTML ou XML inteiro; serve como a raiz da árvore do
documento.

Este é o equivalente moderno e compatível com as especificações de
[DOMDocument](class.domdocument.md).
É a classe base para [Dom\XMLDocument](class.dom-xmldocument.md)
e [Dom\HTMLDocument](class.dom-htmldocument.md).

## Resumo da classe

abstract
class ****Dom\Document****
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
[Dom\Implementation](class.dom-implementation.md)
[$implementation](class.dom-document.md#dom-document.props.implementation);

public
[string](language.types.string.md)
[$URL](class.dom-document.md#dom-document.props.url);

public
[string](language.types.string.md)
[$documentURI](class.dom-document.md#dom-document.props.documenturi);

public
[string](language.types.string.md)
[$characterSet](class.dom-document.md#dom-document.props.characterset);

public
[string](language.types.string.md)
[$charset](class.dom-document.md#dom-document.props.charset);

public
[string](language.types.string.md)
[$inputEncoding](class.dom-document.md#dom-document.props.inputencoding);

public
readonly
?[Dom\DocumentType](class.dom-documenttype.md)
[$doctype](class.dom-document.md#dom-document.props.doctype);

public
readonly
?[Dom\Element](class.dom-element.md)
[$documentElement](class.dom-document.md#dom-document.props.documentelement);

public
readonly
?[Dom\Element](class.dom-element.md)
[$firstElementChild](class.dom-document.md#dom-document.props.firstelementchild);

public
readonly
?[Dom\Element](class.dom-element.md)
[$lastElementChild](class.dom-document.md#dom-document.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.dom-document.md#dom-document.props.childelementcount);

public
readonly
[Dom\HTMLCollection](class.dom-htmlcollection.md)
[$children](class.dom-document.md#dom-document.props.children);

public
?[Dom\HTMLElement](class.dom-htmlelement.md)
[$body](class.dom-document.md#dom-document.props.body);

public
readonly
?[Dom\HTMLElement](class.dom-htmlelement.md)
[$head](class.dom-document.md#dom-document.props.head);

public
[string](language.types.string.md)
[$title](class.dom-document.md#dom-document.props.title);

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

/\* Ainda não documentado \*/

/\* Métodos herdados \*/

/\* Ainda não documentado \*/

}

## Propriedades

implementation
:   O objeto [DOMImplementation](class.domimplementation.md) que manipula
    este documento.

doctype
:   A Declaração de Tipo de Documento associada a este documento.

URL
:   Equivalente a documentURI.

characterSet
:   A codificação do documento usado para serialização.
    Ao analisar um documento, isso é definido como a codificação
    de entrada desse documento.

inputEncoding
:   Sinônimo legado de characterSet.

charset
:   Sinônimo legado de characterSet.

documentURI
:   A localização do documento ou **`null`** se indefinido.

documentElement
:   O objeto [Dom\Element](class.dom-element.md), ou seja, o elemento do documento.
    É interpretado como **`null`** para documento sem elementos.

firstElementChild
:   Primeiro elemento filho ou **`null`**.

lastElementChild
:   Último elemento filho ou **`null`**.

childElementCount
:   O número de elementos filhos.

children
:   Um objeto [Dom\HTMLCollection](class.dom-htmlcollection.md) contendo todos os elementos
    filhos deste nó. Disponível a partir do PHP 8.5.0.

body
:   O primeiro filho do elemento `html` que é uma etiqueta
    `body` ou uma etiqueta `frameset`.
    Eles precisam estar no namespace HTML.
    Se nenhum elemento corresponder, será avaliado como **`null`**.

head
:   O primeiro elemento `head` que é filho do elemento
    `html`.
    Eles precisam estar no namespace HTML.
    Se nenhum elemento corresponder, será avaliado como **`null`**.

title
:   O título do documento conforme definido pelo elemento `title`
    para HTML ou pelo elemento SVG `title` para SVG.
    Se não houver título, isso será avaliado como uma string vazia.

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
