# A Classe Dom\Element

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-element.php

---

# A Classe Dom\Element

(PHP 8 >= 8.4.0)

## Introdução

Representa um elemento.

Este é o equivalente moderno e compatível com as especificações de
[DOMElement](class.domelement.md).

## Resumo da classe

class ****Dom\Element****
extends
[Dom\Node](class.dom-node.md)
implements
[Dom\ParentNode](class.dom-parentnode.md),
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
?[string](language.types.string.md)
[$namespaceURI](class.dom-element.md#dom-element.props.namespaceuri);

public
readonly
?[string](language.types.string.md)
[$prefix](class.dom-element.md#dom-element.props.prefix);

public
readonly
[string](language.types.string.md)
[$localName](class.dom-element.md#dom-element.props.localname);

public
readonly
[string](language.types.string.md)
[$tagName](class.dom-element.md#dom-element.props.tagname);

public
[string](language.types.string.md)
[$id](class.dom-element.md#dom-element.props.id);

public
[string](language.types.string.md)
[$className](class.dom-element.md#dom-element.props.classname);

public
readonly
[Dom\TokenList](class.dom-tokenlist.md)
[$classList](class.dom-element.md#dom-element.props.classlist);

public
readonly
[Dom\NamedNodeMap](class.dom-namednodemap.md)
[$attributes](class.dom-element.md#dom-element.props.attributes);

public
readonly
?[Dom\Element](class.dom-element.md)
[$firstElementChild](class.dom-element.md#dom-element.props.firstelementchild);

public
readonly
?[Dom\Element](class.dom-element.md)
[$lastElementChild](class.dom-element.md#dom-element.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.dom-element.md#dom-element.props.childelementcount);

public
readonly
?[Dom\Element](class.dom-element.md)
[$previousElementSibling](class.dom-element.md#dom-element.props.previouselementsibling);

public
readonly
?[Dom\Element](class.dom-element.md)
[$nextElementSibling](class.dom-element.md#dom-element.props.nextelementsibling);

public
readonly
[Dom\HTMLCollection](class.dom-htmlcollection.md)
[$children](class.dom-element.md#dom-element.props.children);

public
[string](language.types.string.md)
[$innerHTML](class.dom-element.md#dom-element.props.innerhtml);

public
[string](language.types.string.md)
[$outerHTML](class.dom-element.md#dom-element.props.outerhtml);

public
[string](language.types.string.md)
[$substitutedNodeValue](class.dom-element.md#dom-element.props.substitutednodevalue);

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

namespaceURI
:   O URI do namespace do elemento.

prefix
:   O prefixo do namespace do elemento.

localName
:   O nome local do elemento.

tagName
:   O nome qualificado do elemento, em formato HTML e maiúsculas.

className
:   Uma string representando as classes do elemento separadas por espaços.

classList
:   Retorna uma instância de [Dom\TokenList](class.dom-tokenlist.md) para
    facilitar o gerenciamento de classes neste elemento.

attributes
:   Retorna ums instância de [Dom\NamedNodeMap](class.dom-namednodemap.md) que
    representa os atributos deste elemento.

id
:   Reflete o ID do elemento através do atributo `"id"`.

firstElementChild
:   O primeiro elemento filho ou **`null`**.

lastElementChild
:   O último elemento filho ou **`null`**.

childElementCount
:   O número de elementos filhos.

previousElementSibling
:   O elemento irmão anterior ou **`null`**.

nextElementSibling
:   O próximo elemento irmão ou **`null`**.

children
:   Um objeto [Dom\HTMLCollection](class.dom-htmlcollection.md) contendo todos os elementos
    filhos deste nó. Disponível a partir do PHP 8.5.0.

innerHTML
:   O HTML interno (ou XML para documentos XML) do elemento.

outerHTML
:   O HTML externo (ou XML para documentos XML) do elemento, incluindo o
    próprio elemento. Disponível a partir do PHP 8.5.0.

substitutedNodeValue
:   O valor do nó com substituição de entidade habilitada.

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

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
