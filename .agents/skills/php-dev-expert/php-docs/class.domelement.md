# A classe DOMElement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domelement.php

---

# A classe DOMElement

(PHP 5, PHP 7, PHP 8)

## Resumo da classe

class ****DOMElement****
extends
[DOMNode](class.domnode.md)
implements
[DOMParentNode](class.domparentnode.md),
[DOMChildNode](class.domchildnode.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_DISCONNECTED](class.domnode.md#domnode.constants.document-position-disconnected) = 0x1;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_PRECEDING](class.domnode.md#domnode.constants.document-position-preceding) = 0x2;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_FOLLOWING](class.domnode.md#domnode.constants.document-position-following) = 0x4;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINS](class.domnode.md#domnode.constants.document-position-contains) = 0x8;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_CONTAINED\_BY](class.domnode.md#domnode.constants.document-position-contained-by) = 0x10;

public
const
[int](language.types.integer.md)
[DOMNode::DOCUMENT\_POSITION\_IMPLEMENTATION\_SPECIFIC](class.domnode.md#domnode.constants.document-position-implementation-specific) = 0x20;

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$tagName](class.domelement.md#domelement.props.tagname);

public
[string](language.types.string.md)
[$className](class.domelement.md#domelement.props.classname);

public
[string](language.types.string.md)
[$id](class.domelement.md#domelement.props.id);

public
readonly
[mixed](language.types.mixed.md)
[$schemaTypeInfo](class.domelement.md#domelement.props.schematypeinfo);

public
readonly
?[DOMElement](class.domelement.md)
[$firstElementChild](class.domelement.md#domelement.props.firstelementchild);

public
readonly
?[DOMElement](class.domelement.md)
[$lastElementChild](class.domelement.md#domelement.props.lastelementchild);

public
readonly
[int](language.types.integer.md)
[$childElementCount](class.domelement.md#domelement.props.childelementcount);

public
readonly
?[DOMElement](class.domelement.md)
[$previousElementSibling](class.domelement.md#domelement.props.previouselementsibling);

public
readonly
?[DOMElement](class.domelement.md)
[$nextElementSibling](class.domelement.md#domelement.props.nextelementsibling);

/\* Propriedades herdadas \*/

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

public function [\_\_construct](domelement.construct.md)([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**, [string](language.types.string.md) `$namespace` = "")

public function [after](domelement.after.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [append](domelement.append.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [before](domelement.before.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [getAttribute](domelement.getattribute.md)([string](language.types.string.md) `$qualifiedName`): [string](language.types.string.md)

public function [getAttributeNames](domelement.getattributenames.md)(): [array](language.types.array.md)

public function [getAttributeNode](domelement.getattributenode.md)([string](language.types.string.md) `$qualifiedName`): [DOMAttr](class.domattr.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[false](language.types.singleton.md)

public function [getAttributeNodeNS](domelement.getattributenodens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMAttr](class.domattr.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md)

public function [getAttributeNS](domelement.getattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [string](language.types.string.md)

public function [getElementsByTagName](domelement.getelementsbytagname.md)([string](language.types.string.md) `$qualifiedName`): [DOMNodeList](class.domnodelist.md)

public function [getElementsByTagNameNS](domelement.getelementsbytagnamens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMNodeList](class.domnodelist.md)

public function [hasAttribute](domelement.hasattribute.md)([string](language.types.string.md) `$qualifiedName`): [bool](language.types.boolean.md)

public function [hasAttributeNS](domelement.hasattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [bool](language.types.boolean.md)

public function [insertAdjacentElement](domelement.insertadjacentelement.md)([string](language.types.string.md) `$where`, [DOMElement](class.domelement.md) `$element`): [?](language.types.null.md)[DOMElement](class.domelement.md)

public function [insertAdjacentText](domelement.insertadjacenttext.md)([string](language.types.string.md) `$where`, [string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [prepend](domelement.prepend.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [remove](domelement.remove.md)(): [void](language.types.void.md)

public function [removeAttribute](domelement.removeattribute.md)([string](language.types.string.md) `$qualifiedName`): [bool](language.types.boolean.md)

public function [removeAttributeNode](domelement.removeattributenode.md)([DOMAttr](class.domattr.md) `$attr`): [DOMAttr](class.domattr.md)|[false](language.types.singleton.md)

public function [removeAttributeNS](domelement.removeattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [void](language.types.void.md)

public function [replaceChildren](domelement.replacechildren.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [replaceWith](domelement.replacewith.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [setAttribute](domelement.setattribute.md)([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`): [DOMAttr](class.domattr.md)|[bool](language.types.boolean.md)

public function [setAttributeNode](domelement.setattributenode.md)([DOMAttr](class.domattr.md) `$attr`): [DOMAttr](class.domattr.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [setAttributeNodeNS](domelement.setattributenodens.md)([DOMAttr](class.domattr.md) `$attr`): [DOMAttr](class.domattr.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

public function [setAttributeNS](domelement.setattributens.md)([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [setIdAttribute](domelement.setidattribute.md)([string](language.types.string.md) `$qualifiedName`, [bool](language.types.boolean.md) `$isId`): [void](language.types.void.md)

public function [setIdAttributeNode](domelement.setidattributenode.md)([DOMAttr](class.domattr.md) `$attr`, [bool](language.types.boolean.md) `$isId`): [void](language.types.void.md)

public function [setIdAttributeNS](domelement.setidattributens.md)([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$qualifiedName`, [bool](language.types.boolean.md) `$isId`): [void](language.types.void.md)

public function [toggleAttribute](domelement.toggleattribute.md)([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[bool](language.types.boolean.md) `$force` = **`null`**): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [DOMNode::appendChild](domnode.appendchild.md)([DOMNode](class.domnode.md) `$node`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::C14N](domnode.c14n.md)(  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [DOMNode::C14NFile](domnode.c14nfile.md)(  
    [string](language.types.string.md) `$uri`,  
    [bool](language.types.boolean.md) `$exclusive` = **`false`**,  
    [bool](language.types.boolean.md) `$withComments` = **`false`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$xpath` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$nsPrefixes` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [DOMNode::cloneNode](domnode.clonenode.md)([bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::compareDocumentPosition](domnode.comparedocumentposition.md)([DOMNode](class.domnode.md) `$other`): [int](language.types.integer.md)

public function [DOMNode::contains](domnode.contains.md)([DOMNode](class.domnode.md)|[DOMNameSpaceNode](class.domnamespacenode.md)|[null](language.types.null.md) `$other`): [bool](language.types.boolean.md)

public function [DOMNode::getLineNo](domnode.getlineno.md)(): [int](language.types.integer.md)

public function [DOMNode::getNodePath](domnode.getnodepath.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::getRootNode](domnode.getrootnode.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [DOMNode](class.domnode.md)

public function [DOMNode::hasAttributes](domnode.hasattributes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::hasChildNodes](domnode.haschildnodes.md)(): [bool](language.types.boolean.md)

public function [DOMNode::insertBefore](domnode.insertbefore.md)([DOMNode](class.domnode.md) `$node`, [?](language.types.null.md)[DOMNode](class.domnode.md) `$child` = **`null`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::isDefaultNamespace](domnode.isdefaultnamespace.md)([string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

public function [DOMNode::isEqualNode](domnode.isequalnode.md)([?](language.types.null.md)[DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSameNode](domnode.issamenode.md)([DOMNode](class.domnode.md) `$otherNode`): [bool](language.types.boolean.md)

public function [DOMNode::isSupported](domnode.issupported.md)([string](language.types.string.md) `$feature`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

public function [DOMNode::lookupNamespaceURI](domnode.lookupnamespaceuri.md)([?](language.types.null.md)[string](language.types.string.md) `$prefix`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::lookupPrefix](domnode.lookupprefix.md)([string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

public function [DOMNode::normalize](domnode.normalize.md)(): [void](language.types.void.md)

public function [DOMNode::removeChild](domnode.removechild.md)([DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::replaceChild](domnode.replacechild.md)([DOMNode](class.domnode.md) `$node`, [DOMNode](class.domnode.md) `$child`): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

public function [DOMNode::\_\_sleep](domnode.sleep.md)(): [array](language.types.array.md)

public function [DOMNode::\_\_wakeup](domnode.wakeup.md)(): [void](language.types.void.md)

}

## Propriedades

childElementCount
:   O número de elementos filhos.

firstElementChild
:   O primeiro elemento filho ou **`null`**.

lastElementChild
:   O último elemento filho ou **`null`**.

nextElementSibling
:   O próximo elemento irmão ou **`null`**.

previousElementSibling
:   O elemento irmão anterior ou **`null`**.

schemaTypeInfo
:   Ainda não implementado, sempre retorna **`null`**

tagName
:   O nome do elemento

className
:   Uma string representando as classes do elemento separadas por espaços.

id
:   Reflete o ID do elemento através do atributo `"id"`.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | As propriedades className e id e os métodos [DOMElement::getAttributeNames()](domelement.getattributenames.md), [DOMElement::insertAdjacentElement()](domelement.insertadjacentelement.md), [DOMElement::insertAdjacentText()](domelement.insertadjacenttext.md) e [DOMElement::toggleAttribute()](domelement.toggleattribute.md) foram adicionados. |
| 8.0.0 | As propriedades firstElementChild, lastElementChild, childElementCount, previousElementSibling, e nextElementSibling foram adicionadas. |
| 8.0.0 | **DOMElement** agora implementa [DOMParentNode](class.domparentnode.md) e [DOMChildNode](class.domchildnode.md). |

## Notas

> **Nota**:
>
> A extensão DOM usa codificação UTF-8. Use [mb\_convert\_encoding()](function.mb-convert-encoding.md), [UConverter::transcode()](uconverter.transcode.md) ou [iconv()](function.iconv.md) para lidar com outras codificações.

## Índice

- [DOMElement::after](domelement.after.md) — Adiciona nós após o elemento
- [DOMElement::append](domelement.append.md) — Adiciona nós após o último nó filho
- [DOMElement::before](domelement.before.md) — Adiciona nós antes do elemento
- [DOMElement::\_\_construct](domelement.construct.md) — Cria um novo objeto DOMElement
- [DOMElement::getAttribute](domelement.getattribute.md) — Retorna o valor do atributo
- [DOMElement::getAttributeNames](domelement.getattributenames.md) — Obtém nomes de atributos
- [DOMElement::getAttributeNode](domelement.getattributenode.md) — Retorna o nó do atributo
- [DOMElement::getAttributeNodeNS](domelement.getattributenodens.md) — Retorna o nó do atributo
- [DOMElement::getAttributeNS](domelement.getattributens.md) — Retorna o valor do atributo
- [DOMElement::getElementsByTagName](domelement.getelementsbytagname.md) — Obtém elementos pelo nome da tag
- [DOMElement::getElementsByTagNameNS](domelement.getelementsbytagnamens.md) — Obtém elementos por namespaceURI e localName
- [DOMElement::hasAttribute](domelement.hasattribute.md) — Verifica se o atributo existe
- [DOMElement::hasAttributeNS](domelement.hasattributens.md) — Verifica se o atributo existe
- [DOMElement::insertAdjacentElement](domelement.insertadjacentelement.md) — Insere um elemento adjacente
- [DOMElement::insertAdjacentText](domelement.insertadjacenttext.md) — Insere texto adjacente
- [DOMElement::prepend](domelement.prepend.md) — Adiciona nós antes do primeiro nó filho
- [DOMElement::remove](domelement.remove.md) — Remove o elemento
- [DOMElement::removeAttribute](domelement.removeattribute.md) — Remove atributo
- [DOMElement::removeAttributeNode](domelement.removeattributenode.md) — Remove atributo
- [DOMElement::removeAttributeNS](domelement.removeattributens.md) — Remove atributo
- [DOMElement::replaceChildren](domelement.replacechildren.md) — Substitui filhos no elemento
- [DOMElement::replaceWith](domelement.replacewith.md) — Substitui o elemento por novos nodes
- [DOMElement::setAttribute](domelement.setattribute.md) — Adiciona ou modifica um atributo existente
- [DOMElement::setAttributeNode](domelement.setattributenode.md) — Adiciona um novo nó de atributo ao elemento
- [DOMElement::setAttributeNodeNS](domelement.setattributenodens.md) — Adiciona um novo nó de atributo ao elemento
- [DOMElement::setAttributeNS](domelement.setattributens.md) — Adiciona um novo atributo
- [DOMElement::setIdAttribute](domelement.setidattribute.md) — Declara que o atributo especificado pelo nome é do tipo ID
- [DOMElement::setIdAttributeNode](domelement.setidattributenode.md) — Declara que o atributo especificado pelo nó é do tipo ID
- [DOMElement::setIdAttributeNS](domelement.setidattributens.md) — Declara que o atributo especificado pelo nome local e pelo URI do namespace é do tipo ID
- [DOMElement::toggleAttribute](domelement.toggleattribute.md) — Alterna atributo

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
