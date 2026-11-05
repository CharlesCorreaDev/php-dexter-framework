# Classe DOMAttr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domattr.php

---

# Classe [DOMAttr](class.domattr.md)

(PHP 5, PHP 7, PHP 8)

## Introdução

**DOMAttr** representa um atributo no objeto
[DOMElement](class.domelement.md).

## Resumo da classe

class ****DOMAttr****
extends
[DOMNode](class.domnode.md)
{

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
[$name](class.domattr.md#domattr.props.name);

public
readonly
[bool](language.types.boolean.md)
[$specified](class.domattr.md#domattr.props.specified);

public
[string](language.types.string.md)
[$value](class.domattr.md#domattr.props.value);

public
readonly
?[DOMElement](class.domelement.md)
[$ownerElement](class.domattr.md#domattr.props.ownerelement);

public
readonly
[mixed](language.types.mixed.md)
[$schemaTypeInfo](class.domattr.md#domattr.props.schematypeinfo);

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

public function [\_\_construct](domattr.construct.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = "")

public function [isId](domattr.isid.md)(): [bool](language.types.boolean.md)

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

name
:   O nome do atributo

ownerElement
:   O elemento que contém o atributo ou **`null`**.

schemaTypeInfo
:   Não foi implementado ainda, sempre será **`null`**

specified
:   Não foi implementado ainda, sempre será **`true`**

value
:   O valor do atributo.

    > **Nota**:
    >
    > Observe que entidades XML são expandidas ao atribuir um valor.
    > Portanto o caracter `&` tem um comportamento especial.
    > Configurar um value para si mesmo irá falhar se value contiver um `&`.
    > Para evitar uma substituição de entidades, utilize [DOMElement::setAttribute()](domelement.setattribute.md).

## Veja também

- [» Especificação da W3C para Attr](https://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-ID-637646024)

## Índice

- [DOMAttr::\_\_construct](domattr.construct.md) — Cria um novo objeto DOMAttr
- [DOMAttr::isId](domattr.isid.md) — Verifica se o atributo é um ID definido

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
