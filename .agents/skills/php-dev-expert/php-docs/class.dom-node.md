# A Classe Dom\Node

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dom-node.php

---

# A Classe Dom\Node

(PHP 8 >= 8.4.0)

## Introdução

Este é o equivalente moderno e compatível com as especificações de
[DOMNode](class.domnode.md).

## Resumo da classe

class ****Dom\Node****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_DISCONNECTED](class.dom-node.md#dom-node.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_PRECEDING](class.dom-node.md#dom-node.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_FOLLOWING](class.dom-node.md#dom-node.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_CONTAINS](class.dom-node.md#dom-node.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_CONTAINED\_BY](class.dom-node.md#dom-node.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.dom-node.md#dom-node.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

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

}

## Constantes predefinidas

**`DOMNode::DOCUMENT_POSITION_DISCONNECTED`**
:   Definido quando o outro nó e o nó de referência não estão na mesma árvore.

**`DOMNode::DOCUMENT_POSITION_PRECEDING`**
:   Definido quando o outro nó precede o nó de referência.

**`DOMNode::DOCUMENT_POSITION_FOLLOWING`**
:   Definido quando o outro nó segue o nó de referência.

**`DOMNode::DOCUMENT_POSITION_CONTAINS`**
:   Definido quando o outro nó é um ancestral do nó de referência.

**`DOMNode::DOCUMENT_POSITION_CONTAINED_BY`**
:   Definido quando o outro nó é descendente do nó de referência.

**`DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC`**
:   Definido quando o resultado depende do comportamento específico da implementação
    e pode não ser portável.
    Isto pode acontecer com nós desconectados ou com nós de atributos.

## Propriedades

nodeType
:   Obtém o tipo do nó. Um dos constantes predefinidas **`XML_*_NODE`**

nodeName
:   Retorna o nome mais preciso para o tipo de nó atual.

    - Para elementos, este é o nome qualificado em HTML maiúsculo.
    - Para atributos, este é o nome qualificado.
    - Para instruções de processamento, este é o destino.
    - Para nós do tipo documento, este é o nome.

baseURI
:   O URI base absoluto deste nó, ou **`null`** se a implementação
    não conseguir obter um URI absoluto.

isConnected
:   Se o nó está conectado a um documento.

ownerDocument
:   O objeto [Dom\Document](class.dom-document.md) associado com
    este nó, ou **`null`** se este nó for um documento.

parentNode
:   O pai deste nó. Se não houver tal nó, isso retorna **`null`**.

parentElement
:   O elemento pai deste elemento. Se não houver tal elemento, isso retorna **`null`**.

childNodes
:   Um [Dom\NodeList](class.dom-nodelist.md) que contém todos
    os filhos deste nó. Se não houver filhos, este é um
    [Dom\NodeList](class.dom-nodelist.md) vazio.

firstChild
:   O primeiro filho deste nó. Se não houver tal nó, isso
    retorna **`null`**.

lastChild
:   O último filho deste nó. Se não houver tal nó, isso retorna **`null`**.

previousSibling
:   O nó imediatamente anterior a este nó. Se não houver tal
    nó, isso retorna **`null`**.

nextSibling
:   O nó imediatamente seguinte a este nó. Se não houver tal
    nó, isso retorna **`null`**.

nodeValue
:   O valor deste nó, dependendo do seu tipo.

textContent
:   O conteúdo textual deste nó e de seus descendentes.

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8 ao trabalhar com métodos ou propriedades.
> Os métodos do analisador detectam automaticamente a codificação ou permitem que o chamador especifique uma codificação.

## Veja também

- [» Especificação WHATWG de Node](https://dom.spec.whatwg.org/#interface-node)

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
