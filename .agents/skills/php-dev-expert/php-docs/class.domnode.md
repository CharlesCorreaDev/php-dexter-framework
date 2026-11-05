# A classe DOMNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domnode.php

---

# A classe DOMNode

(PHP 5, PHP 7, PHP 8)

## Resumo da classe

class ****DOMNode****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_DISCONNECTED](class.domnode.md#domnode.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_PRECEDING](class.domnode.md#domnode.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_FOLLOWING](class.domnode.md#domnode.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_CONTAINS](class.domnode.md#domnode.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_CONTAINED\_BY](class.domnode.md#domnode.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.domnode.md#domnode.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$nodeName](class.domnode.md#domnode.props.nodename);

public
?[string](language.types.string.md)
[$nodeValue](class.domnode.md#domnode.props.nodevalue);

public
readonly
[int](language.types.integer.md)
[$nodeType](class.domnode.md#domnode.props.nodetype);

public
readonly
?[DOMNode](class.domnode.md)
[$parentNode](class.domnode.md#domnode.props.parentnode);

public
readonly
?[DOMElement](class.domelement.md)
[$parentElement](class.domnode.md#domnode.props.parentelement);

public
readonly
[DOMNodeList](class.domnodelist.md)
[$childNodes](class.domnode.md#domnode.props.childnodes);

public
readonly
?[DOMNode](class.domnode.md)
[$firstChild](class.domnode.md#domnode.props.firstchild);

public
readonly
?[DOMNode](class.domnode.md)
[$lastChild](class.domnode.md#domnode.props.lastchild);

public
readonly
?[DOMNode](class.domnode.md)
[$previousSibling](class.domnode.md#domnode.props.previoussibling);

public
readonly
?[DOMNode](class.domnode.md)
[$nextSibling](class.domnode.md#domnode.props.nextsibling);

public
readonly
?[DOMNamedNodeMap](class.domnamednodemap.md)
[$attributes](class.domnode.md#domnode.props.attributes);

public
readonly
[bool](language.types.boolean.md)
[$isConnected](class.domnode.md#domnode.props.isconnected);

public
readonly
?[DOMDocument](class.domdocument.md)
[$ownerDocument](class.domnode.md#domnode.props.ownerdocument);

public
readonly
?[string](language.types.string.md)
[$namespaceURI](class.domnode.md#domnode.props.namespaceuri);

public
[string](language.types.string.md)
[$prefix](class.domnode.md#domnode.props.prefix);

public
readonly
?[string](language.types.string.md)
[$localName](class.domnode.md#domnode.props.localname);

public
readonly
?[string](language.types.string.md)
[$baseURI](class.domnode.md#domnode.props.baseuri);

public
[string](language.types.string.md)
[$textContent](class.domnode.md#domnode.props.textcontent);

/\* Métodos \*/

public function [appendChild](domnode.appendchild.md)([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [C14N](domnode.c14n.md)(  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [C14NFile](domnode.c14nfile.md)(  
    [string](language.types.string.md) `$uri`,  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [cloneNode](domnode.clonenode.md)([bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [compareDocumentPosition](domnode.comparedocumentposition.md)([DOMNode](class.domnode.md) `$other`): [int](language.types.integer.md)

public function [contains](domnode.contains.md)([DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md) `$other`): [bool](language.types.boolean.md)

public function [getLineNo](domnode.getlineno.md)(): [int](language.types.integer.md)

public function [getNodePath](domnode.getnodepath.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getRootNode](domnode.getrootnode.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [DOMNode](class.domnode.md)

public function [hasAttributes](domnode.hasattributes.md)(): [bool](language.types.boolean.md)

public function [hasChildNodes](domnode.haschildnodes.md)(): [bool](language.types.boolean.md)

public function [insertBefore](domnode.insertbefore.md)([DOMNode](class.domnode.md) `$node`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$child` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [isDefaultNamespace](domnode.isdefaultnamespace.md)([string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [isEqualNode](domnode.isequalnode.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [isSameNode](domnode.issamenode.md)([DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [isSupported](domnode.issupported.md)([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

public function [lookupNamespaceURI](domnode.lookupnamespaceuri.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

public function [lookupPrefix](domnode.lookupprefix.md)([string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

public function [normalize](domnode.normalize.md)(): [void](language.types.void.md)

public function [removeChild](domnode.removechild.md)([DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [replaceChild](domnode.replacechild.md)([DOMNode](class.domnode.md) `$node`, [DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [\_\_sleep](domnode.sleep.md)(): [array](language.types.array.md)

public function [\_\_wakeup](domnode.wakeup.md)(): [void](language.types.void.md)

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

nodeName
:   Retorna o nome mais preciso para o tipo atual de nó

nodeValue
:   O valor deste nó, dependendo do seu tipo.
    Contrariamente à especificação do W3C, o valor do nó de
    [DOMElement](class.domelement.md) é igual a [DOMNode::textContent](class.domnode.md#domnode.props.textcontent) em vez
    de **`null`**.

nodeType
:   Obtém o tipo do nó. Um dos constantes predefinidas **`XML_*_NODE`**

parentNode
:   O pai deste nó. Se não houver tal nó, isso retorna **`null`**.

parentElement
:   O elemento pai deste elemento. Se não houver tal elemento, isso retorna **`null`**.

childNodes
:   Um [DOMNodeList](class.domnodelist.md) que contém todos
    os filhos deste nó. Se não houver filhos, isso é um
    [DOMNodeList](class.domnodelist.md) vazio.

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

attributes
:   Um [DOMNamedNodeMap](class.domnamednodemap.md) que contém os
    atributos deste nó (se for um [DOMElement](class.domelement.md))
    ou **`null`** caso contrário.

isConnected
:   Se o nó está conectado a um documento.

ownerDocument
:   O objeto [DOMDocument](class.domdocument.md) associado a este nó, ou **`null`** se este nó não tiver um documento associado (por exemplo, se estiver destacado ou se for um [DOMDocument](class.domdocument.md)).

namespaceURI
:   O URI do namespace deste nó, ou **`null`** se não estiver especificado.

prefix
:   O prefixo do namespace deste nó.

localName
:   Retorna a parte local do nome qualificado deste nó.

baseURI
:   O URI base absoluto deste nó, ou **`null`** se a implementação
    não conseguir obter um URI absoluto.

textContent
:   O conteúdo textual deste nó e de seus descendentes.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O método [DOMNode::compareDocumentPosition()](domnode.comparedocumentposition.md) foi adicionado. |
| 8.4.0 | As constantes **`DOMNode::DOCUMENT_POSITION_DISCONNECTED`**, **`DOMNode::DOCUMENT_POSITION_PRECEDING`**, **`DOMNode::DOCUMENT_POSITION_FOLLOWING`**, **`DOMNode::DOCUMENT_POSITION_CONTAINS`**, **`DOMNode::DOCUMENT_POSITION_CONTAINED_BY`** e **`DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC`** foram adicionadas. |
| 8.3.0 | Os métodos [DOMNode::contains()](domnode.contains.md) e [DOMNode::isEqualNode()](domnode.isequalnode.md) foram adicionados. |
| 8.3.0 | As propriedades [DOMNode::$parentElement](class.domnode.md#domnode.props.parentelement), e [DOMNode::$isConnected](class.domnode.md#domnode.props.isconnected) foram adicionadas. |
| 8.0.0 | Os métodos não implementados [DOMNode::compareDocumentPosition()](domnode.comparedocumentposition.md), [DOMNode::isEqualNode()](domnode.isequalnode.md), **DOMNode::getFeature()**, **DOMNode::setUserData()** e **DOMNode::getUserData()** foram removidos. |

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8. Use [mb\_convert\_encoding()](function.mb-convert-encoding.md), [UConverter::transcode()](uconverter.transcode.md) ou [iconv()](function.iconv.md) para lidar com outras codificações.

## Veja também

- [» Especificação do W3C para Node](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-1950641247)

## Índice

- [DOMNode::appendChild](domnode.appendchild.md) — Adiciona um novo filho ao final dos filhos
- [DOMNode::C14N](domnode.c14n.md) — Canonicaliza nós para uma string
- [DOMNode::C14NFile](domnode.c14nfile.md) — Canonicaliza nós para um arquivo
- [DOMNode::cloneNode](domnode.clonenode.md) — Clona um nó
- [DOMNode::compareDocumentPosition](domnode.comparedocumentposition.md) — Compara a posição de dois nós
- [DOMNode::contains](domnode.contains.md) — Verifica se o nó contém outro nó
- [DOMNode::getLineNo](domnode.getlineno.md) — Obtém o número da linha para um nó
- [DOMNode::getNodePath](domnode.getnodepath.md) — Obtém um XPath para um nó
- [DOMNode::getRootNode](domnode.getrootnode.md) — Obtém o nó raiz
- [DOMNode::hasAttributes](domnode.hasattributes.md) — Verifica se o nó possui atributos
- [DOMNode::hasChildNodes](domnode.haschildnodes.md) — Verifica se o nó possui filhos
- [DOMNode::insertBefore](domnode.insertbefore.md) — Adiciona um novo filho antes de um nó de referência
- [DOMNode::isDefaultNamespace](domnode.isdefaultnamespace.md) — Verifica se o namespaceURI especificado é o namespace padrão ou não
- [DOMNode::isEqualNode](domnode.isequalnode.md) — Verifica se ambos os nós são iguais
- [DOMNode::isSameNode](domnode.issamenode.md) — Indica se dois nós são o mesmo nó
- [DOMNode::isSupported](domnode.issupported.md) — Verifica se o recurso é suportado para a versão especificada
- [DOMNode::lookupNamespaceURI](domnode.lookupnamespaceuri.md) — Obtém o URI do namespace do nó com base no prefixo
- [DOMNode::lookupPrefix](domnode.lookupprefix.md) — Obtém o prefixo do namespace do nó com base no URI do namespace
- [DOMNode::normalize](domnode.normalize.md) — Normaliza o nó
- [DOMNode::removeChild](domnode.removechild.md) — Remove um filho da lista de filhos
- [DOMNode::replaceChild](domnode.replacechild.md) — Substitui um filho
- [DOMNode::\_\_sleep](domnode.sleep.md) — Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse
- [DOMNode::\_\_wakeup](domnode.wakeup.md) — Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse

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
